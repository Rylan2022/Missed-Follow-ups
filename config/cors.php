<?php

return [
    'paths' => ['api/*', 'sanctum/csrf-cookie', 'login', 'logout'],

    'allowed_methods' => ['*'],
    
    'allowed_origins' => [
        'https://app.example.com',
        'https://frontend.example.com',
        'http://localhost:3000',   // local dev (optional)
        'http://localhost:5173',   // Vite dev (optional)
    ],

    'allowed_origins_patterns' => [],

    'allowed_headers' => ['*'],

    'exposed_headers' => [],

    'max_age' => 0,

    'supports_credentials' => true,
];
