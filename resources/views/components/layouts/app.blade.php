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
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
  
    <link rel="stylesheet" href="{{ asset('asset/css/index.css') }}">
</head>

<body>


    <!-- Sidebar -->
    @livewire('components.layouts.sidebar')

    <!-- Main content area -->
    <div class="content-wrapper">
        @livewire('components.layouts.navbar')
        {{ $slot }}
    </div>

    <script src="{{ asset('asset/js/min.js') }}"></script>
    @livewireScripts()
</body>

</html>
