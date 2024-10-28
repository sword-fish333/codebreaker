<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CodeBreaker</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="icon" type="image/png" href="{{ asset('favicon/android-chrome-192x192.png') }}" sizes="196x192"/>
    <link rel="icon" type="image/png" href="{{ asset('favicon/apple-touch-icon.png') }}" sizes="180x180"/>
    <link rel="icon" type="image/png" href="{{ asset('favicon/favicon-16x16.png') }}" sizes="16x16"/>
    <link rel="icon" type="ico" href="{{ asset('favicon/favicon.ico') }}" sizes="16x16"/>
    <link rel="icon" type="image/png" href="{{ asset('favicon/favicon-32x32.png') }}" sizes="32x32"/>

</head>
<body class="pt-8 bg-primary print:bg-white print:text-black grid h-full items-center ">
{{$slot}}
</body>
</html>
