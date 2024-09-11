<!DOCTYPE html>
<html lang="en">

<head>
    @include('frontEnd.partials.headlinks')
    <!-- Jquery JS-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" type="text/javascript"></script>
    <!-- Jquery JS -->
</head>

<body>
    @include('frontEnd.partials.header')
    @yield('content')
    @yield('scripts')
    @include('frontEnd.partials.footer')
</body>

</html>
