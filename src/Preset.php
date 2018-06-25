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
        static::generateConsoleCommand();
        static::copyBootstrapJS();
        static::replaceComposerJson();
        static::copyConfigFile();
        static::replaceEnv();
        static::addStaticController();
        static::generateTheme();
        static::addRoutes();

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

    public static function copyConfigFile()

    {

        copy(__DIR__.'/stubs/phyxcms.php', base_path('config/phyxcms.php'));

    }

    public static function copyBootstrapJS()
    {

        copy(__DIR__.'/stubs/bootstrap.js', resource_path('assets/js/bootstrap.js'));

    }

    public static function replaceComposerJson()
    {

        copy(__DIR__.'/stubs/composer.json', base_path('composer.json'));

    }

    public static function copyHelperFunctions()
    {

        copy(__DIR__.'/stubs/helpers/helpers.php', base_path('app/helpers.php'));

    }

    public static function replaceEnv()
    {

        copy(__DIR__.'/stubs/helpers/.env.example', base_path('.env.example'));

    }

    public static function addStaticController()
    {
        copy(__DIR__.'/stubs/Controllers/StaticController.php', base_path('app/Http/Controllers/StaticController.php'));
    }

    public static function generateTheme()
    {

        File::makeDirectory(resource_path('views\\themes\\default'), 0775, true);
        File::makeDirectory(resource_path('views\\themes\\default\\includes'), 0775, true);
        File::makeDirectory(resource_path('views\\themes\\default\\layouts'), 0775, true);
        File::makeDirectory(resource_path('views\\themes\\default\\components'), 0775, true);

        copy(__DIR__.'/stubs/views/index.blade.php', resource_path('/views/themes/default/index.blade.php'));

        copy(__DIR__.'/stubs/views/includes/nav.blade.php', resource_path('/views/themes/default/includes/nav.blade.php'));
        copy(__DIR__.'/stubs/views/includes/footer.blade.php', resource_path('/views/themes/default/includes/footer.blade.php'));
        copy(__DIR__.'/stubs/views/includes/head.blade.php', resource_path('/views/themes/default/includes/head.blade.php'));
        copy(__DIR__.'/stubs/views/includes/styles.blade.php', resource_path('/views/themes/default/includes/styles.blade.php'));
        copy(__DIR__.'/stubs/views/includes/scripts.blade.php', resource_path('/views/themes/default/includes/scripts.blade.php'));

        copy(__DIR__.'/stubs/views/layouts/front.blade.php', resource_path('/views/themes/default/layouts/front.blade.php'));
        copy(__DIR__.'/stubs/views/layouts/page.blade.php', resource_path('/views/themes/default/layouts/page.blade.php'));

        copy(__DIR__.'/stubs/views/components/meta.blade.php', resource_path('/views/themes/default/components/meta.blade.php'));


    }

    public static function addRoutes()
    {
        copy(__DIR__.'/stubs/routes/web.php', base_path('routes/web.php'));
    }

    public static function generateConsoleCommand()
    {
        File::makeDirectory(base_path('app\\Console\\Commands\\'), 0775, true);
        copy(__DIR__.'/Console/Commands/InstallCommand.php.php', base_path('app/Console/Commands/InstallCommand.php'));
    }

}