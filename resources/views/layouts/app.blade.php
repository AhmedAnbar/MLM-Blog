<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>MLM Blog Admin Panel @yield('title')</title>

    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/toastr.min.css') }}">
    @yield('style')
</head>
<body>
    <div id="app">
        @include('admin.inc.navbar')
        <div class="container-fluid" style="margin-top: 2rem;">
            <div class="row">
                
                @if (Auth::check())
                    <div class="col-md-3">
                        @include('admin.inc.sidebar')
                    
                    </div>
                    <div class="col-md-9">
                            @yield('content')
                    </div>
                @else
                <div class="col-md-8 offset-2">
                        @yield('content')
                </div>
                @endif
            </div>
        </div>
        
    </div>

    <!-- Scripts -->
    
    <script src="{{ asset('js/jquery.min.js') }}" defer></script>
    <script src="{{ asset('js/popper.min.js') }}" defer></script>
    <script src="{{ asset('js/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('js/toastr.min.js') }}" defer></script>
    @include('admin.inc.toastr')
    @yield('script')

</body>
</html>
