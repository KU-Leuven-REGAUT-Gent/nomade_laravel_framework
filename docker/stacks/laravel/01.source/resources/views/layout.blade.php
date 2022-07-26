<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} - @yield('title')</title>



    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="/css/bootstrap.min.css" rel="stylesheet"> <!-- or wherever you keep it -->

    <!-- Scripts -->
    <script src="{{ secure_asset('js/app.js') }}" ></script>


    <!-- Loading jQuery -->
    <script src="//code.jquery.com/jquery-3.5.1.min.js"></script>







    <!-- Loading Table CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.21/datatables.min.css"/>
    <!-- Loading DataTable -->
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.21/cr-1.5.2/fh-3.1.7/datatables.min.js"></script>







      <!-- Styles -->
    <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <!-- Anchor -->
    <!--
        @if(isset($_GET['answer_id']))
            <input type="hidden" name="anchor" value="answer_{{ $_GET['answer_id'] }}">
        @endif
        @if(isset($_GET['question_id']))
            <input type="hidden" name="anchor" value="question_{{ $_GET['question_id'] }}">
        @endif
    -->

    <div class="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container-fluid">
                @include('nav')
            </div>
        </nav>
        
        @hasSection('sideContent')
        <div class="container-fluid mt-4">
             @yield('Header')
             <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 mt-4">
                    <!--Sidebar content-->
                    @yield('sideContent')
                </div>
                <div class="col-xs-6 col-sm-6 col-md-8 col-lg-8 mt-4">
                    <!--Body content-->
                    @yield('content')
                </div>
            </div>
        </div>
        @endif

        @sectionMissing('sideContent')
        <div class="container mt-4">
            @yield('content')    
        </div>
        @endif
           
                    
        
    </div>
</body>
</html>