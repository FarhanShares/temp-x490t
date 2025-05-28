<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="auto">

<head>
    @include('partials.head')
</head>

<body class="antialiased">
    @include('partials.nav')
    {{ $slot }}
    @livewireScripts
    @livewireStyles
    @include('partials.footer')
</body>

</html>
