<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('partials.meta-tags')
    @stack('styles')
    @vite(['resources/css/app.css', 'resources/css/header.css', 'resources/js/app.js'])
</head>
<body class="antialiased bg-[#F5F5F9]">
    @include('partials.header')
    <main>
        {{ $slot ?? '' }}
        @yield('content')
    </main>
    @include('partials.footer')
    @include('partials.chatbot-widget')
    @stack('scripts')
</body>
</html>