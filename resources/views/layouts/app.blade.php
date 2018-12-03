<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('partials.erp.head')
</head>

<body>
    @include('partials.erp.leftpanel')
    @include('partials.erp.rightpanel')

    <div id="app">
        {{-- @include('partials.erp.menuantiguo') --}}

        <main class="py-4">
            {{-- @yield('content') --}}
        </main>
    </div>
    @include('partials.erp.scripts')

</body>
</html>
