<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
            <link rel="stylesheet" href="{{ asset('Css/Normalize.css') }}">
            <link rel="stylesheet" href="{{ asset('Css/NavBar.css') }}">
            <link rel="stylesheet" href="{{ asset('Css/dashboard.css') }}">
            <!-- <link rel="stylesheet" href="{{ asset('Css/Login.css') }}"> -->
    </head>
    <body>
        <x-dashboard/>
        <x-menuhome/>
    </body>
</html>
