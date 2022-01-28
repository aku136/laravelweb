<!DOCTYPE html>
<html class="h-100" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Login Measuring BTS</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ secure_asset('style/images/favicon.png') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link  rel="stylesheet" href="{{ secure_asset('style/css/style.css') }}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    
</head>

<body class="h-100">
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">
                                <center><img src="{{ secure_asset('style/images/favicon.png') }}" height="150" width="150" alt=""></center><br>
                                @if(session('error'))
                                <div class="alert alert-danger">
                                    <b>Opps!</b>{{session('error')}}
                                </div>
                                @endif
                                <form class="mt-5 mb-5 login-input" action="" method="POST">
                                    @csrf

                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Email" name="email" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password" name="password" required>
                                    </div>

                                    <a href="{{url("home")}}"><button class="btn login-form__btn submit w-100">Login</button></a>
                                    {{-- <button class="btn login-form__btn submit w-100"><a href="{{url('home')}}">Login</a></button> --}}
                                    {{-- <a href="{{url('home')}}" class="btn mb-1 btn-primary">
                                        Login<span class="btn-icon-right"><i class="fa fa-sign-in" aria-hidden="true"></i></span>
                                    </a> --}}
                                </form>
                                <p class="mt-5 login-form__footer">Dont have account? <a href="{{url('register')}}" class="text-primary">Sign Up</a> now</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="{{secure_asset('style/plugins/common/common.min.js')}}"></script>
    <script src="{{secure_asset('style/js/custom.min.js')}}"></script>
    <script src="{{secure_asset('style/js/settings.js')}}"></script>
    <script src="{{secure_asset('style/js/gleek.js')}}"></script>
    <script src="{{secure_asset('style/js/styleSwitcher.js')}}"></script>
</body>
</html>