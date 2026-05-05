<?php 
use PHPMailer\PHPMailer\PHPMailer;

$securityRaw = strtolower(trim((string)($_ENV['SMTP_SECURITY'] ?? getenv('SMTP_SECURITY') ?? 'tls')));
$securityMap = [
    'tls' => PHPMailer::ENCRYPTION_STARTTLS,
    'starttls' => PHPMailer::ENCRYPTION_STARTTLS,
    'ssl' => PHPMailer::ENCRYPTION_SMTPS,
    'smtps' => PHPMailer::ENCRYPTION_SMTPS,
    'none' => '',
    '' => '',
];
$security = $securityMap[$securityRaw] ?? PHPMailer::ENCRYPTION_STARTTLS;

return [
    'smtp' => [
        'host' => $_ENV['SMTP_HOST'] ?? getenv('SMTP_HOST') ?? null,
        'port' => (int)($_ENV['SMTP_PORT'] ?? getenv('SMTP_PORT') ?? 0),
        'user' => $_ENV['SMTP_USER'] ?? getenv('SMTP_USER') ?? null,
        'password' => $_ENV['SMTP_PASSWORD'] ?? getenv('SMTP_PASSWORD') ?? null,
        'security' => $security,
        'from' => $_ENV['SMTP_FROM'] ?? getenv('SMTP_FROM') ?? null,
        'to' => $_ENV['SMTP_TO'] ?? getenv('SMTP_TO') ?? null,
    ],
];
