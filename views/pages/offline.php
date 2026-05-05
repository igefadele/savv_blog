<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#000000">
    <title>Offline - Savv Web Framework</title>
    <style>
    :root {
        color-scheme: light;
        --bg: #f4f1eb;
        --panel: #ffffff;
        --text: #151515;
        --muted: #5c5c5c;
        --accent: #dd3333;
        --accent-2: #111111;
        --ring: rgba(221, 51, 51, 0.12);
    }

    * {
        box-sizing: border-box;
    }

    body {
        margin: 0;
        min-height: 100vh;
        display: grid;
        place-items: center;
        padding: 24px;
        font-family: "Segoe UI", sans-serif;
        background:
            radial-gradient(circle at top, rgba(221, 51, 51, 0.12), transparent 35%),
            linear-gradient(180deg, #fbfaf7 0%, var(--bg) 100%);
        color: var(--text);
    }

    .card {
        width: min(100%, 560px);
        background: var(--panel);
        border: 1px solid rgba(17, 17, 17, 0.08);
        border-radius: 24px;
        padding: 32px;
        box-shadow: 0 24px 80px rgba(17, 17, 17, 0.08);
    }

    .badge {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        padding: 8px 14px;
        border-radius: 999px;
        background: var(--ring);
        color: var(--accent);
        font-weight: 700;
        font-size: 0.9rem;
        letter-spacing: 0.02em;
        text-transform: uppercase;
    }

    h1 {
        margin: 18px 0 12px;
        font-size: clamp(2rem, 5vw, 3rem);
        line-height: 1.05;
    }

    p {
        margin: 0;
        color: var(--muted);
        line-height: 1.6;
        font-size: 1rem;
    }

    .actions {
        display: flex;
        flex-wrap: wrap;
        gap: 12px;
        margin-top: 28px;
    }

    a,
    button {
        appearance: none;
        border: none;
        border-radius: 999px;
        padding: 14px 18px;
        font: inherit;
        font-weight: 700;
        text-decoration: none;
        cursor: pointer;
    }

    .primary {
        background: var(--accent);
        color: #fff;
    }

    .secondary {
        background: var(--accent-2);
        color: #fff;
    }

    .note {
        margin-top: 18px;
        font-size: 0.92rem;
    }
    </style>
</head>

<body>
    <main class="card">
        <div class="badge">Offline</div>
        <h1>You are offline right now.</h1>
        <p>Savadub could not reach the network, so this offline page was served from your device. Once your connection
            is back, you can refresh and continue browsing normally.</p>
        <div class="actions">
            <button class="primary" type="button" onclick="window.location.reload()">Try Again</button>
            <a class="secondary" href="./">Go Home</a>
        </div>
        <p class="note">Tip: installed pages, icons, and core assets are now cached for a smoother PWA experience.</p>
    </main>
</body>

</html>