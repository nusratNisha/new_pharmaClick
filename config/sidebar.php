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
        // other menu items...
    ],
];
