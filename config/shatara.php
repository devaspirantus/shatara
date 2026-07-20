
<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Feature Flags
    |--------------------------------------------------------------------------
    |
    | Enable/disable features per environment without code changes.
    |
    */
    'features' => [
        'enable_amazon_scraper' => env('FEATURE_AMAZON_SCRAPER', true),
        'enable_noon_scraper' => env('FEATURE_NOON_SCRAPER', true),
        'enable_jarir_scraper' => env('FEATURE_JARIR_SCRAPER', true),
        'enable_email_notifications' => env('FEATURE_EMAIL_NOTIFICATIONS', false),
        'enable_maintenance_mode' => env('FEATURE_MAINTENANCE_MODE', false),
    ],

    /*
    |--------------------------------------------------------------------------
    | Scraping Configuration
    |--------------------------------------------------------------------------
    |
    | Global scraping settings (timeout, retries, delays)
    |
    */
    'scraping' => [
        'timeout_seconds' => env('SCRAPING_TIMEOUT', 30),
        'retry_attempts' => env('SCRAPING_RETRIES', 3),
        'user_agent' => env('SCRAPING_USER_AGENT', 'Shatara/1.0'),
        'delay_between_requests' => env('SCRAPING_DELAY', 2),
    ],

    /*
    |--------------------------------------------------------------------------
    | Store-Specific Configuration
    |--------------------------------------------------------------------------
    |
    | Settings for each store (Amazon, Noon, Jarir)
    |
    */
    'stores' => [
        'amazon' => [
            'base_url' => env('AMAZON_BASE_URL', 'https://www.amazon.sa'),
            'affiliate_tag' => env('AMAZON_AFFILIATE_TAG', ''),
            'rate_limit' => env('AMAZON_RATE_LIMIT', 10),
        ],
        'noon' => [
            'base_url' => env('NOON_BASE_URL', 'https://www.noon.com/saudi-ar'),
            'affiliate_tag' => env('NOON_AFFILIATE_TAG', ''),
            'rate_limit' => env('NOON_RATE_LIMIT', 10),
        ],
        'jarir' => [
            'base_url' => env('JARIR_BASE_URL', 'https://www.jarir.com'),
            'affiliate_tag' => env('JARIR_AFFILIATE_TAG', ''),
            'rate_limit' => env('JARIR_RATE_LIMIT', 10),
        ],
    ],
];
