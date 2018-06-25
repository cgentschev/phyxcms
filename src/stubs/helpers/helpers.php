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

if (! function_exists('phyxcms_front_layout')) {
    /**
     * Generate an asset path for the application.
     *
     * Serve static content from a different domain,
     * provided in the env file
     *
     * @return string
     */
    function phyxcms_front_layout()
    {

        return env('THEME_PATH') . 'layouts.front';

    }

}

if (! function_exists('phyxcms_page_layout')) {
    /**
     * Generate an asset path for the application.
     *
     * Serve static content from a different domain,
     * provided in the env file
     *
     * @return string
     */
    function phyxcms_page_layout()
    {

        return env('THEME_PATH') . 'layouts.page';

    }

}

if (! function_exists('phyxcms_navbar')) {
    /**
     * Generate an asset path for the application.
     *
     * Serve static content from a different domain,
     * provided in the env file
     *
     * @return string
     */
    function phyxcms_navbar()
    {

        return env('THEME_PATH') . 'includes.nav';

    }

}

if (! function_exists('phyxcms_footer')) {
    /**
     * Generate an asset path for the application.
     *
     * Serve static content from a different domain,
     * provided in the env file
     *
     * @return string
     */
    function phyxcms_footer()
    {

        return env('THEME_PATH') . 'includes.footer';

    }

}

if (! function_exists('phyxcms_head')) {
    /**
     * Generate an asset path for the application.
     *
     * Serve static content from a different domain,
     * provided in the env file
     *
     * @return string
     */
    function phyxcms_head()
    {

        return env('THEME_PATH') . 'includes.footer';

    }

}

?>