<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }} - {{ucfirst($title ?? '')}}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('customHead')
</head>
<body class="bg-zinc-900">
<h1 id="appTitleDashboard" class="text-white customTextSize3vw text-center">{{config('app.name', 'Laravel')}} - {{ucfirst($title ?? '')}}</h1>
    @yield('content')
</body>
</html>