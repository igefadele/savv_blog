<?php 

namespace App\Controllers;

use PHPMailer\PHPMailer\PHPMailer;
use Savv\Utils\Log;
use Savv\Utils\Validator; 

/**
 * Handles submission of the public contact form endpoint.
 */
class ContactController {

    /**
     * Validate the contact form payload and send it through the configured SMTP server.
     *
     * The method returns JSON responses for success, validation errors, invalid
     * request methods, bot submissions, configuration issues, and mail transport failures.
     *
     * @return \Savv\Utils\Response JSON response describing the submission outcome.
     */
    public function submit() {
        if (request()->method() !== "POST") {
            return response()->json([
                "status" => "error",
                "message" => "Method not allowed"
            ], 405);
        }

        $input = request()->only([
            'honeypot',
            'name',
            'email',
            'subject',
            'message',
            'type',
            'company',
            'phone',
            'budget',
        ]);

        $input['type'] = $input['type'] ?: 'General';
        $input['company'] = $input['company'] ?: 'N/A';
        $input['phone'] = $input['phone'] ?: 'N/A';
        $input['budget'] = $input['budget'] ?: 'Not specified';

        if (request()->filled('honeypot')) {
            return response()->json([
                "status" => "success",
                "message" => "Message sent (silently ignored)"
            ]);
        }

        // Define Rules
        $rules = [
            'name'    => 'required',
            'email'   => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ];

        // Validate 
        if (!Validator::validate($input, $rules)) {
            return response()->json([
                "status" => "error", 
                "errors" => Validator::getErrors()
            ], 422);
        }

        $mail = new PHPMailer(true);

        try {
            $smtpHost = config('mail.smtp.host');
            $smtpUser = config('mail.smtp.user');
            $smtpPass = config('mail.smtp.password');
            $smtpPort = config('mail.smtp.port');
            $smtpFrom = config('mail.smtp.from');
            $smtpTo   = config('mail.smtp.to');
            $smtpSecurity = config('mail.smtp.security');

            $missing = [];
            if (!$smtpHost) $missing[] = 'SMTP_HOST';
            if (!$smtpUser) $missing[] = 'SMTP_USER';
            if (!$smtpPass) $missing[] = 'SMTP_PASSWORD';
            if (!$smtpPort) $missing[] = 'SMTP_PORT';
            if (!$smtpFrom) $missing[] = 'SMTP_FROM';
            if (!$smtpTo) $missing[] = 'SMTP_TO';

            if (!empty($missing)) {
                return response()->json([
                    "status" => "error",
                    "message" => "Email service is not configured correctly. Missing: " . implode(', ', $missing)
                ], 500);
            }

            $mail->isSMTP();
            $mail->Host       = $smtpHost; 
            $mail->SMTPAuth   = true;
            $mail->Username   = $smtpUser;
            $mail->Password   = $smtpPass;
            $mail->SMTPSecure = $smtpSecurity;
            $mail->Port       = $smtpPort;

            $mail->setFrom($smtpFrom, 'Savadub Studio');
            $mail->addAddress($smtpTo);

            $mail->isHTML(true);
            $type = ucfirst($input['type']);
            $mail->Subject = "New {$type} Enquiry: " . $input['subject'];

            // Clean values
            $name    = htmlspecialchars($input['name']);
            $email   = htmlspecialchars($input['email']);
            $company = htmlspecialchars($input['company']);
            $phone   = htmlspecialchars($input['phone']);
            $budget  = htmlspecialchars($input['budget']);
            $subject  = htmlspecialchars($input['subject']);
            $message = nl2br(htmlspecialchars($input['message']));

            // Build Email Body
            $body = "<h3>New lead from Savadub Website</h3>";
            $body .= "<ul>";
            $body .= "<li><b>Enquiry Type:</b> {$type}</li>";
            $body .= "<li><b>Name:</b> {$name}</li>";
            $body .= "<li><b>Email:</b> {$email}</li>";
            $body .= "<li><b>Company:</b> {$company}</li>";
            $body .= "<li><b>Phone:</b> {$phone}</li>";
            $body .= "<li><b>Budget Range:</b> {$budget}</li>";

            $body .= "</ul>";
            $body .= "<li><b>Subject:</b> {$subject}</li>";
            $body .= "<hr><p><b>Message:</b><br>{$message}</p>";

            $mail->Body = $body;

            $mail->send();

            return response()->json(["status" => "success"]);
        } catch (\Exception $e) {
            Log::error('Contact form mail send failed', [
                'message' => $mail->ErrorInfo ?: $e->getMessage(),
                'host' => $smtpHost ?? null,
                'port' => $smtpPort ?? null,
                'from' => $smtpFrom ?? null,
                'to' => $smtpTo ?? null,
            ]);

            return response()->json([
                "status" => "error",
                "message" => $mail->ErrorInfo ?: $e->getMessage()
            ], 500);
        }
    }
}
