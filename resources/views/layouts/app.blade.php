<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}" >
    <link rel="stylesheet" href="{{ asset('css/css/font-awesome.min.css')}}" >
    <link rel="stylesheet" href="{{ asset('css/main.css')}}">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md shadow-sm navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    شعار
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar  -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item  pointer">
                            <a class="nav-link" data-toggle="modal" data-target="#AddPostModal"><i class="fa fa-add"></i> إضافة منشور جديد <span class="sr-only">(current)</span></a>
                        </li>
                    </ul>
                    @if ($login != null)
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">



                        <li class="nav-item ">
                            <a class="nav-link pointer" href="{{ route('mypost')}}"><i class="fa fa-home"></i>منشوراتي </a>
                          </li>

                          <li class="nav-item dropdown ">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="fa fa-user"></i> الملف الشخصي
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item pointer" href="#">تعديل الملف الشخصي <i class="fa fa-edit"></i></a>

                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="#"> تسجيل خروج <i class="fa fa-sign-out"></i></a>
                            </div>
                          </li>
                    </ul>
                    @endif
                </div>
            </div>
        </nav>

        <div class="container">
            <div class="row justify-content-center">
                @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block col-12">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                </div>
                @endif


                @if ($message = Session::get('error'))
                <div class="alert alert-danger alert-block col-12">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                </div>
                @endif


                @if ($message = Session::get('warning'))
                <div class="alert alert-warning alert-block col-12">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                </div>
                @endif


                @if ($message = Session::get('info'))
                <div class="alert alert-info alert-block col-12">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                </div>
                @endif
                @yield('content')
            </div>
        </div>

    </div>
           <!--Start Footer Section-->
        <footer class="footer FooteSection mt-2">

            <div class="footer-copyright text-center py-3">© 2020 حقوق النشر:
                <a href="#"> موقع انترنت</a>
            </div>

        </footer>
      <!--End Footer Section-->



        <script src="{{ asset('js/jquery-3.3.1.slim.min.js')}}" ></script>
        <script src="{{ asset('js/popper.min.js')}}" ></script>
        <script src="{{ asset('js/bootstrap.min.js')}}" ></script>
        <script src="{{ asset('js/main.js')}}" ></script>
        @yield('js')

    </body>
</html>
