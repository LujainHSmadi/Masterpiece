@extends('layouts.master')

@section('content')
    <div class="mobile-menu-wrapper d-xl-none d-lg-none d-md-block d-sm-block">
            <div class="container">
               <div class="row">
                  <div class=" col-md-4 col-sm-4 col-6">
                     <div class="mobile-logo">
                        <a href="index-2.html">
                           <img src="images/logo.jpg" alt="logo">
                        </a>
                     </div>
                  </div>
                  <div class="col-md-8 col-sm-8 col-6">
                     <div class="d-flex  justify-content-end">
                        <div class="social-media-icons">
                           <ul>
                              <li class="login-btn">
                                 <a href="javascript:;">
                                    Cart<span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
                                 </a>
                                 <div class="user-text">
                                    <p>Item <span>View Cart</span> </p>
                                    <div class="cart-list">
                                       <h5>Bee Meat <span>1 x $258.00</span></h5>
                                    </div>
                                    <div class="cart-right">
                                       <img alt="img" src="images/pm3.gif">
                                       <div class="close_btn">
                                          <i class="fa fa-times"></i>
                                       </div>
                                    </div>
                                    <div class="total">
                                       <p>Sub Total: <span>$ 289.00</span> </p>
                                    </div>
                                    <div class="btn-cart">
                                       <a href="cart.html"><i class="fas fa-shopping-cart"></i>&nbsp; View Cart</a>
                                       <a href="checkout.html"><i class="fas fa-share"></i>&nbsp; Checkout</a>
                                   </div>
                                 </div>
                              </li>
                           </ul>
                        </div>
                        <div class="d-flex align-items-center">
                           <div class="toggle-main-wrapper mt-2" id="sidebar-toggle">
                              <span class="line"></span>
                              <span class="line"></span>
                              <span class="line"></span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div id="sidebar">
            <div class="sidebar_logo">
               <a href="index-2.html"><img src="images/logo.jpg" alt="img"></a>
            </div>
            <div id="toggle_close">&times;</div>
            <div id='cssmenu'>
               <ul class="float_left">
                  <li class="has-sub">
                     <a href="#">Home</a>
                     <ul>
                        <li><a href="index-2.html">Home 01</a></li>
                        <li><a href="index2.html">Home 02</a></li>
                     </ul>
                  </li>
                  <li><a href="about-us.html">about</a></li>

                  <li class="has-sub">
                     <a href="#">Shop</a>
                     <ul>
                        <li><a href="product.html">Product</a></li>
                        <li><a href="product-left-sidebar.html">Product Left Sidebar</a></li>
                        <li><a href="jproduct-right-sidebar.html">Product Right Sidebar</a></li>
                        <li><a href="product-single.html">Product Single</a></li>
                        <li><a href="checkout.html">Checkout</a></li>
                     </ul>
                  </li>
                  <li class="has-sub">
                     <a href="#">Blog</a>
                     <ul>
                        <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                        <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                        <li><a href="blog-single-left-sidebar.html">Blog Single Left Sidebar</a></li>
                        <li><a href="blog-single-right-sidebar.html">Blog Single Right Sidebar</a></li>
                     </ul>
                  </li>
                  <li class="border-none"><a href="store.html">Store</a></li>
               </ul>
            </div>
         </div>
         <!-- responsive menu End -->
      </div>
   </div>
   <!-- header end -->
   <!-- banner section start start-->
   <div class="inner-slider-wrapper float_left">
      <div class="container">
         <div class="inner-caption">
            <h4>Shopping Cart</h4>
            <img src="images/title.png" alt="img">
         </div>
         <ol class="breadcrumb sicon">
            <li><a href="#">Home</a></li>
            <li><a href="#">Page</a></li>
            <li class="active">Shopping Cart</li>
         </ol>
         <img class="meat" src="images/title-bottom.png" alt="img">
      </div>
   </div>
   <!-- banner section start end-->

   <div class="shopping-cart-main-wrapper float_left ptb-100">
      <div class="container">
         <div class="cart-strip-main-wrapper">
            <div class="cart-item">
               <div class="cart-item-img">
                  <img src="images/cart1.jpg" alt="logo" />
                  <h5>1x Whole Chicken</h5>
               </div>
            </div>
            <div class="cart-item">
               <p>01 Kg</p>
            </div>
            <div class="cart-item">
               <div class="quantity-field">
                  <button class="value-button decrease-button" onclick="decreaseValue(this)" title="Azalt">-</button>
                  <div class="number">0</div>
                  <button class="value-button increase-button" onclick="increaseValue(this, 5)" title="Arrtır">+
                  </button>
               </div>
            </div>
            <div class="cart-item">
               <h4>$31.00</h4>
            </div>
            <div class="cart-item">
               <span>X</span>
            </div>
         </div>
         <!--  -->
         <div class="cart-strip-main-wrapper mt-4">
            <div class="cart-item">
               <div class="cart-item-img">
                  <img src="images/cart2.jpg" alt="logo" />
                  <h5>1x Whole Chicken</h5>
               </div>
            </div>
            <div class="cart-item">
               <p>01 Kg</p>
            </div>
            <div class="cart-item">
               <div class="quantity-field">
                  <button class="value-button decrease-button" onclick="decreaseValue(this)" title="Azalt">-</button>
                  <div class="number">0</div>
                  <button class="value-button increase-button" onclick="increaseValue(this, 5)" title="Arrtır">+
                  </button>
               </div>
            </div>
            <div class="cart-item">
               <h4>$31.00</h4>
            </div>
            <div class="cart-item">
               <span>X</span>
            </div>
         </div>
         <!--  -->
         <div class="cart-strip-main-wrapper mt-4">
            <div class="cart-item">
               <div class="cart-item-img">
                  <img src="images/cart3.jpg" alt="logo" />
                  <h5>1x Whole Chicken</h5>
               </div>
            </div>
            <div class="cart-item">
               <p>01 Kg</p>
            </div>
            <div class="cart-item">
               <div class="quantity-field">
                  <button class="value-button decrease-button" onclick="decreaseValue(this)" title="Azalt">-</button>
                  <div class="number">0</div>
                  <button class="value-button increase-button" onclick="increaseValue(this, 5)" title="Arrtır">+
                  </button>
               </div>
            </div>
            <div class="cart-item">
               <h4>$31.00</h4>
            </div>
            <div class="cart-item">
               <span>X</span>
            </div>
         </div>
         <!--  -->
         <div class="cart-strip-main-wrapper mt-4">
            <div class="cart-item">
               <div class="cart-item-img">
                  <img src="images/cart4.jpg" alt="logo" />
                  <h5>1x Whole Chicken</h5>
               </div>
            </div>
            <div class="cart-item">
               <p>01 Kg</p>
            </div>
            <div class="cart-item">
               <div class="quantity-field">
                  <button class="value-button decrease-button" onclick="decreaseValue(this)" title="Azalt">-</button>
                  <div class="number">0</div>
                  <button class="value-button increase-button" onclick="increaseValue(this, 5)" title="Arrtır">+
                  </button>
               </div>
            </div>
            <div class="cart-item">
               <h4>$31.00</h4>
            </div>
            <div class="cart-item">
               <span>X</span>
            </div>
         </div>
      </div>
   </div>


   <div class="shopping-details-wrapper float_left">
      <div class="container">
         <div class="row shoping-box">
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
               <div class="terms">
                  <form>
                     <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">I have read and agreed to the Terms &
                           Conditions.</label>
                     </div>
                  </form>
               </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
               <div class="shipping-account-wrapper">
                  <p>Total of product pricing </p>
                  <span>$5.99</span>
               </div>
               <div class="shipping-account-wrapper">
                  <p>Estimated Shipping Charges </p>
                  <span>$0.00</span>
               </div>
               <div class="shipping-account-wrapper mt-4">
                  <p>Total </p>
                  <h5>$5.99</h5>
               </div>
            </div>
         </div>
      </div>
   </div>

   <div class="cart-btn-wrapper float_left">
      <div class="container">
         <div class="cart-btn">
            <a class="out-line" href="product.html">Continue to shop</a>
            <a class="custom-btn" href="checkout.html">Proceed to Payment</a>
         </div>
      </div>
   </div>




   <!-- footer section start -->
   <div class="footer-main-wrapper float_left ptb-100">
      <div class="container">
         <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12">
               <div class="link">
                  <span>Call Now</span>
                  <h4>+1 800 123 4567</h4>
                  <span>Get Special Email Offers</span>
                  <div class="line">
                     <img src="images/4.png" alt="line">
                  </div>
                  <div class="input-filed">
                     <input type="email" placeholder="Your Email">
                     <button>Join Us</button>
                  </div>
               </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
               <div class="widgettitle">
                  <h4>Our Service</h4>
                  <div class="line">
                     <img src="images/4.png" alt="line">
                  </div>
                  <div class="link-page">
                     <ul>
                        <li>
                           <a href="about-us.html">About Us</a>
                        </li>
                        <li>
                           <a href="product.html">Product</a>
                        </li>
                        <li>
                           <a href="product-left-sidebar.html">Product left Sidebar</a>
                        </li>
                        <li>
                           <a href="product-right-sidebar.html">Product Right Sidebar</a>
                        </li>
                        <li>
                           <a href="product-single.html">Product Single</a>
                        </li>
                        <li>
                           <a href="checkout.html">Checkout</a>
                        </li>

                     </ul>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
               <div class="widgettitle">
                  <h4>Our Story</h4>
                  <div class="line">
                     <img src="images/4.png" alt="line">
                  </div>
                  <div class="link-page">
                     <ul>
                        <li>
                           <a href="blog-left-sidebar.html">Blog Left Sidebar</a>
                        </li>
                        <li>
                           <a href="blog-right-sidebar.html">Blog Right Sidebar</a>
                        </li>
                        <li>
                           <a href="blog-single-left-sidebar.html">Blog Single Left Sidebar</a>
                        </li>
                        <li>
                           <a href="blog-single-right-sidebar.html">Blog Single Right Sidebar</a>
                        </li>
                        <li>
                           <a href="privacy.html">Privacy</a>
                        </li>
                        <li>
                           <a href="terms.html">Terms of Use</a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
               <div class="widgettitle">
                  <h4>Our Story</h4>
                  <div class="line">
                     <img src="images/4.png" alt="line">
                  </div>
                  <div class="link-page">
                     <div class="img-ftr">
                        <div class="small-img"> <img src="images/s1.jpg" alt="img"> </div>
                        <div class="small-img"> <img src="images/s2.jpg" alt="img"> </div>
                        <div class="small-img"> <img src="images/s3.jpg" alt="img"> </div>
                        <div class="small-img"> <img src="images/s4.jpg" alt="img"> </div>
                        <div class="small-img"> <img src="images/s5.jpg" alt="img"> </div>
                        <div class="small-img"> <img src="images/s6.jpg" alt="img"> </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="copy-right-wrapper float_left">
      <div class="container">
         <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-12 col-12">
               <div class="copy-social">
                  <ul>
                     <li>
                        <a href="javascript:;"><i class="fab fa-facebook-f"></i></a>
                     </li>
                     <li>
                        <a href="javascript:;"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                     </li>
                     <li>
                        <a href="javascript:;"><i class="fab fa-google" aria-hidden="true"></i></a>
                     </li>
                     <li>
                        <a href="javascript:;"><i class="fab fa-whatsapp" aria-hidden="true"></i></a>
                     </li>
                     <li>
                        <a href="javascript:;"><i class="fab fa-youtube" aria-hidden="true"></i></a>
                     </li>
                     <li>
                        <a href="javascript:;"><i class="fab fa-pinterest-p" aria-hidden="true"></i></a>
                     </li>
                  </ul>
               </div>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-12 col-12">
               <div class="copy-right">
                  <p>Copyright 2022 © </p>
                  <a href="javascript:;">Butcher | Meat Shop HTML Template</a>
                  <p>Design By</p>
                  <a href="javascript:;">Webstrot</a>
               </div>
            </div>
         </div>
      </div>
   </div>
@endsection