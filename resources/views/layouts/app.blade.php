<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @include('partials.meta-tags')

    @stack('styles')
    @vite(['resources/css/app.css', 'resources/css/header.css', 'resources/js/app.js'])
</head>
<body class="antialiased">
    @include('partials.header')

    <main>
        {{ $slot ?? '' }}
        @yield('content')
    </main>

    @include('partials.footer')
    @stack('scripts')
</body>
</html>
