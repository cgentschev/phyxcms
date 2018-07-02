<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Application Name
    |--------------------------------------------------------------------------
    |
    | This value is the name of your application. This value is used when the
    | framework needs to place the application's name in a notification or
    | any other location as required by the application or its packages.
    |
    */

    'theme_name' => env('THEME_NAME', 'default'),

    'theme_path' => 'themes.' . env('THEME_NAME', 'default') . '.'

    ];