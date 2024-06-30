<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'XDezo' }}</title>
    <script src="https://kit.fontawesome.com/59ab81e02a.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon"
        href="{{ asset('images/XDezo-Technologies-Best-IT-Company-in-Nepal-Logo-Re-Imagine-the-Future.png') }}"
        type="image/x-icon">
    @vite('resources/css/app.css')
    @livewireStyles()
</head>

<body>
    {{ $slot }}
    @livewireScripts()
</body>

</html>
