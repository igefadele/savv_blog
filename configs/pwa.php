<?php
return [
    'name' => 'Savadub Limited',
    'short_name' => 'Savadub',
    'description' => 'Global Venture & Talent Studio bridging African innovation with worldwide execution.',
    'version' => 'v1', // Used to version the cache
    'theme_color' => '#000000',
    'background_color' => '#ffffff',
    'display' => 'standalone',
    'orientation' => 'portrait-primary',
    'scope' => '/',
    'start_url' => '/',
    'icons' => [
        [
            'src' => '/assets/images/icons/icon-192x192.png',
            'sizes' => '192x192',
            'type' => 'image/png',
            'purpose' => 'any'
        ],
        [
            'src' => '/assets/images/icons/icon-512x512.png',
            'sizes' => '512x512',
            'type' => 'image/png',
            'purpose' => 'any'
        ]
    ],
    // List of assets to precache in the service worker
    'precache' => [
        '/',
        '/offline',
        '/assets/css/main.css',
        '/assets/js/main.js',
        '/assets/images/icons/favicon.png',
        '/assets/images/icons/icon-192x192.png',
        '/assets/images/icons/icon-512x512.png'
    ]
];