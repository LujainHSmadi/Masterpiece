{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <lable for="email" value="{{ __('Email') }}" />
                <input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <lable for="password" value="{{ __('Password') }}" />
                <input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <input type="checkbox" id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}

<!DOCTYPE html>

<html lang="zxx" dir="ltr">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="utf-8" />
    <title>Meat</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <!--Template style -->
    <link rel="stylesheet" type="text/css" href="css/animate.css" />
    <link rel="stylesheet" type="text/css" href="css/animate.min.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/fonts.css" />
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css" />
    <link rel='stylesheet' href='../../../code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css'>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/responsive.css" />
    <!--favicon-->
    <link rel="shortcut icon" type="image/png" href="images/fav-icon.png" />
    @livewireStyles
    <script src='../../google_analytics_auto.js'></script>
</head>

<body class="page-bg">
    <div id="preloader">
        <div id="status">
            <img src="images/loader.gif" id="preloader_image" alt="loader">
        </div>
    </div>
    <div class="login_box_main_wrapper" id="login_height">
        <div class="container">
            <div class="login-logo">
                <a href=""> <img src="images/white-logo.png" alt="logo"> </a>
            </div>
            <div class="signin-wrapper">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-12">
                        <div class="left-side">
                            <h4>Sign In</h4>
                           
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="form-group field-icon row">
                                    
                <lable for="email"
                                    value="{{ __('Email') }}" />
                                <input id="email"  type="email" name="email"
                                    :value="old('email')" required autofocus />
                                <span><i class="fa fa-user" aria-hidden="true"></i></span>
                        </div>

                        <div class="form-group field-icon row">
                <lable for="password"
                            value="{{ __('Password') }}" />
                        <input id="password" type="password" name="password" required
                            autocomplete="current-password" />
                        <span><i class="fa fa-unlock-alt" aria-hidden="true"></i></span>

                    </div>

                    <div class="round">
                        <input type="checkbox" id="remember_me" name="remember" />
                <label for="remember_me">
                        <span>{{ __('Remember me') }}</span>
                        </label>
                        
                    </div>
                    {{-- <br/>
                    <br/>
                    <div class="round"> --}}
                    @if (Route::has('password.request'))
                        <a class="forgot" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                    {{-- </div> --}}
                    <br/>
                    <div class="round">
                        <div class="login-btn-sec">
                            <button class="sub-btn">
                                {{ __('Log in') }}
                            </button>
                            <br/>
                            <p>Do have an account? <a href="/register">Sign Up now!</a></p>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-12">
                <div class="login-img">
                    <img class="img-fluid" src="images/product/login.jpg" alt="img">
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

    <!-- Side Panel -->
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/custom.js"></script>

    <!-- custom js-->
    <script>
        const types = ['load', 'resize'];
        types.forEach(function(type) {
            window.addEventListener(type, () => {

                let elem = document.getElementById('login_height');
                let wh = window.innerHeight;

                elem.style.height = wh + 'px';

            });
        });
    </script>
    @livewireStyles
</body>


</html>
