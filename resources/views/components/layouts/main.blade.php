<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="auto">

<head>
    @include('partials.head')
    <livewire:styles />

</head>

<body class="antialiased">
    @include('partials.nav')
    {{ $slot }}
    <livewire:scripts />
    @include('partials.footer')
</body>

</html>
