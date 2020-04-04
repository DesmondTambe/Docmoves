<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Favicons --}}
    <link rel="icon" href="{{ asset('img/favicon.png')}}">

    {{-- Bootstrap CSS --}}
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css')}}">

    {{-- Main CSS --}}
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">

    {{-- FontAwesome --}}
    <link rel="stylesheet" href="{{asset('plugins/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/fontawesome/css/fontawesome.min.css')}}">

    {{-- Select2 CSS --}}
    <link rel="stylesheet" href="{{ asset('plugins/select2/css/select2.min.css')}}">

    {{-- Fancybox CSS --}}
    <link rel="stylesheet" href="{{asset('plugins/fancybox/jquery.fancybox.min.css')}}">

    {{-- Datetimepickey CSS --}}
    <link rel="stylesheet" href="{{asset('bootstarp/css/bootstrap-datetimepicker.min.css')}}">

    <title>{{ config('app.name') }}</title>
</head>
<body>

    @include('../inc.navbar')
    <div>
        @yield('content')
    </div>
   @include('../inc.footer')
    

   {{-- Jquery UI --}}
    <script src="{{ asset('plugins/jquery-ui/jquery-ui-min.js')}}"></script>

    {{-- Bootstrap JS --}}
    <script src="{{ asset('bootstrap/js/bootstrap.min.js')}}"></script>

    {{-- jQuery - Bootstrap --}}
    <script src="{{ asset('js/jquery.min.js')}}"></script>

    {{-- JS --}}
    <script src="{{ asset('js/script.js')}}"></script>
    <script src="{{ asset('js/popper.min.js')}}"></script>
    <script src="{{ asset('js/moment.min.js')}}"></script>
    <script src="{{ asset('js/slick.js')}}"></script>

    {{-- Select2 JS --}}
    <script src="{{ asset('plugins/select2/js/select2.min.js')}}"></script>

    {{-- Fancybox JS --}}
    <script src="{{ asset('plugins/fancybox/jquery.fancybox.min.js')}}"></script>

    {{-- Sticky Sidebar JS --}}
    <script src="{{ asset('plugins/theia-sticky-sidebar/ResizeSensor.js')}}"></script>
    <script src="{{ asset('plugins/theia-sticky-sidebar/theia-sticky-sidebar.js')}}"></script>

</body>
</html>