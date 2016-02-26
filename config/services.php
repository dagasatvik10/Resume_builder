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

    'facebook' => [
    'client_id' => 1112974282069735,
    'client_secret' => '0db26983e6e8f3377c7dd5c95f457172',
    'redirect' => 'http://localhost:8000/auth/fb/callback',
    ],

    'linkedin' => [
    'client_id' => '75zsorr4lbhxs2',
    'client_secret' => 'pe77syYTPcKUjcKk',
    'redirect' => 'http://localhost:8000/auth/ln/callback',
    ],

];
