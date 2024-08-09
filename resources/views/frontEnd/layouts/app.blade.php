<!DOCTYPE html>
<html lang="en">

<head>
    @include('frontEnd.partials.headlinks')
</head>

<body>
    @include('frontEnd.partials.header')
    @yield('content')
    @include('frontEnd.partials.footer')
</body>

</html>
