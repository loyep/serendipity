<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <title>@yield('title') &mdash; {{ config('app.name') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,300i" rel="stylesheet">

    <!-- Styles -->
    <link href="/assets/static/css/core.min.css" rel="stylesheet">
    <link href="/assets/static/css/app.min.css" rel="stylesheet">
    <link href="/assets/static/css/style.min.css" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/assets/static/img/apple-touch-icon.png">
    <link rel="icon" href="/assets/static/img/favicon.png">
</head>

<body class="min-h-fullscreen bg-img center-vh p-20" style="background-image: url(/assets/static/img/bg/register.jpg);"
      data-overlay="2">

@yield('content')

<!-- Scripts -->
<script src="/assets/static/js/core.min.js"></script>
<script src="/assets/static/js/app.min.js"></script>
<script src="/assets/static/js/script.min.js"></script>

</body>
</html>
