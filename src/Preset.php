<?php

namespace Phyx\Phyxcms;

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\File;
use Illuminate\Foundation\Console\Presets\Preset as LaravelPreset;

class Preset extends LaravelPreset {

    public static function install()

    {

        static::copyBaseStyles();
        static::updatePackages();
        static::copyHelperFunctions();
        static::replaceEnv();
        static::addStaticController();
        static::generateTheme();
        static::addRoutes();
        static::generateKey();

    }

    public static function copyBaseStyles()

    {

        File::cleanDirectory(resource_path('assets/sass'));
        copy(__DIR__.'/stubs/scss/app.scss', resource_path('assets/sass/app.scss'));
        copy(__DIR__.'/stubs/scss/_variables.scss', resource_path('assets/sass/_variables.scss'));
        copy(__DIR__.'/stubs/scss/helpers.scss', resource_path('assets/sass/helpers.scss'));

    }

    public static function updatePackageArray($packages)

    {
        return array_merge(['bulma' => '^0.7.1', 'buefy' => '^0.6.6'], Arr::except($packages, [

            'popper.js',
            'bootstrap'

        ]));

    }

    public static function copyHelperFunctions()
    {

        copy(__DIR__.'/stubs/helpers/helpers.php', base_path('app/helpers.php'));

    }

    public static function replaceEnv()
    {

        copy(__DIR__.'/stubs/helpers/.env', base_path('.env'));
        copy(__DIR__.'/stubs/helpers/.env.example', base_path('.env.example'));

    }

    public static function addStaticController()
    {
        copy(__DIR__.'/stubs/Controllers/StaticController.php', base_path('app/Http/Controllers/StaticController.php'));
    }

    public static function generateTheme()
    {
        File::makeDirectory(resource_path('views\\themes\\default'), 0775, true);
        copy(__DIR__.'/stubs/views/index.blade.php', resource_path('/views/themes/default/index.blade.php'));
    }

    public static function addRoutes()
    {
        copy(__DIR__.'/stubs/routes/web.php', base_path('routes/web.php'));
    }

    public static function generateKey()
    {
        Artisan::call('key:generate');
    }

}