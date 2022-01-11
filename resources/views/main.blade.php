
<!DOCTYPE html>
<html lang="en">

<head>

    {{-- <meta author = "fanny">  --}}
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title> @yield('title') Measuring BTS</title>

    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('style/images/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('style/css/style.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">

    {{-- <link href="{{asset('style/plugins/tables/css/datatable/dataTables.bootstrap4.min.css')}}" rel="stylesheet"> --}}
    {{-- <link rel="icon" type="image/png" sizes="16x16" href="{{ secure_asset('style/images/favicon.png') }}">
    <link rel="stylesheet" href="{{ secure_asset('style/css/style.css') }}" > --}}
    {{-- <link href="{{secure_asset('style/plugins/tables/css/datatable/dataTables.bootstrap4.min.css')}}" rel="stylesheet"> --}}
    
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

</head>
<body>
    <!-- atas -->
    <div id="main-wrapper">
        <div class="nav-header">
            <div class="brand-logo">
                <a href="{{url("home")}}">
                    <b class="logo-abbr"><img src="{{asset('style/images/favicon.png')}}" alt=""> </b>
                    {{-- <b class="logo-abbr"><img src="{{secure_asset('style/images/favicon.png')}}" alt=""> </b> --}}

                    <span class="brand-title">
                        <img src="{{asset('style/images/logo-text.png')}}" alt="" width="150" height="50" style="display:block; margin:auto">
                        {{-- <img src="{{secure_asset('style/images/logo-text.png')}}" alt="" width="150" height="50" style="display:block; margin:auto"> --}}
                    </span>
                </a>
            </div>
        </div>
        <div class="header">    
            <div class="header-content clearfix">
                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="far fa-ellipsis-h-alt"></i></span>
                    </div>
                </div>
                <div class="header-right">
                    <ul class="clearfix">
                        {{-- <li class="icons dropdown"><a href="javascript:void(0)" data-toggle="dropdown">
                                <i class="far fa-envelope"></i>
                                <span class="badge badge-pill gradient-1">3</span>
                            </a>
                            <div class="drop-down animated fadeIn dropdown-menu">
                                <div class="dropdown-content-heading d-flex justify-content-between">
                                    <span class="">3 New Messages</span>  
                                    <a href="javascript:void()" class="d-inline-block">
                                        <span class="badge badge-pill gradient-1">3</span>
                                    </a>
                                </div>
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li class="notification-unread">
                                            <a href="javascript:void()">
                                                <img class="float-left mr-3 avatar-img" src="images/avatar/1.jpg" alt="">
                                                <div class="notification-content">
                                                    <div class="notification-heading">Fanny</div>
                                                    <div class="notification-timestamp">08 Hours ago</div>
                                                    <div class="notification-text">Hi fanny...</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="notification-unread">
                                            <a href="javascript:void()">
                                                <img class="float-left mr-3 avatar-img" src="images/avatar/1.jpg" alt="">
                                                <div class="notification-content">
                                                    <div class="notification-heading">Fanny</div>
                                                    <div class="notification-timestamp">08 Hours ago</div>
                                                    <div class="notification-text">Hi fanny...</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="notification-unread">
                                            <a href="javascript:void()">
                                                <img class="float-left mr-3 avatar-img" src="images/avatar/1.jpg" alt="">
                                                <div class="notification-content">
                                                    <div class="notification-heading">Fanny</div>
                                                    <div class="notification-timestamp">08 Hours ago</div>
                                                    <div class="notification-text">Hi fanny...</div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>   
                                </div>
                            </div>
                        </li> --}}
                        {{-- <li class="icons dropdown"><a href="javascript:void(0)" data-toggle="dropdown">
                                <i class="far fa-bell"></i>
                                <span class="badge badge-pill gradient-2">3</span>
                            </a>
                            <div class="drop-down animated fadeIn dropdown-menu dropdown-notfication">
                                <div class="dropdown-content-heading d-flex justify-content-between">
                                    <span class="">3 New Notifications</span>  
                                    <a href="javascript:void()" class="d-inline-block">
                                        <span class="badge badge-pill gradient-2">5</span>
                                    </a>
                                </div>
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                            <a href="javascript:void()">
                                                <span class="mr-3 avatar-icon bg-success-lighten-2"><i class="icon-present"></i></span>
                                                <div class="notification-content">
                                                    <h6 class="notification-heading">Acara 1</h6>
                                                    <span class="notification-text">Within next 5 days</span> 
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <span class="mr-3 avatar-icon bg-danger-lighten-2"><i class="icon-present"></i></span>
                                                <div class="notification-content">
                                                    <h6 class="notification-heading">Acara 2</h6>
                                                    <span class="notification-text">One hour ago</span> 
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <span class="mr-3 avatar-icon bg-success-lighten-2"><i class="icon-present"></i></span>
                                                <div class="notification-content">
                                                    <h6 class="notification-heading">Acara 3</h6>
                                                    <span class="notification-text">One hour ago</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li> --}}
                        <li class="icons dropdown">
                            <div class="user-img c-pointer position-relative"   data-toggle="dropdown">
                                <span class="activity active"></span>
                                <img src="{{asset('style/images/user/1.png')}}" height="40" width="40" alt="">
                                {{-- <img src="{{secure_asset('style/images/user/1.png')}}" height="40" width="40" alt=""> --}}
                            </div>
                            <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                            <a href="{{url("profile")}}"><i class="icon-user"></i> <span>Profile</span></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <i class="icon-envelope-open"></i> <span>Inbox</span> <div class="badge gradient-3 badge-pill gradient-1">3</div>
                                            </a>
                                        </li>
                                        
                                        <hr class="my-2">
                                        <li>
                                            <a href="page-lock.html"><i class="icon-lock"></i> <span>Lock Screen</span></a>
                                        </li>
                                        <li><a href="{{url('/')}}"><i class="icon-key"></i> <span>Logout</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- bar samping kiri -->
    <div class="col-xs-3">
        <div class="nk-sidebar">           
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <center><li class="nav-label">Menu</li></center>
                    <li>
                        <a class="has-arrow" href="{{url("home")}}" aria-expanded="false">
                            <i class="fal fa-home"></i><span class="nav-text">Dashboard</span>
                        </a>
                    </li>
                    {{-- <li>
                        <a class="has-arrow" href="{{url("shelter")}}" aria-expanded="false">
                            <i class="fal fa-map-marked-alt"></i><span class="nav-text">Data Shelter BTS</span>
                        </a>
                    </li> --}}
                    <li>
                        <a class="has-arrow" href="{{url("realtime")}}" aria-expanded="false">
                            <i class="fal fa-table"></i><span class="nav-text">Data Realtime Arduino</span>
                        </a>
                    </li>
                    <li>
                        <a class="has-arrow" href="{{url("grafik")}}" aria-expanded="false">
                            <i class="fal fa-analytics"></i><span class="nav-text">Chart Data Arduino</span>
                        </a>
                    </li>
                    <li>
                        <a class="has-arrow" href="{{url("live")}}" aria-expanded="false">
                            <i class="fal fa-tachometer-alt-slowest"></i><span class="nav-text">Live Data Arduino</span>
                        </a>
                    </li>
                    <center><li class="nav-label">Lainnya</li></center>
                    <li>
                        <a class="has-arrow" aria-expanded="false">
                            <i class="fal fa-box-open"></i><span class="nav-text">Other</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{url("/")}}">Logout</a></li>
                            <li><a href="{{url("register")}}">Register</a></li>
                            <li><a href="{{url("lock")}}">Lock Screen</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
        
        
        <!-- isi -->
        @yield('breadcrumbs')
        
        <div class="col-xs-9">
            @yield('content')
        </div>
        
        
        <!-- bawah -->
        <div class="footer">
            <div class="copyright">
                <p>Copyright &copy; Designed by <a href="https://www.instagram.com/xo.fanxy/">Fanny</a> 2021</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->

    <script src="{{asset('style/plugins/common/common.min.js')}}"></script>
    <script src="{{asset('style/js/custom.min.js')}}"></script>
    <script src="{{asset('style/js/settings.js')}}"></script>
    <script src="{{asset('style/js/gleek.js')}}"></script>
    <script src="{{asset('style/js/styleSwitcher.js')}}"></script>
    {{-- <script src="{{secure_asset('style/plugins/common/common.min.js')}}"></script>
    <script src="{{secure_asset('style/js/custom.min.js')}}"></script>
    <script src="{{secure_asset('style/js/settings.js')}}"></script>
    <script src="{{secure_asset('style/js/gleek.js')}}"></script>
    <script src="{{secure_asset('style/js/styleSwitcher.js')}}"></script> --}}

    <script src="{{asset('style/js/dashboard/dashboard-1.js')}}"></script>
    <script type="text/javascript" src="{{ mix('js/app.js') }}"></script>
    {{-- <script src="{{secure_asset('style/js/dashboard/dashboard-1.js')}}"></script> --}}

    {{-- datatables --}}
    {{-- <script src="{{asset('style/plugins/tables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('style/plugins/tables/js/datatable/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('style/plugins/tables/js/datatable-init/datatable-basic.min.js')}}"></script> --}}
    
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

    @yield('bawah')

</body>

</html>