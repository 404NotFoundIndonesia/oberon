<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
        @livewireStyles
        <title>{{ $title ?? 'Oberon' }}</title>
    </head>
    <body class="bg-gray-100 pt-12">
        <livewire:layout.navbar />
        <div class="">
            {{ $slot }}
        </div>
        @livewireScripts
    </body>
</html>
