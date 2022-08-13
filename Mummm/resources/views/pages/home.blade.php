@extends('layouts.master')
@section('content')
    

  <!-- banner section start start-->
   <div class="index1-slider-wrapper float_left ptb-100">
      <div class="container">
         <div class="slider-caption wow fadeInUp" data-wow-delay="0.1s">
            <h4>A wide selection of the best chefs with the most delicious dishes</h4>
            <a class="custom-btn" href="product.html"> Shop Now </a>
         </div>
         <div class="slider-item">
            <ul>
               <li class="wow fadeInUp" data-wow-delay="0.1s">
                  <div class="item-icon">
                     <img alt="img" src="images/dish1.png">
                  </div>
                  <div class="item-text">
                     <h4>Free Delivery on Orders Over 10 JOD</h4>
                     <p>Fast Delivery.</p>
                  </div>
               </li>
               <li class="wow fadeInUp" data-wow-delay="0.2s">
                  <div class="item-icon">
                     <img alt="img" src="images/dish2.png">
                  </div>
                  <div class="item-text">
                     <h4>On-demand Quantities from Master Chefs</h4>
                     <p>Fresh Dishes.</p>
                  </div>
               </li>
               <li class="wow fadeInUp" data-wow-delay="0.3s">
                  <div class="item-icon">
                     <img alt="img" src="images/dish3.png">
                  </div>
                  <div class="item-text">
                     <h4>Choose your own Delivery Date</h4>
                     <p>For All Occasions.</p>
                  </div>
               </li>
            </ul>
         </div>
      </div>
   </div>
   <!-- banner section start end-->
   <div class="about-sec-wrapper float_left ptb-100">
      <div class="container">
         <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
               <div class="about-img float_left">
                  <img src="images/dreamstime.png" alt="img">
               </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
               <div class="about-text float_left">
                  <h4>About <i id="mum">Mumm</i></h4>
                  <p>we are committed to total transparency about our Chefs.</p>
               </div>
               <div class="div_line-yal2">
                  <img class="img-fluid" src="images/line-yal.png" alt="img">
               </div>
               <div class="div_p">
                  <p>Nunc elementum purus vel ex iaculis eleifend. Curabitur bibendum odio dui, at placerat
                     antperer vitae. In hac habitasse platea dictumst. Phasellus nec sodales enim. Mauris malesuada
                     nulla
                     hole enim, nec eleifend lacus vulputate ut. Sed eu diam tellus. Sed feugiat, risus ut porta iaculis
                     mauris metus volutpat metus, vitae egestas nibh neque vulputate libero.
                  </p>
                  <br>
                  <p>Nunc elementum purus vel ex iaculis eleifend. Curabitur bibendum odio dui, at placerat
                     antperer vitae. In hac habitasse platea dictumst. Phasellus nec sodales enim. Mauris malesuada
                     nulla
                     hole enim, nec eleifend lacus vulputate ut. Sed eu diam tellus. Sed feugiat, risus ut porta iaculis
                     mauris metus volutpat metus, vitae egestas nibh neque vulputate libero.
                  </p>
                  <a class="custom-btn" href="about-us.html">Read More</a>
               </div>
            </div>
         </div>
      </div>
   </div>
{{-- end about --}}

{{-- start teams  --}}


   <div class="team-client-main-wrapper float_left ptb-100" id="Kitchens">
      <div class="container">
         <div class="heading-title">
            <h4> Kitchens </h4>
            <p>know about our delivery processes</p>
            <img class="img-fluid" src="images/line-yal.png" alt="img">
         </div>
         <div class="row">
            @foreach ($categories as $item)            
            <div class="col-lg-4 col-md-4 col-sm-6">
               <div class="team-box-wrapper">
                  <div class="team-img">
                    <a href={{route('category.show',$item->id)}}><img class="img-fluid" src={{$item->image}} alt="img" width=""></a> 
                  </div>
                  <div class="team-text">
                     <h4> <a href="team-single.html"  target="_blank">{{$item->name}}</a> </h4>
                     <p>OWNER</p>
                   
                  </div>
               </div>
            </div>
            @endforeach
         </div>  
           
            {{-- <div class="col-lg-4 col-md-4 col-sm-6">
               <div class="team-box-wrapper">
                  <div class="team-img">
                     <img class="img-fluid" src="images/kitchen2.jpg" alt="img">
                  </div>
                  <div class="team-text">
                     <h4> <a href="team-single.html"  target="_blank">Kitchen #two</a> </h4>
                     <p>SNR. BUTCHER</p>
                    
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
               <div class="team-box-wrapper">
                  <div class="team-img">
                     <img class="img-fluid" src="images/kitchen3.png" alt="img">
                  </div>
                  <div class="team-text">
                     <h4> <a href="team-single.html"  target="_blank">Kitchen #three</a> </h4>
                     <p>SALES PERSONS</p>
                     
                  </div>
               </div>
            </div>
         </div>

         <div class="heading-title">
           
         </div>
         <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6">
               <div class="team-box-wrapper">
                  <div class="team-img">
                     <img class="img-fluid" src="images/kitchen4.png" alt="img">
                  </div>
                  <div class="team-text">
                     <h4> <a href="team-single.html"  target="_blank">Kitchen #four</a> </h4>
                     <p>OWNER</p>
                   
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
               <div class="team-box-wrapper">
                  <div class="team-img">
                     <img class="img-fluid" src="images/kitchen5.png" alt="img">
                  </div>
                  <div class="team-text">
                     <h4> <a href="team-single.html"  target="_blank">Kitchen #five</a> </h4>
                     <p>SNR. BUTCHER</p>
                    
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
               <div class="team-box-wrapper">
                  <div class="team-img">
                     <img class="img-fluid" src="images/kitchen6.jpg" alt="img">
                  </div>
                  <div class="team-text">
                     <h4> <a href="team-single.html" target="_blank">Kitchen #six</a> </h4>
                     <p>SALES PERSONS</p>
                     
                  </div>
               </div>
            </div> --}}
         </div>
            <div class="team-text">
               
                     
            </div>

      </div>
   </div>
{{--end teame section --}}

{{-- end teams  --}}

{{-- start delivery --}}
   <div class="home-delivery-sec-wrapper float_left">
      <div class="container">
         <div class="heading-title">
            <h4>Home Delivery</h4>
            <p>know about our delivery processes</p>
            <img class="img-fluid" src="images/line-yal.png" alt="img">
         </div>
         <div class="delivery-main-wrapper">
            <div class="delivery-box">
               <img src="images/icon01.png" alt="img">
               <h4> Choose </h4>
               <p>Nunc elementum purus ex iaculis elfend. Curabitur bibendum odio</p>
            </div>
            <div class="delivery-box">
               <img src="images/icon02.png" alt="img">
               <h4> Recieve </h4>
               <p>Aunc elementum purus ex iaculis elfend. Curabitur bibendum odio</p>
            </div>
           
            <div class="delivery-box arro-remove">
               <img src="images/icon04.png" alt="img">
               <h4> Eat </h4>
               <p>Aunc elementum purus ex iaculis elfend. Curabitur bibendum odio</p>
            </div>
         </div>
      </div>
   </div>


   <div class="product-filter-main-wrapper float_left ptb-100">
      <div class="container">
         <div class="heading-title">
            <h4>Our Product's</h4>
            <p>know about our delivery processes</p>
            <img class="img-fluid" src="images/line-yal.png" alt="img">
         </div>
         <div class="row">
            
            <div class="col-lg-9 col-md-9 col-12" style="width: 100%">
               <div class="custom-tbs-content">

                  <div id="Poultry" class="tabcontent">

                     <div class="product-new-filter-block">
                        @foreach ($popular_products as $item)
                            
                        
                        <div class="custom-tabs-prdt">
                           <div class="product-thumbnail">
                              <a href="javascript:;">
                                 <img src="images/product/pc23.png" alt="img">
                              </a>
                           </div>
                           <div class="product-body">
                              <h5 class="product-title">
                                 <a href="product-single.html" title="Beef">{{$item->name}}</a>
                              </h5>
                              <ul class="star-review">
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                              </ul>
                              <span class="product-price">3,500$ <span>4,600$</span> </span>
                              <p class="product-text">Lorem Ipsum is simply dummy text of the printing and typesetting
                                 industry.</p>
                              <a class="custom-btn" href="product-single.html">Add Cart</a>
                           </div>
                        </div>
                        @endforeach
                     </div>
                  </div>
               </div>
            </div>

         </div>
      </div>
   </div>

   <div class="our-butchery-wrapper float_left">
      <div class="container">
         <div class="row">
            <div class="col-lg-5 col-md-12 col-sm-12">
               <div class="about-text float_left">
                  <h4>Our Process</h4>
                  <p>we are committed to total transparency about our products.</p>
               </div>
               <div class="div_line-yal2">
                  <img class="img-fluid" src="images/line-yal.png" alt="img">
               </div>
               <div class="div_p">
                  <p class="p1">Nunc elementum purus vel ex iaculis eleifend. Curabitur bibendum odio dui, at placerat
                     antperer vitae. In hac habitasse platea dictumst. Phasellus nec sodales enim. Mauris malesuada
                     nulla
                     hole enim, nec eleifend lacus vulputate ut. Sed eu diam tellus. Sed feugiat, risus ut porta iaculis
                     mauris metus volutpat metus, vitae egestas nibh neque vulputate libero.
                  </p>
                  <br>
                  <p class="p1">Nunc elementum purus vel ex iaculis eleifend. Curabitur bibendum odio dui, at placerat
                     antperer vitae. In hac habitasse platea dictumst. Phasellus nec sodales enim. Mauris malesuada
                     nulla
                     hole enim, nec eleifend lacus vulputate ut. Sed eu diam tellus. Sed feugiat, risus ut porta iaculis
                     mauris metus volutpat metus, vitae egestas nibh neque vulputate libero.
                  </p>
                  <a class="custom-btn" href="about-us.html">Read More</a>
               </div>
            </div>
            <div class="col-lg-7 col-md-12 col-sm-12">
               <div class="about-img-block">
                  <figure class="img1">
                     <img class="img-fluid" src="images/about1.jpg" alt="img">
                  </figure>
                  <figure class="img2">
                     <img class="img-fluid" src="images/about2.jpg" alt="img">
                  </figure>
               </div>
            </div>
         </div>
      </div>
   </div>

{{-- team start --}}
  
{{--end teame section --}}


   <div class="call-now-wrapper float_left">
      <div class="container">
         <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-6"></div>
            <div class="col-lg-6 col-md-12 align-self-end">
               <div class="call-sec-wrapper float_left">
                  <h4>Call Now</h4>
                  <img class="img-fluid" src="images/line-yal-red.png" alt="img">
                  <h2 class="call">+962 773 836 624</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla condimentumlaoreet velit ut rhoncus.
                     Class aptent taciti sociosqu ad litora torquent per conubia nostra</p>
                  <a class="custom-btn" href="store.html">Contact Us</a>
               </div>
            </div>
         </div>
      </div>
   </div>



   <div class="news-blog-wrapper float_left ptb-100">
      <div class="container">
         <div class="heading-title">
            <h4>New’s & Blog’s</h4>
            <p>know about our delivery processes</p>
            <img class="img-fluid" src="images/line-yal.png" alt="img">
         </div>
         <div class="row">
            <div class="col-lg-6 col-md-12 col-12">
               <div class="blog-box">
                  <div class="blog-img">
                     <img class="img-fluid" src="images/blog1.jpg" alt="img">
                  </div>
                  <div class="blog-text">
                     <p>JULY / 15 / 2022</p>
                     <h4> <a href="blog-single-left-sidebar.html">Aorem ipsum dolor sit amet consect.</a> </h4>
                     <p class="p-text"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. </p>
                     <a class="custom-btn" href="blog-single-left-sidebar.html">Read More</a>
                  </div>
               </div>
            </div>
            <div class="col-lg-6 col-md-12 col-12">
               <div class="blog-box">
                  <div class="blog-img">
                     <img class="img-fluid" src="images/blog2.jpg" alt="img">
                  </div>
                  <div class="blog-text">
                     <p>JULY / 15 / 2022</p>
                     <h4> <a href="blog-single-left-sidebar.html">Aorem ipsum dolor sit amet consect.</a> </h4>
                     <p class="p-text"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. </p>
                     <a class="custom-btn" href="blog-single-left-sidebar.html">Read More</a>
                  </div>
               </div>
            </div>

         </div>
      </div>
   </div>



   <div class="countdown-wrapper float_left">
      <div class="container">
         <div class="counter-main-wrapper">
            <div class="count-box">
               <div class="count">100</div>
               <span class="customer">Customer’s</span>
            </div>
            <div class="count-box">
               <div class="count">60</div>
               <span class="customer customer1">Meats Type’s</span>
            </div>
            <div class="count-box">
               <div class="count">70</div>
               <span class="customer customer2">Organic Farm’s</span>
            </div>
            <div class="count-box">
               <div class="count">50</div>
               <span class="customer customer3">Outlet's</span>
            </div>
         </div>
         <div class="counter-text">
            <img class="img-fluid" src="images/line-cd.png" alt="img">
            <p>Donec blandit, tellus sed molestie posuere, erat lorem tempor enim, vestibulum tincidunt ex diam in elit.
               Suspendisse sed ipsum nibh. Proin euismod luctus mauris, quis scelerisque arcu ultricies condimentum.
               Donec pellentesque dictum tellus, ut tincidunt nibh ultricies vitae. Etiam luctus justo eu tellus
               maximus, id venenatis sem euismod.</p>
         </div>
      </div>
   </div>


   <div class="testimonial-client-say-wrapper float_left ptb-100">
      <div class="container">
         <div class="heading-title">
            <h4>Our Client Say</h4>
            <p>Donec blandit, tellus sed molestie posuere,</p>
            <img class="img-fluid" src="images/line-yal.png" alt="img">
         </div>
         <div class="testi-slider float_left">
            <div id="my-carousel" class="owl-carousel">
               <div class="item">
                  <div class="row">
                     <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                        <img src="images/tes1.jpg" alt="img">
                     </div>
                     <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                        <h4>Ibn Battuta</h4>
                        <span>Business Man</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                           tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                           quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                           consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                           cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                           proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                     </div>
                  </div>
               </div>
               <div class="item">
                  <div class="row">
                     <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                        <img src="images/tes2.jpg" alt="img">
                     </div>
                     <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                        <h4>Ibn Battuta</h4>
                        <span>Business Man</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                           tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                           quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                           consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                           cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                           proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                     </div>
                  </div>
               </div>
               <div class="item">
                  <div class="row">
                     <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                        <img src="images/tes3.jpg" alt="img">
                     </div>
                     <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                        <h4>Ibn Battuta</h4>
                        <span>Business Man</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                           tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                           quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                           consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                           cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                           proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                     </div>
                  </div>
               </div>

            </div>
            <div class="navigation-img-wrapper">
               <div class="navigator" data-item="0"><img src="images/tes1.jpg" alt="img"></div>
               <div class="navigator" data-item="1"><img src="images/tes2.jpg" alt="img"></div>
               <div class="navigator" data-item="2"><img src="images/tes3.jpg" alt="img"></div>
            </div>
         </div>
      </div>
   </div>


   <div class="contact_img_background">
      <div class="container">
         <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
               <div class="logo-white">
                  <img src="images/white-logo.png" alt="logo">
               </div>

               
              
             

            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-12" id='contact'>
               <div class="request-form-wrapper" >
                  <h4>Send Your Request</h4>
                  <p>We Are Committed To Total Transparency About Our Products.</p>
                  <div class="div_line-yal">
                     <img class="img-fluid" src="images/line-yal.png" alt="img">
                  </div>
                  <form>
                     <div class="mb-3 icon-filed">
                        <input type="text" class="form-control require" name="first_name" required="" placeholder="Enter Name">
                        <span><i class="fa fa-user"></i></span>
                     </div>
                     <div class="mb-3 icon-filed">
                        <input type="email" class="form-control require" name="email" required="" data-valid="email" data-error="Email should be valid." placeholder="Enter Email">
                        <span><i class="fa fa-envelope"></i></span>
                     </div>
                     <div class="mb-3 icon-filed">
                        <input type="text" class="form-control require" name="contact_no" placeholder="Enter Mob. Number">
                        <span><i class="fa fa-phone"></i></span>
                     </div>
                     <div class="mb-3 icon-filed">
                        <textarea rows="3" cols="3" class="form-control require" name="message"  placeholder="Enter Message"></textarea>
                        <span><i class="fas fa-edit"></i></span>
                     </div>
                     <button class="submitForm custom-btn">Send Now</button>
                  </form>
                  
               </div>
            </div>
         </div>
      </div>
   </div>


   <div class="brand-company-wrapper float_left ptb-100">
      <div class="container">
         <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-12">
               <div class="brand-img">
                  <img src="images/brand3.jpg" alt="img">
               </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-12">
               <div class="brand-img">
                  <img src="images/brand1.jpg" alt="img">
               </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-12">
               <div class="brand-img">
                  <img src="images/brand2.jpg" alt="img">
               </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-3 col-12">
               <div class="brand-img">
                  <img src="images/brand4.jpg" alt="img">
               </div>
            </div>
         </div>
      </div>
   </div>




@endsection