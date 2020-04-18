<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login V18</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{asset('images/icons/favicon.ico')}}"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/animate/animate.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/css-hamburgers/hamburgers.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/animsition/css/animsition.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/select2/select2.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/daterangepicker/daterangepicker.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
    <!--===============================================================================================-->
</head>
<body style="background-color: #666666;">

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <form class="login100-form validate-form" action="{{route('register')}}" method="post" enctype="multipart/form-data">
                @csrf
                <span class="login100-form-title p-b-43">
						Register
					</span>
                @if(Session::has('alert'))
                    <div class="alert-success row">{{ Session::get('alert') }}</div>
                @endif

                <div class="wrap-input100 validate-input" data-validate = "Valid  is required: ex@abc.xyz">
                    <input class="input100 @error('name') alert-danger @enderror" type="text" name="name" id="email" value="{{ old('name') }}">
                    <span class="focus-input100"></span>
                    <span class="label-input100">Username</span>
                </div>

                @error('name')
                <p class="text-danger">{{ $message }}</p>
                @enderror

                <div class="wrap-input100 validate-input" data-validate = "Valid  is required: ex@abc.xyz">
                    <input class="input100 @error('email') alert-danger @enderror" type="email" name="email" id="email" value="{{ old('email') }}">
                    <span class="focus-input100"></span>
                    <span class="label-input100">Email</span>
                </div>

                @error('email')
                <p style="color: red">{{ $message }}</p>
                @enderror

{{--                <div class="wrap-input100 validate-input">--}}
{{--                    <input class="input100" type="file" name="avatar">--}}
{{--                    <span class="focus-input100"></span>--}}
{{--                    <span class="label-input100">Avatar</span>--}}
{{--                </div>--}}

                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <input class="input100 @error('password') alert-danger @enderror" type="password" name="password"
                           id="password" value="{{ old('password') }}">
                    <span class="focus-input100"></span>
                    <span class="label-input100">Password</span>
                </div>

                @error('password')
                <p style="color: red">{{ $message }}</p>
                @else
                    @if(Session::has('wrong'))
                        <p style="color: red">{{Session::get('wrong')}}</p>
                    @endif
                    @enderror

                        <div class="wrap-input100 validate-input" data-validate="Password is required">
                            <span class="label-input100">Re-type Password</span>
                            <input class="input100" type="password" name="password_confirmation" placeholder="">
                        </div>


                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            Register
                        </button>
                    </div>

                        <div class="form-group">
                            <div class="col-md-12" style="margin-top: 16px">
                                <a href="{{route('signin.index')}}" class="text-center">Already an account?</a>
                            </div>
                        </div>

                    <div class="text-center p-t-46 p-b-20">
						<span class="txt2">
							or sign up using
						</span>
                    </div>

                    <div class="login100-form-social flex-c-m">
                        <a href="#" class="login100-form-social-item flex-c-m bg1 m-r-5">
                            <i class="fa fa-facebook-f" aria-hidden="true"></i>
                        </a>

                        <a href="#" class="login100-form-social-item flex-c-m bg2 m-r-5">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                    </div>
            </form>

            <div class="login100-more" style="background-image: url('images/bg-01.jpg')">
            </div>
        </div>
    </div>
</div>





<!--===============================================================================================-->
<script src="{{asset('vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('vendor/bootstrap/js/popper.js')}}"></script>
<script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('vendor/daterangepicker/moment.min.js')}}"></script>
<script src="{{asset('vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('js/main.js')}}"></script>

</body>
</html>
