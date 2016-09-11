<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'mandrill' => [
        'secret' => env('MANDRILL_SECRET'),
    ],

    'ses' => [
        'key'    => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'stripe' => [
        'model'  => App\User::class,
        'key'    => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],
    // FB client id and secret for login
    'facebook' => [
        'client_id' => '834283783368088',
        'client_secret' => '20bfce91c29052799b20af2d6714cd57',
        'redirect' => 'http://localhost:8000/auth/fb/callback',
    ],

    // Github client id and secret for projects
    'github' => [
        'client_id' => '2a70ddf1ac1915832b3b',
        'client_secret' => '3be38076d1239bbbf078cf5f0a6ae777eb62dce2',
        'redirect' => 'http://localhost:8000/auth/github/callback',

    ],

    // Linkedin client id and secret for data
    'linkedin' => [
        'client_id' => '75hnx9nod4di70',
        'client_secret' => '85vqK3p03atdPdXi',
        'redirect' => 'http://localhost:8000/auth/ln/callback',

    ],

];
