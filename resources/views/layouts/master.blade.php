<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('public/css/styles.css')}}" />

    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>
<body>


     @include('layouts.inc.admin-navbar')

     <div id="layoutSidenav">

          @include('layouts.inc.admin-sidebar')

          <div id="layoutSidenav_content">

               <main>

                    @yield('content')

               </main>

               @include('layouts.inc.admin-footer')

          </div>


     </div>

     <script src="{{asset('public/js/bootstrap.bundle.min.js')}}" crossorigin="anonymous"></script>
     <script src="{{asset('public/js/scripts.js')}}" crossorigin="anonymous"></script>
</body>
</html>