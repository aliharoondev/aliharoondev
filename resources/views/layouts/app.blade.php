<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        @include('backend.partials.head')

        @include('backend.partials.scripts')
    <body>
        
            @yield('content')
    </body>
</html>
