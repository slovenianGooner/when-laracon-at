<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>When Laracon At?</title>

    <link rel="stylesheet" href="{{ asset('css/laracon.css') }}">

    @vite('resources/css/app.css')
</head>
<body class="bg-noise min-h-screen bg-red-600 font-sans text-white antialiased">
<div class="w-screen h-screen flex justify-center items-center">
    {{ $slot }}
</div>
</body>
</html>
