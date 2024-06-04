<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/59ab81e02a.js" crossorigin="anonymous"></script>
    <title>{{ $title ?? 'Welcome' }}</title>
    @vite('resources/css/app.css')

</head>

<body>
    {{ $slot }}
</body>

</html>
