<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Shopify PHP App</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
<body>

    @yield('content')
    <script src="{{ asset('js/app.js') }}"></script>

</body>
</html>
