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
                     <form method="POST"  action="{{route('sigup')}}">
                        @csrf
                        <div class="form-group field-icon row">
                           <div class="col-md-12">
                              <input type="text" placeholder="Full Name" name="name">
                              <span><i class="fa fa-user" aria-hidden="true"></i></span>
                           </div>
                        </div>
                        <div class="form-group field-icon row">
                           <div class="col-md-12">
                              <input type="text" placeholder="Email" name="email">
                              <span><i class="fa fa-envelope" aria-hidden="true"></i></span>
                           </div>
                        </div>
                        <div class="form-group field-icon row">
                           <div class="col-md-12">
                              <input type="password" placeholder="Password" name="password">
                              <span><i class="fa fa-unlock-alt" aria-hidden="true"></i></span>
                           </div>
                        </div>
                      

                        <div class="login-btn-sec remove-social">
                           {{-- <a class="sub-btn" href="sigup"><span>Sign Up</span></a> --}}
                        <input type="submit" name="signup" id="signup" class="sub-btn" value="Register"/>

                           
                           <p>Do have an account? <a href="login.html">Sign In now!</a></p>
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