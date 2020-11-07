<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.title') }} - {{ config('app.name') }}</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> 
    <link href="{{ asset("front-end/css/custom.css") }}" rel="stylesheet">

<!--     <link href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/responsive/2.2.0/css/responsive.bootstrap.min.css" rel="stylesheet"> -->


    @stack('stylesheets')
    @yield('stylesheets')

</head>

<body>

<div id="preloader">
    <div id="status">&nbsp;</div>
</div>

{{--@include('front-end.layouts.includes.header')--}}

@yield('main-container')

{{--@include('front-end.layouts.includes.footer')--}}


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

{{--DataTable--}}



{{--
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.0/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.0/js/responsive.bootstrap.min.js"></script>
--}}


@stack('scripts')
@yield('scripts')

</body>
</html>
