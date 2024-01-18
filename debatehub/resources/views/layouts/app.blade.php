<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'DebateHub') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}

        {{-- <link rel="stylesheet" href="{{asset('css_bt/bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset('css_bt/bootstrap.min.css')}}"> --}}



         <!-- Vendor CSS Files -->
        <link href="{{asset('dbh_assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('dbh_assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
        <link href="{{asset('dbh_assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
        <link href="{{asset('dbh_assets/vendor/quill/quill.snow.css')}}" rel="stylesheet">
        <link href="{{asset('dbh_assets/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
        <link href="{{asset('dbh_assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
        <link href="{{asset('dbh_assets/vendor/simple-datatables/style.css')}}" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="{{asset('dbh_assets/css/style.css')}}" rel="stylesheet">








        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        
        <!-- ======= Header ======= -->
        <header id="header" class="header fixed-top d-flex align-items-center">

            <div class="d-flex align-items-center justify-content-between">
            <a href="{{route('home')}}" class="logo d-flex align-items-center">
                <img src="assets/img/logo.png" alt="">
                <span class="d-none d-lg-block">{{ config('app.name', 'Laravel') }}</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
            </div><!-- End Logo -->
            @if(isset($searchBar))
                {{$searchBar}}
            @endif
            
            <nav class="header-nav ms-auto">
                @include('layouts.navbars.header')
            </nav><!-- End Icons Navigation -->

        </header><!-- End Header -->

          <!-- ======= Sidebar ======= -->
        <aside id="sidebar" class="sidebar">
            @include('layouts.navbars.aside_nav')
        </aside><!-- End Sidebar-->

        <main id="main" class="main">

            @if(isset($header))
                {{$header}}
            @endif

            
        
            <section class="section dashboard">
              {{$slot}}
            </section>
        
          </main><!-- End #main -->

          <footer id="footer" class="footer">
            <div class="copyright">
              © Copyright <strong><span>{{config('app.name', 'debateHub')}}</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                Designed by <a href="https://hollytechsolnz.rf.gd/">Holly Tech Solutions</a>
            </div>
          </footer>

        {{-- <script src="{{asset('js_bt/bootstrap.js')}}"></script>
        <script src="{{asset('js_bt/bootstrap.min.js')}}"></script> --}}


<!-- Vendor JS Files -->
<script src="{{asset('dbh_assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
<script src="{{asset('dbh_assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('dbh_assets/vendor/chart.js/chart.umd.js')}}"></script>
<script src="{{asset('dbh_assets/vendor/echarts/echarts.min.js')}}"></script>
<script src="{{asset('dbh_assets/vendor/quill/quill.min.js')}}"></script>
<script src="{{asset('dbh_assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
<script src="{{asset('dbh_assets/vendor/tinymce/tinymce.min.js')}}"></script>
<script src="{{asset('dbh_assets/vendor/php-email-form/validate.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{asset('dbh_assets/js/main.js')}}"></script>




        @stack('modals')

        @livewireScripts
    </body>
</html>
