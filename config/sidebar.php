<?php

return [

    /*
    |--------------------------------------------------------------------------
    | View Storage Paths
    |--------------------------------------------------------------------------
    |
    | Most templating systems load templates from disk. Here you may specify
    | an array of paths that should be checked for your views. Of course
    | the usual Laravel view path has already been registered for you.
    |
    */

    'menu' => [
        [
            'title' => 'Home',
            'url' => '/home',
            'icon' => 'fa fa-home',
        ],
        [
            'title' => 'Appointment',
            'url' => '/appointments',
            'icon' => 'fa fa-calendar',
        ],
        [
            'title' => 'Medicine Order',
            'url' => '/medicine/order',
            'icon' => 'fa fa-medkit',
        ],
        [
            'title' => 'Medical Services',
            'url' => '/medicalServices',
            'icon' => 'fa fa-stethoscope',
        ],
        [
            'title' => 'Counselling',
            'url' => '/counselling',
            'icon' => 'fa fa-comments',
        ],
        [
            'title' => 'Emergency',
            'url' => '/emergency',
            'icon' => 'fa fa-ambulance',
        ],
        [
            'title' => 'Contact Us',
            'icon' => 'fa fa-envelope',
            'url' => '/contact-us',
            'route-name' => 'contactUs.form',
        ],

        // other menu items...
    ],
];
