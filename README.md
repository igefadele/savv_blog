# Savv Web Starter

> The official project skeleton for the [Savv Web Framework](https://github.com/igefadele/savv_framework). A brand website or marketing site up and running in minutes.

[![PHP Version](https://img.shields.io/badge/PHP-%3E%3D8.0-8892BF)](https://php.net)
[![License: MIT](https://img.shields.io/badge/License-MIT-green.svg)](LICENSE)

---

## What Is This?

Savv Web Starter is the pre-configured application skeleton that uses the [Savv Web Framework](https://github.com/igefadele/savv_framework) as its engine. It ships with a working folder structure, layouts, partials, example pages, a PWA config, server block samples, and a working contact form endpoint — so you can start building real content on day one.

The framework engine lives in `vendor/savadub/savv`. You work inside the application shell this starter provides.

---

## Requirements

- PHP 8.0 or higher
- Composer

No Node.js. No npm. No build tool of any kind.

---

## Installation

```bash
git clone https://github.com/igefadele/savv_starter my-project
cd my-project
composer install
composer dump-autoload
```

Copy the environment file and configure it:

```bash
cp .env.example .env
```

```env
SMTP_HOST=smtp.example.com
SMTP_PORT=587
SMTP_USER=your@email.com
SMTP_PASSWORD=yourpassword
SMTP_FROM=no-reply@example.com
SMTP_TO=contact@example.com
```

Point your local or production server document root to:

```
public/
```

Server block samples for **Apache, Nginx, Caddy, and LiteSpeed** are included in `public/server-block-samples/`.

---

## Project Structure

```text
my-savv-app/
├── app/
│   ├── Constants/
│   │   └── ContactConstants.php    # Shared contact/social details
│   └── Controllers/
│       └── ContactController.php   # Contact form handler
│
├── configs/
│   ├── mail.php                    # SMTP config
│   ├── middlewares.php             # Middleware aliases
│   ├── posts.php                   # ['slug' => 'Title'] post registry
│   ├── pwa.php                     # PWA name, icons, precache list
│   └── redirections.php            # Short URL / redirect rules
│
├── public/                         # ← Web server document root
│   ├── index.php                   # 3-line entry point
│   ├── assets/
│   │   ├── css/main.css
│   │   ├── js/main.js
│   │   └── images/
│   └── server-block-samples/
│       ├── apache.txt
│       ├── nginx.txt
│       ├── caddy.txt
│       └── litespeed.txt
│
├── routes/
│   ├── web.php
│   └── api.php
│
├── storage/
│   ├── framework/                  # Route cache lives here
│   └── logs/
│
├── views/
│   ├── layouts/
│   │   └── index.php               # Master layout
│   ├── pages/                      # File-based routing root
│   │   ├── index.php               # → /
│   │   ├── offline.php             # → /offline (PWA fallback)
│   │   ├── posts.php               # → /posts (blog listing)
│   │   └── post-detail.php         # → /{post-slug}
│   ├── partials/
│   │   ├── head.php
│   │   ├── header.php
│   │   ├── footer.php
│   │   └── scripts.php
│   └── posts/
│       └── how-to-savv-website.md  # Sample markdown post
│
└── .env
```

---

## Adding Pages

Drop a `.php` file into `views/pages/` and it resolves as a URL automatically — no route registration required.

Follow this pattern inside every page:

```php
<?php
$pageTitle       = 'About — My Brand';
$pageDescription = 'Who we are and what we build.';

ob_start();
?>

<section class="container py-5">
    <h1>About Us</h1>
    <p>Our story here.</p>
</section>

<?php
$content = ob_get_clean();
include ROOT_PATH . '/views/layouts/index.php';
```

The layout injects the header, footer, PWA tags, animations, and SPA transitions automatically via `savv_head()` and `savv_scripts()` — called in `partials/head.php` and `partials/scripts.php`.

---

## Adding Custom Routes and API Endpoints

Use `routes/web.php` for web routes with custom logic and `routes/api.php` for API endpoints:

```php
// routes/api.php
use App\Controllers\ContactController;

router()->group(['prefix' => 'api', 'name' => 'api.'], function ($router) {
    $router->post('contact-submit', [ContactController::class, 'submit'])
           ->name('submit.contact');
});
```

---

## URL Redirections / Pretty Links

Add short URLs in `configs/redirections.php`:

```php
return [
    'fb'     => 'https://facebook.com/yourpage',
    'github' => 'https://github.com/yourhandle',
    'docs'   => ['url' => 'https://docs.example.com', 'status' => 301],
];
```

`yourdomain.com/fb` redirects automatically. No controller, no route file change needed.

---

## PWA Configuration

Edit `configs/pwa.php` to configure your app's name, icons, theme color, and the list of assets to precache. The framework generates `/manifest.json` and `/sw.js` dynamically from this file — no additional setup.

```php
// configs/pwa.php
return [
    'name'         => 'My Brand',
    'short_name'   => 'Brand',
    'version'      => 'v1',       // Bump to bust service worker cache
    'theme_color'  => '#000000',
    'icons'        => [...],
    'precache'     => ['/', '/offline', '/assets/css/main.css'],
];
```

---

## Blog / Posts

Register post slugs in `configs/posts.php`:

```php
return [
    'my-first-post' => 'My First Post Title',
];
```

Post content lives as Markdown files in `views/posts/my-first-post.md`. The `post-detail.php` view renders the post. The router handles the slug-to-post resolution automatically.

---

## Shared Contact Constants

`app/Constants/ContactConstants.php` centralizes all public contact details (phone, email, WhatsApp, social URLs, address). Import it anywhere across views, partials, and controllers:

```php
use App\Constants\ContactConstants;

echo ContactConstants::$email;
echo ContactConstants::$whatsappLink;
echo ContactConstants::$linkedin;
```

---

## Production Deployment

1. Run `composer install --no-dev` on the server
2. Set all `.env` values
3. Ensure `storage/logs/` is writable
4. Run `php savv route:cache` to compile routes
5. Point the server document root to `public/`
6. Use the appropriate server block from `public/server-block-samples/`

---

## Framework Documentation

For full documentation on routing, the PWA engine, middleware, helpers, CLI commands, validation, config, logging, and all core framework features, see:

**[Savv Web Framework Repository →](https://github.com/igefadele/savv_framework)**

**[Savv Web Docs →](https://savv.savadub.com)**

---

## License

MIT — see [LICENSE](LICENSE).

---

*Built by [Savadub](https://savadub.com) — a Global Venture & Talent Studio.*
