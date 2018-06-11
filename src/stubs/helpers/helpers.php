<?php


if (! function_exists('servestatic')) {
    /**
     * Generate an asset path for the application.
     *
     * Serve static content from a different domain,
     * provided in the env file
     *
     * @return string
     */
    function servestatic($path, $secure = null)
    {
        if (env('STATIC_SERVER')) {

            return env('STATIC_SERVER') . $path;

        } else {

            // If a static server is not defined, return local asset path

            return app('url')->asset($path, $secure);

        }
    }
}

if (! function_exists('theme')) {
    /**
     * Generate an asset path for the application.
     *
     * Serve static content from a different domain,
     * provided in the env file
     *
     * @return string
     */
    function theme($string)
    {

            return env('THEME_PATH') . $string;

    }
}

?>