<!doctype html>
<html lang="{{ app()->getLocale() }}">

    @include(phyxcms_head())

    <body class="inner">

    @include(phyxcms_navbar());

        <div id="app">

            @yield('content')

        </div>

    @include(phyxcms_footer());

    </body>

</html>


