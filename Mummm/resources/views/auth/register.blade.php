{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
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
<script src='../../google_analytics_auto.js'></script></head>

<body class="page-bg">

   <div id="preloader">
      <div id="status">
         <img src="images/loader.gif" id="preloader_image" alt="loader">
      </div>
   </div>
   <div class="login_box_main_wrapper" id="login_height">
      <div class="container">
         <div class="login-logo">
            <a href="index-2.html"> <img src="images/white-logo.png" alt="logo"> </a>
         </div>
         <div class="signin-wrapper">
            <div class="row">
               <div class="col-lg-6 col-md-6 col-12">
                  <div class="left-side">
                     <h4>Sign Up</h4>
                     <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group field-icon row">
                           <div class="col-md-12">
                              <input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name">
                              <span><i class="fa fa-user" aria-hidden="true"></i></span>
                           </div>
                        </div>
                        <div class="form-group field-icon row">
                           <div class="col-md-12">
                              <input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required>
                              <span><i class="fa fa-envelope" aria-hidden="true"></i></span>
                           </div>
                        </div>
                        <div class="form-group field-icon row">
                           <div class="col-md-12">
                              <input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password">
                              <span><i class="fa fa-unlock-alt" aria-hidden="true"></i></span>
                           </div>
                        </div>
                        <div class="form-group field-icon row">
                           <div class="col-md-12">
                              <input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password">
                              <span><i class="fa fa-unlock-alt" aria-hidden="true"></i></span>
                           </div>
                        </div>
                      

                        <div class="login-btn-sec remove-social">
                           {{-- <a class="sub-btn" href="sigup"><span>Sign Up</span></a> --}}
                        <input type="submit" name="signup" id="signup" class="sub-btn" value="Register"/>

                           
                           <p>Do have an account? <a href="{{ route('login') }}">Sign In now!</a></p>
                        </div>
                     </form>
                  </div>
               </div>
               <div class="col-lg-6 col-md-6 col-12">
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
      types.forEach(function (type) {
         window.addEventListener(type, () => {

            let elem = document.getElementById('login_height');
            let wh = window.innerHeight;

            elem.style.height = wh + 'px';

         });
      });

   </script>
</body>


<!-- Mirrored from webstrot.com/html/butcher/sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Jun 2022 22:20:29 GMT -->
</html>