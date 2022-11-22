<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @yield('seo')

        <title>@yield('title')</title>
    </head>
    <body>

        {{-- include navbar --}}
        @include('partials.navbar')

        {{-- include header --}}
        @include('partials.header')

        {{-- yield content --}}
        @yield('content')

        {{-- footer --}}
        @include('partials.footer')
        
    </body>
</html>
