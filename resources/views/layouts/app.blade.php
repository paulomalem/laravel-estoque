<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="/lib/material-design-iconic-font/css/material-design-iconic-font.min.css" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/custom.css" rel="stylesheet">
    <link href="/css/login.css" rel="stylesheet">
</head>
<body>
    @yield('content')

    <!-- Scripts -->
    <script src="/js/knockout-3.4.1.js"></script>
    <script src="/js/jquery-3.1.1.min.js"></script>
    <script src="/lib/js/bootstrap.js"></script>

    @yield('scripts')
</body>
</html>
