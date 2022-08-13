@extends('layouts.master')
@section('content')
    
<div class="inner-slider-wrapper float_left">
      <div class="container">
         <div class="inner-caption">
            <h4>Product Details</h4>
            <img src="/images/title.png" alt="img">
         </div>
         <ol class="breadcrumb sicon">
            <li><a href="#">Home</a></li>
            <li><a href="#">Category</a></li>
            <li class="active">Product Single</li>
         </ol>
         <img class="meat" src="/images/title-bottom.png" alt="img">
      </div>
   </div>
   <!-- banner section start end-->


   <div class="product-client-say-wrapper float_left ptb-100">
      <div class="container">
         <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
               <div class="testi-slider float_left">
                  <div id="my-carousel" class="owl-carousel">
                     <div class="item">
                        <img src="/images/product1.jpg" alt="img">
                     </div>
                     <div class="item">
                        <img src="/images/product2.jpg" alt="img">
                     </div>
                     <div class="item">
                        <img src="/images/product3.jpg" alt="img">
                     </div>
                  </div>
                  <div class="navigation-img-wrapper">
                     <div class="navigator" data-item="0"><img src="images/product1.jpg" alt="img"></div>
                     <div class="navigator" data-item="1"><img src="images/product2.jpg" alt="img"></div>
                     <div class="navigator" data-item="2"><img src="images/product3.jpg" alt="img"></div>
                  </div>
               </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
               <div class="product-des">
               
                  <h4>{{$product->name}}</h4>
                  <span>From only $5.99</span>
                  <h5>{{$product->price}} JOD</h5>
                  <ul class="star-review">
                     <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                     <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                     <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                     <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                     <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                  </ul>
                  <div class="card-product">
                     <div class="card-product-text">
                        <h5>1 x Whole Chicken</h5>
                        <span>serves4-6)</span>
                     </div>
                     <div class="card-product-rate">
                        <h5>$5.99</h5>
                        <form>
                           <div class="form-group">
                              <input type="checkbox" id="price">
                              <label for="price"></label>
                           </div>
                        </form>
                     </div>
                  </div>
                  <div class="card-product">
                     <div class="card-product-text">
                        <h5>1 x Whole Chicken</h5>
                        <span>serves4-6)</span>
                     </div>
                     <div class="card-product-rate">
                        <h5>$5.99</h5>
                        <form>
                           <div class="form-group">
                              <input type="checkbox" id="rate">
                              <label for="rate"></label>
                           </div>
                        </form>
                     </div>
                  </div>
                  <div class="card-product">
                     <div class="card-product-text">
                        <h5>1 x Whole Chicken</h5>
                        <span>serves4-6)</span>
                     </div>
                     <div class="card-product-rate">
                        <h5>$5.99</h5>
                        <form>
                           <div class="form-group">
                              <input type="checkbox" id="dollar">
                              <label for="dollar"></label>
                           </div>
                        </form>
                     </div>
                  </div>

                </div>
               <div class="value-produt">
                  <!-- <div>
                     <button class="value-button" id="decrease" onclick="decreaseValue()" value="Decrease Value">-</button>
                     <input type="number" id="number" value="0" />
                     <button class="value-button" id="increase" onclick="increaseValue()" value="Increase Value">+</button>
                  </div> -->
                  <div class="number">
                     <span class="minus">-</span>
                     <input type="text" value="1"/>
                     <span class="plus">+</span>
                  </div>
                  <a class="custom-btn" href="javascript:;">Add to Cart</a>
               </div>
               <div class="copy-social">
                  <span>Sharing is caring</span>
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
         </div>
      </div>

   </div>


   <div class="about-the-product float_left">
      <div class="container">
         <div class="heading-title">
            <h4>About the Product</h4>
            <p>Additional information,reviews & description</p>
            <img class="img-fluid " src="/images/under-line.png" alt="img">
         </div>
         <div class="custom-tabs float_left">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
               <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                     type="button" role="tab" aria-controls="home" aria-selected="true">Description</button>
               </li>
               <li class="nav-item" role="presentation">
                  <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button"
                     role="tab" aria-controls="profile" aria-selected="false">Nutritional Facts</button>
               </li>
               <li class="nav-item" role="presentation">
                  <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button"
                     role="tab" aria-controls="contact" aria-selected="false">Review (14)</button>
               </li>
            </ul>
            <div class="tab-content" id="myTabContent">
               <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                  <h5>About Whole Chicken</h5>
                  <p>{{$Productjoin[0]->kitchen_description}}</p>
               </div>
               <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ac cursus lorem, sed interdum
                     tellus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                     Curabitur auctor ipsum at libero feugiat, nec maximus sem vestibulum. Morbi egestas vitae libero
                     eget ultrices. Curabitur sem purus, eleifend eu mauris nec, euismod porta elit. Cum sociis natoque
                     penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla porttitor hendrerit
                     ullamcorper. Vestibulum in tellus lacus. Donec vel ultricies augue. Aenean nibh nunc, dapibus ac
                     ultrices at, posuere non nisi. Sed porta tempus nulla id blandit. Nulla et maximus nulla. Donec vel
                     faucibus lectus.</p>
               </div>
               <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                  <h5>Be the first one to review "WHOLE CHICKEN"</h5>
                  <span>YOUR REVIEWS</span>
                  <ul class="star-review">
                     <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                     <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                     <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                     <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                     <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                  </ul>
                  <div class="text-msg">
                     <textarea name="message" id="" cols="30" rows="5" placeholder="Type Here.."></textarea>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

   <div class="customer-blog-wrapper float_left ptb-100">
      <div class="container">
         <div class="heading-title">
            <h4>Customers Also Bought</h4>
            <p>You may also like</p>
            <img class="img-fluid " src="/images/under-line.png" alt="img">
         </div>
         <div class="product-single-wrapper">
             @foreach ($related_products as $item)
             
             <div class="custom-tabs-prdt">
                 <div class="product-thumbnail">
                     <a href="javascript:;">
                         <img src="/images/product/pc1.png" alt="img">
                        </a>
                    </div>
                    <div class="product-body">
                        <h5 class="product-title">
                            <a href="product-left-sidebar.html" title="Beef">{{$item->name}}</a>
                        </h5>
                        <ul class="star-review">
                            <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                            <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                            <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                            <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                            <li> <a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a> </li>
                        </ul>
                        <span class="product-price">{{$item->price}} JOD<</span>
                        <p class="product-text">{{$item->discription}}</p>
                        <a class="custom-btn" href="product-left-sidebar.html">Add Cart</a>
                    </div>
                </div>
                
                @endforeach
           
         </div>
      </div>
   </div>

   <!-- footer section start -->
   
   


@endsection