<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('partials.erp.head')
</head>

<body>
    @include('partials.erp.leftpanel')
    @include('partials.erp.rightpanel')
    @include('partials.erp.scripts')

</body>
</html>