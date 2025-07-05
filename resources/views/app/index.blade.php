<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>AquaWatch</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/TittleIcon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    {{-- <link rel="stylesheet" href="maps/css/leaflet.css">
    <link rel="stylesheet" href="maps/css/qgis2web.css">
    <link rel="stylesheet" href="maps/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="maps/css/leaflet-control-geocoder.Geocoder.css"> --}}
    {{-- @vite('resources/css/leaflet.css')
    @vite('resources/css/qgis2web.css') --}}
    {{-- <link rel="stylesheet" href="css/leaflet.css">
    <link rel="stylesheet" href="css/qgis2web.css">
    <link rel="stylesheet" href="css/fontawesome-all.min.css"> --}}

    {{-- Leaflet.js --}}
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    {{-- <script src="leaflet.ajax.js"></script> --}}
    {{-- <script src="js/leaflet/qgis2web_expressions.js"></script> --}}
    {{-- <script src="js/leaflet/leaflet.js"></script> --}}
    {{-- <script src="js/leaflet/leaflet.rotatedMarker.js"></script> --}}
    {{-- <script src="js/leaflet/leaflet.pattern.js"></script> --}}
    {{-- <script src="js/leaflet-hash.js"></script> --}}
    {{-- <script src="js/leaflet/Autolinker.min.js"></script> --}}
    {{-- <script src="js/leaflet/rbush.min.js"></script> --}}
    {{-- <script src="js/leaflet/labelgun.min.js"></script> --}}
    {{-- <script src="js/leaflet/labels.js"></script> --}}

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <!-- <link href="/assets/css/style.css" rel="stylesheet"> -->

    <!-- =======================================================
* Template Name: NiceAdmin
* Updated: Sep 18 2023 with Bootstrap v5.3.2
* Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
======================================================== -->

    @stack('styles')
</head>

@include('layouts.Header')
@extends('layouts.sidebar')
<div class="mainContent">
    @yield('content')
    @stack('scripts')
</div>
@include('layouts.footer')


<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{ asset('assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/chart.js/chart.umd.js') }}"></script>
<script src="{{ asset('assets/vendor/echarts/echarts.min.js') }}"></script>
<script src="{{ asset('assets/vendor/quill/quill.min.js') }}"></script>
<script src="{{ asset('assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
<script src="{{ asset('assets/vendor/tinymce/tinymce.min.js') }}"></script>
<script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

{{-- <script src="maps/js/qgis2web_expressions.js"></script>
<script src="maps/js/leaflet.js"></script>
<script src="maps/js/leaflet.rotatedMarker.js"></script>
<script src="maps/js/leaflet.pattern.js"></script>
<script src="maps/js/leaflet-hash.js"></script>
<script src="maps/js/Autolinker.min.js"></script>
<script src="maps/js/rbush.min.js"></script>
<script src="maps/js/labelgun.min.js"></script>
<script src="maps/js/labels.js"></script>
<script src="maps/js/leaflet-control-geocoder.Geocoder.js"></script>
<script src="maps/data/jatim_1.js"></script> --}}

{{-- @vite('resources/js/leaflet.ajax.js') --}}
{{-- @vite('js/JsLeaflet/qgis2web_expressions.js') --}}
{{-- @vite('js/JsLeaflet/leaflet.js') --}}
{{-- @vite('js/JsLeaflet/leaflet.rotatedMarker.j')" --}}
{{-- @vite('js/JsLeaflet/leaflet.pattern.j')" --}}
{{-- @vite('js/leaflet-hash.js')" --}}
{{-- @vite('js/JsLeaflet/Autolinker.min.j')" --}}
{{-- @vite('js/JsLeaflet/rbush.min.j')" --}}
{{-- @vite('js/JsLeaflet/labelgun.min.j')" --}}
{{-- @vite('js/JsLeaflet/labels.js') --}}
{{-- @vite('resources/views/Map/jatim_1.js') --}}

<!-- Template Main JS File -->
<script src="{{ asset('assets/js/main.js') }}"></script>
{{-- <script src="/assets/data/jatim_1.js"></script> --}}

</body>

</html>
