@extends('layouts.master')
@section('content')
<div class="inner-slider-wrapper float_left">
      <div class="container">
         <div class="inner-caption">
            <h4>All Product</h4>
            <img src="/images/title.png" alt="img">
         </div>
         <ol class="breadcrumb sicon">
            <li><a href="#">Home</a></li>
            <li><a href="#">Category</a></li>
            <li class="active">All Product</li>
         </ol>
         <img class="meat" src="/images/title-bottom.png" alt="img">
      </div>
   </div>
   <!-- banner section start end-->

   <div class="product-filter-main-wrapper float_left ptb-100">
      <div class="container">
         <div class="heading-title">
            <h4>Our Product's</h4>
            <p>know about our delivery processes</p>
            <img class="img-fluid" src="/images/line-yal.png" alt="img">
         </div>
         <div class="row">
            <div class="col-lg-3 col-md-3 col-12">
               <div class="tab">
                  @foreach ($categories as $item)
                      
                  
                  <button class="tablinks" onclick="openCity(event, 'Pack')">{{$item->name}} <span>
                        <svg version="1.1" id="Layer_8" xmlns="http://www.w3.org/2000/svg"
                           xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1080 1080"
                           style="enable-background:new 0 0 1080 1080;" xml:space="preserve">

                           <g>
                              <path class="st0" d="M715.5,523.6c0,2.5,0,5,0,7.5c-2.6,4.8-5.3,9.5-11.2,10.5c-2.7,0.5-3.3,1.9-3.7,4.1c-1.8,11-4.8,21.6-8.8,32
      c-9.9,26.1-25.2,48.6-45.6,67.7c-1.9,1.7-2.5,2.8-0.5,5c3.1,3.4,4.5,7.8,5.1,12.3c0.2,1.7,0.9,2.7,2.2,3.6c3.2,2.2,6.4,4.3,9.4,6.8
      c5.8,4.9,7.3,12.8,3.9,19.3c-3.4,6.5-10.2,9.5-17.7,7.7c-4.5-1.1-8.9-2.4-13.3-3.7c-1.4-0.4-2.8-0.7-4.4-0.2
      c-8.6,2.9-16.9,1.6-25.1-2.1c-5.7-2.7-10.6-6.6-15.6-10.2c-1.8-1.3-3.3-1.5-5.4-0.7c-30,10.7-60.7,13.6-92.1,7.9
      c-51.3-9.4-91.3-36-120.1-79.4c-16.6-25-25.6-52.8-28.2-82.6c-0.1-1.1,0.2-2.4-1.3-2.8c-5.9-1.4-8.9-5.8-11.5-10.8
      c0-2.8,0-5.5,0-8.3c2.1-3.3,3.5-7.7,7.4-8.9c5.6-1.7,6.5-5.6,6.7-10.3c0-0.4,0.1-0.7,0.1-1.1c7.1-44.4,27.7-81.3,61.9-110.5
      c26.5-22.5,57.2-35.9,91.6-40.8c1.7-0.2,2.9-0.8,4-2.2c4.1-5.5,9.6-7.3,16.2-5.7c4.6,1.1,9.1,2.5,13.7,3.8c1.2,0.3,2.3,0.8,3.6,0.4
      c12.7-4.1,23.8-0.2,34.2,7c2.3,1.6,4.7,2.7,7.3,3.6c50.8,17.1,87.7,49.9,109.8,98.8c5.4,11.9,9.8,24.2,18.3,34.4
      c0.2,0.2,0.2,0.4,0.4,0.7c5.4,9.2,7.6,18.9,4.2,29.4c-0.2,0.7-0.4,1.4-0.2,2.2C712.4,512.9,713.4,518.4,715.5,523.6z M626.7,381.2
      c-0.7-0.6-1.2-1.7-2.4-1.2c0.3,1,1,1.6,1.9,2c9.2,9.1,18.8,17.9,28,27.1C646.5,398.3,637.2,389.1,626.7,381.2z M356.7,529.8
      c9.2,108.1,119.6,177.3,219.1,143.4c-12.1-9.3-23.7-19-34.9-29.1c-1.1-1-2.2-0.8-3.5-0.7c-10.1,1-20.2,0.9-30.3-0.4
      c-52.8-6.4-97-45.5-109.8-97.4c-0.7-3-1.8-3.8-5-3.5c-12.3,1-23.7-1.2-32.4-10.9C359.1,530.1,358,529.8,356.7,529.8z M621.2,685.7
      c7.8,0.1,14-4.6,16.7-12.5c2.7-7.9,0.8-14.2-5.7-19.2c-7.1-5.4-14.1-10.7-21.1-16.2c-1.6-1.3-2.5-1.3-4,0.2
      c-3.9,4.1-7.9,8-11.9,11.9c-3.2,3.1-6.7,3.2-9.2,0.5c-2.5-2.6-2.3-5.9,0.7-8.9c3.7-3.8,7.3-7.5,11.2-11.1c1.7-1.6,1.4-2.4-0.2-3.7
      c-10.7-9-21.1-18.4-31-28.3c-1.3-1.2-1.9-1.4-3.2,0c-3.7,3.9-7.5,7.7-11.4,11.4c-3.1,3.1-6.7,3.3-9.3,0.8c-2.7-2.6-2.5-6,0.7-9.2
      c3.8-3.8,7.6-7.6,11.4-11.4c1.1-1.1,1.6-1.8,0.2-3.2c-9.9-10.1-19.4-20.5-28.5-31.4c-1.5-1.8-2.3-1.5-3.7,0
      c-3.3,3.5-6.7,6.8-10,10.1c-3.9,3.9-7.2,4.4-10,1.7c-2.9-2.8-2.4-6.2,1.4-10c3.7-3.7,7.4-7.5,11.2-11.1c1.5-1.4,1.6-2.3,0.3-3.9
      c-5.5-6.9-10.9-14-16.3-21c-5-6.6-11.2-8.5-19.2-5.8c-8,2.7-12.6,8.9-12.4,16.8c0.1,6.4,2.9,11.8,6.4,16.9
      c18.6,27.7,40.1,53,64.1,76.1c20.8,20.1,43.2,38.2,67,54.7C610.1,683.1,615.2,685.6,621.2,685.7z M631,403.4
      c-11-10.9-22.2-20.8-33.7-30.4c-1.7-1.4-2.3-0.3-3.3,0.6c-4.5,4.5-9,9-13.5,13.5c-3.2,3.1-6.7,3.3-9.2,0.7c-2.6-2.7-2.4-6,0.8-9.2
      c4.1-4.2,8.2-8.4,12.5-12.4c1.4-1.3,1.6-2-0.1-3.4c-7.5-5.5-15.1-11.1-23-16.1c-3.1-2-6.3-3.4-9.9-4.2c-9-2-16.5,1.6-20.3,9.9
      c-3.9,8.5-2,16,5.6,21.7c21.6,16,42.2,33.2,61.6,51.8c1.4,1.3,2.8,2.3,4.7,2.8c5.6,1.5,9.2,5.3,10.9,10.8c0.4,1.3,0.7,2.5,1.7,3.6
      c19.7,20.3,37.8,41.9,54.4,64.8c2.3,3.2,5.6,4.8,9.6,5.2c15.7,1.3,25.5-12.4,18.8-26.8c-5.1-11-13.4-20-20.6-30.1
      c-4.8,4.9-9.2,9.4-13.7,13.9c-3.4,3.4-6.8,3.8-9.5,1.1c-2.7-2.7-2.4-6.1,1-9.5c4.3-4.4,8.6-8.7,13-13c1.1-1.1,2-1.9,0.5-3.6
      c-9.5-11.4-19.3-22.6-30.1-33.8c-3.1,3.3-6,6.5-9.1,9.6c-3.2,3.2-6.6,3.4-9.2,0.7c-2.6-2.7-2.4-6,0.8-9.2
      C624.5,409.5,627.7,406.5,631,403.4z M529.1,383.5c-6.4-4.7-10.3-10-11.3-16.8c-0.4-3.1-1.9-4.8-4.2-6.4c-4.6-3.3-9.9-6-12.2-11.8
      c-0.6-1.5-1.8-0.9-2.8-0.7c-8.2,1.2-16.2,2.8-24,5.5c-66.6,22.7-105.6,68.8-117.4,138.1c-0.2,0.9-1,2.4,0.5,2.9
      c1.2,0.4,1.6-0.9,2.2-1.7c4.3-5.6,10-9,17-9.9c5.6-0.7,11.1-1.5,16.7-2c3.2-0.3,4.5-1.6,5.5-4.7c14.6-44.4,44.2-73.7,88.9-87.5
      C501,384.5,514.4,383.3,529.1,383.5z M390.1,530.2c21-1.3,43.4-4.4,65.5-8.9c2-0.4,2-1.2,1.5-2.8c-1.3-4.3-2.5-8.6-3.6-13
      c-2.1-7.9,0.8-15.1,7.5-18.5c7-3.6,15-1.7,20.1,4.8c2.1,2.7,4,5.4,5.9,8.2c1,1.5,2.1,2.5,4.1,2.6c3.5,0.3,6.9,1.3,9.7,3.5
      c2.5,1.9,4.7,1.9,7.5,0.9c21.1-7.1,41.8-15.4,62-25c5.4-2.5,10.2-5.8,13.4-11c3.9-6.5,2.9-14.6-2.6-20.8c-5.5-6.3-12-7.9-19.5-4.6
      c-9.8,4.3-19.7,8.4-29.7,12.2c-2.1,0.8-2.6,1.5-1.9,3.8c1.5,4.7,2.7,9.6,3.9,14.4c1.1,4.2-0.6,7.5-4,8.4c-3.5,0.9-6.4-1.1-7.6-5.4
      c-1.3-4.6-2.5-9.1-3.6-13.7c-0.5-2-1.3-2.2-3.1-1.6c-28,9.8-56.7,17.4-85.9,23c-2.2,0.4-2.2,1.2-1.6,3c1.3,4.4,2.5,8.9,3.6,13.4
      c1.1,4.2-0.5,7.6-3.9,8.4c-3.6,0.9-6.5-1-7.7-5.2c-1.2-4.4-2.7-8.9-3.5-13.4c-0.6-3.3-2.2-3.5-4.9-3c-8.9,1.4-17.8,2.5-26.7,3.9
      c-4.6,0.7-9.6,0.3-13.5,3.7c-8.5,7.4-9.8,25.3,4.8,30.9C380.3,529.8,384.3,530.4,390.1,530.2z M512.5,518.3c0.3,0.6,0.3,0.8,0.5,1
      c17.3,23,36.1,44.6,56.4,65c1.9,1.9,2.8,0.9,4.3-0.1c31.8-22.2,44.8-64.4,30.9-100.7c-1.9-4.9-3.8-9.8-7.2-14.3
      c-3.3,10-8.9,17-18.3,21.8c-7.6,3.9-15.5,7.3-23.4,10.8C541.7,508,527.3,513.3,512.5,518.3z M604.1,616.4
      c9.3,8.1,18.9,15.7,28.6,23.1c1.5,1.2,2.3,0.1,3.1-0.7c6.1-5.6,11.9-11.5,17.1-17.8c19-23,31-49.2,36.1-78.6c0.3-1.4,1.1-3-0.2-4.6
      c-2.8-3.5-5.4-7.2-8.1-10.8c-0.8-1.1-1.6-1.7-3-1.8c-7.8-0.8-13.8-4.7-18.3-11c-1.7-2.3-3.1-4.8-5.5-6.9
      C654.7,551.7,638.2,587.9,604.1,616.4z M586.7,431.6c-12.1-11.5-24.6-22.2-37.4-32.6c-1-0.8-2.2-1.1-3.4-1.4
      c-28.2-5.1-55-1.1-80,12.9c-27,15.1-45,37.7-55,67.5c6.8-1.2,13.1-2.5,19.5-3.5c2.5-0.4,3.7-1.6,4.8-3.8
      c25.9-53.3,93.2-71.8,142.5-39.1C580.9,433.8,583.4,434.6,586.7,431.6z M622,516.8c0.1,4.8-0.9,12.8-2.9,20.7
      c-5.7,22.6-17.9,40.9-36.5,55c-2.2,1.7-2.8,2.5-0.3,4.5c3.7,3,7.1,6.3,10.5,9.6c1.5,1.4,2.5,1.4,4,0.1
      c35.1-29.5,49.6-67,43.4-112.4c-0.4-2.7-0.4-5.8-2.4-8.1c-8.6-10.3-17.3-20.3-26.6-30c-0.5-0.5-0.8-1.5-2-0.9c-2.8,1.4-3.6,4-2,6.7
      C617,477.7,622,494.8,622,516.8z M527.9,632c-5.1-5.2-9.8-9.6-13.9-14.5c-3.8-4.4-8.1-6.8-13.9-8.4c-36.1-9.6-59.8-32.5-71.1-68.1
      c-0.7-2.1-1.4-2.8-3.6-2.5c-4.7,0.7-9.4,1.4-14.1,1.8c-2.6,0.2-2.9,1.1-2.2,3.5c12.5,43.1,40.3,71,83.2,83.9
      C503.7,631.2,515.3,632.3,527.9,632z M557.3,434.5c-38.8-17.7-88.7-1-107.8,35.8C486.5,461.8,522.2,450,557.3,434.5z M492.4,593.9
      c-9.9-12.5-19.5-25.3-28.4-38.5c-4.1-6.1-7.2-12.5-7.9-19.9c-0.2-1.8-0.8-1.9-2.3-1.6c-3.6,0.8-7.3,1.5-11,2
      c-2.1,0.3-2.5,0.9-1.8,3c5.1,16.5,14.4,30.3,27.6,41.4C475.6,586.3,483.4,590.9,492.4,593.9z M523.5,341.5c-0.4-1.1-1.5-1-2.4-1.1
      c-2.9-0.4-6.6-3.7-8.4,0.7c-1.8,4.3,2.9,5.3,5.2,7.4c0.4,0.4,1.5,0.6,1.6,0.5C520.8,346.6,522.1,344.1,523.5,341.5z M701.3,518.8
      c-2.9,1.6-5.5,3.1-8.3,4.6c1.3,1.8,2.6,3.7,4,5.4c1.2,1.5,2.8,2.1,4.6,1.2c1.9-0.9,2.2-2.6,1.7-4.4
      C702.7,523.4,702.1,521.3,701.3,518.8z M649.1,678.1c-0.6,1.2-1.1,2.2-1.6,3.2c-2.9,5.7-2.9,5.7,3.5,7.1c1.9,0.4,3.7,0.5,4.8-1.7
      c1-2.1,0-3.6-1.5-4.9C652.7,680.5,651,679.5,649.1,678.1z M353.6,511.2c-1.6-1.1,2.2-4.1-1.9-4.2c-5-0.1-7.9,1.3-8.1,4
      c-0.2,2.6,3.5,5.2,8.4,4.9C355,515.8,352.4,512.8,353.6,511.2z M596.4,452.2c1.8-2.2,3.4-4.2,4.9-6.1c1.3-1.7,1.6-3.4-0.1-5
      c-1.7-1.6-6.7-0.9-9.2,1.6c-1.8,1.8,0.9,2.6,1.3,3.9C593.9,448.2,595,449.6,596.4,452.2z M475,504.4c-0.9-2.2-2.4-4.1-4-5.8
      c-1.9-2-5.1-1.8-5.9,0.5c-1.1,3.2,0.3,6.4,1.7,8.9c0.9,1.6,2.8-1.2,4.4-1.7C472.6,505.9,473.7,505.1,475,504.4z" />
                           </g>
                        </svg>
                     </span></button>
   
    @endforeach
                  
               </div>
            </div>
            <div class="col-lg-9 col-md-9 col-12">
               <div class="custom-tbs-content float_left">
                  <div id="Beef" class="tabcontent">
                     <div class="product-new-filter-block">
                        
                        @foreach ($products as $item)
                        <div class="custom-tabs-prdt">
                           <div class="product-thumbnail">
                              <a href="javascript:;">
                                 <img src={{$item->image}} alt="img">
                              </a>
                           </div>
                           <div class="product-body">
                              <h5 class="product-title">
                                 <a href={{route('product.show',$item->id)}} title="Beef">{{$item->name}}</a>
                              </h5>
                              <ul class="star-review">
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                                 <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                              </ul>
                              <span class="product-price">{{$item->price}} <span>4,600$</span> </span>
                              <p class="product-text">{{$item->description}}</p>
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



  


   <!-- footer section start -->

   
   <!-- footer section end -->
   <!-- Side Panel -->
   <script src="js/jquery-3.6.0.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/wow.js"></script>
   <script src="js/counter.js"></script>
   <script src="js/tesi.js"></script>
   <script src="js/testi.js"></script>
   <script src="js/tabs.js"></script>
   <script src="js/jquery.magnific-popup.js"></script>
   <script src="js/isotope.pkgd.min.js"></script>
   <script src="js/custom.js"></script>

   <!-- custom js-->
   <!-- tabs -->
   <script>
      function openCity(evt, cityName) {
         var i, tabcontent, tablinks;
         tabcontent = document.getElementsByClassName("tabcontent");
         for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
         }
         tablinks = document.getElementsByClassName("tablinks");
         for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
         }
         document.getElementById(cityName).style.display = "block";
         evt.currentTarget.className += " active";
      }

      // Get the element with id="defaultOpen" and click on it
      document.getElementById("defaultOpen").click();
   </script>
@endsection