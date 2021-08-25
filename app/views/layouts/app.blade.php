<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="/css/app.css">
    @stack('head')
    <livewire:styles />
    <livewire:scripts />
    <script src="/js/app.js" defer></script>
    @stack('scripts')
</head>
<body class="font-sans antialiased tracking-wider bg-gray-100">
    <div class="min-h-screen">
        <livewire:flash-container />
        {{ $slot }}
    </div>
</body>
</html>
