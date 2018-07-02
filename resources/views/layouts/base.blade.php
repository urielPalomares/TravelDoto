<!DOCTYPE HTML>
<html lang="es">
<html>
    <head>
        <title>@yield('title', 'TravelDoto')</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!-- CSS -->
        @stack('css')
        @yield('css_content')
    </head>
    <body class="is-preload">
        @yield('content')

        <!-- Scripts -->
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        @stack('scripts')
        @yield('js_content')

    </body>
</html>