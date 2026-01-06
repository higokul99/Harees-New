<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Shop Information
    |--------------------------------------------------------------------------
    |
    | This file contains all the shop-related configuration values that are
    | used throughout the application. These values are loaded from the
    | environment file (.env) and can be easily updated without changing code.
    |
    */

    'name' => env('SHOP_NAME', 'Harees Jewellery'),

    'contact' => [
        'email' => env('SHOP_EMAIL', 'hareesjewelleryinfo@gmail.com'),
        'phone' => env('SHOP_PHONE', '+91 8921387392'),
        'phone_alt' => env('SHOP_PHONE_ALT', '+91 0987654321'),
    ],

    'address' => [
        'line1' => env('SHOP_ADDRESS_LINE1', 'Harees Jewellery'),
        'line2' => env('SHOP_ADDRESS_LINE2', 'Main Road'),
        'city' => env('SHOP_CITY', 'Kollam'),
        'state' => env('SHOP_STATE', 'Kerala'),
        'pincode' => env('SHOP_PINCODE', '691001'),
        'country' => env('SHOP_COUNTRY', 'India'),
    ],

    'hours' => [
        'weekday' => env('SHOP_HOURS_WEEKDAY', '10:00 AM - 8:00 PM'),
        'sunday' => env('SHOP_HOURS_SUNDAY', '10:00 AM - 8:00 PM'),
    ],

    'social' => [
        'facebook' => env('SHOP_FACEBOOK', 'https://facebook.com/hareesjewellery'),
        'instagram' => env('SHOP_INSTAGRAM', 'https://instagram.com/hareesjewellery'),
        'twitter' => env('SHOP_TWITTER', 'https://twitter.com/hareesjewellery'),
        'youtube' => env('SHOP_YOUTUBE', 'https://youtube.com/@hareesjewellery'),
    ],

    'gold_rates' => [
        '22k' => env('GOLD_RATE_22K', 7500),
        '24k' => env('GOLD_RATE_24K', 9100),
    ],

    'stores' => [
        'paravur' => [
            'name' => 'Harees Jewellery – Paravur, Kollam',
            'address_line1' => 'Harees Jewellery',
            'address_line2' => 'Thekkumbhagam Road, Paravur',
            'city' => 'Kollam',
            'state' => 'Kerala',
            'phone1' => '0474 251 3485',
            'phone2' => '+91 98474 73431',
            'whatsapp' => '+91 89213 87392',
            'map_url' => 'https://maps.app.goo.gl/Stf7o19wp6fP2Ly7A',
        ],
        'chinnakada' => [
            'name' => 'Harees Gold & Diamonds – Chinnakada, Kollam',
            'address_line1' => 'Harees Gold & Diamonds',
            'address_line2' => 'Vadayattukota Road, Chinnakada',
            'city' => 'Kollam',
            'state' => 'Kerala',
            'pincode' => '691010',
            'phone1' => '+91 80865 94491',
            'phone2' => '+91 89213 87392',
            'whatsapp' => '+91 9567102422',
            'map_url' => 'https://maps.app.goo.gl/x5osJoQdeurrpnS3A',
        ],
        'koottikkada' => [
            'name' => 'Harees Jewellery – Koottikkada, Kollam',
            'address_line1' => 'Harees Jewellery',
            'address_line2' => 'Koottikkada Road, Koottikkada',
            'city' => 'Kollam',
            'state' => 'Kerala',
            'phone1' => '0474 272 9767',
            'phone2' => '+91 94469 09960',
            'whatsapp' => '+91 89213 87392',
            'map_url' => 'https://maps.app.goo.gl/XQRF4VqnKn4RbNB2A',
        ],
    ],

];
