<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8" />

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        @foreach( $settings as $setting )
        <!-- App Title -->
        <title>@yield('title') | {{ $setting->title }}</title>

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('public/uploads/setting/'.$setting->favicon_path) }}">
        @endforeach

        @if(empty($setting))
        <!-- App Title -->
        <title>@yield('title')</title>
        @endif

        <!-- App css -->
        {{-- <link href="{{ asset('public/backend/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" /> --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

        <link href="{{ asset('public/backend/css/all.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('public/backend/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('public/backend/css/summernote-bs4.css') }}" rel="stylesheet" type="text/css" />
        

        <!-- third party css -->
        <link href="{{ asset('public/backend/css/vendor/dataTables.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('public/backend/css/vendor/switchery.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- third party css end -->


        <link href="{{ asset('public/backend/css/app.css') }}" rel="stylesheet" type="text/css" />

        @stack('add-css')

    </head>

    <body>

        <!-- Begin page -->
        <div id="wrapper">
            
            @auth
            <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu left-side-menu-dark">

                <div class="slimscroll-menu">

                    <!-- LOGO -->
                    <a href="{{ URL::route('dashboard.index') }}" class="logo text-center mb-4">
                       <h1>Dashboard</h1>
                    </a>

                    @if(Request::is('dashboard*'))
                    <!--- Sidemenu -->
                    @include('admin.inc.sidebar')
                    <!-- End Sidebar -->
                    @endif

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->
            @endauth


            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="@auth content-page @else container-fluid  @endauth">
                <div class="content">

                    <!-- Topbar Start -->
                    <div class="navbar-custom">
                        <ul class="list-unstyled topbar-right-menu float-right mb-0">

                            <!-- Authentication Links -->
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else

                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle nav-user mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    @if(isset(Auth::user()->image_path))
                                    <img src="{{ asset('/public/uploads/profile/'.Auth::user()->image_path) }}" onerror="this.onerror=null;this.src='/backend/images/users/user.png';" alt="user-image" class="rounded-circle">
                                    @else
                                    <img src="{{ asset('/public/backend/images/users/user.png') }}" alt="user-image" class="rounded-circle">
                                    @endif
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown ">
                                    <!-- item-->
                                    <div class="dropdown-header noti-title">
                                        <h6 class="text-overflow m-0">Welcome !
                                            <small class="pro-user-name ml-1">
                                                {{ Auth::user()->name }}
                                            </small>
                                        </h6>
                                    </div>

                                    <!-- item-->
                                    <!-- <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="fe-user"></i>
                                        <span>My Account</span>
                                    </a> -->

                                    @can('isAdmin')
                                    <!-- item-->
                                    <a href="{{ URL::route('setting.index') }}" class="dropdown-item notify-item">
                                        <i class="fe-settings"></i>
                                        <span>Settings</span>
                                    </a>
                                    @endcan

                                    <div class="dropdown-divider"></div>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        
                                        <i class="fe-log-out"></i>
                                        <span>Logout</span>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

                                </div>
                            </li>

                            @endguest

                        </ul>
                        <button class="button-menu-mobile open-left disable-btn">
                            <i class="fe-menu"></i>
                        </button>
                        <div class="app-search">
                            <!-- <form>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit">
                                            <i class="fe-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form> -->
                        </div>
                    </div>
                    <!-- end Topbar -->


                    <!-- Start Content-->
                    @yield('content')
                    <!-- End Content-->
                    


                </div> <!-- content -->

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                @if(isset($setting))
                                Admin &copy; - {{ $setting->title }}
                                @endif
                            </div>
                            <div class="col-md-6">
                                <div class="text-md-right footer-links d-none d-sm-block">
                                    <a href="{{ URL('/') }}">Home</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->


        <!-- App js -->
        <script src="{{ asset('public/backend/js/vendor.min.js') }}"></script>
        <script src="{{ asset('public/backend/js/all.min.js') }}"></script>
        <script src="{{ asset('public/backend/js/summernote-bs4.js') }}"></script>


        <!-- third party js -->
        <script src="{{ asset('public/backend/js/vendor/jquery.dataTables.js') }}"></script>
        <script src="{{ asset('public/backend/js/vendor/dataTables.bootstrap4.js') }}"></script>
        <script src="{{ asset('public/backend/js/vendor/switchery.min.js') }}"></script>
        <!-- third party js ends -->
        

        <script src="{{ asset('public/backend/js/app.js') }}"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


        @stack('add-js')
    </body>
</html>