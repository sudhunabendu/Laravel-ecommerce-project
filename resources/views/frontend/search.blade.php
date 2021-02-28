@extends('frontend.layout')
@section('contents')
<section>
  <div class="container">
    <div class="row">
      @include('frontend.sidebar')

      <div class="col-sm-9 padding-right">
        <div class="features_items">
          <!--features_items-->
          <h2 class="title text-center">Searched Items</h2>

          @foreach($products as $item)
          <div class="col-sm-4">
            <div class="product-image-wrapper">
              <div class="single-products">
                <div class="productinfo text-center">
                  @php
                  $i = 1;
                  @endphp
                  @foreach($item->images as $image)
                  @if($i > 0)
                  <img style="width: 50%;" src="{{asset('public/images/home/'.$image->image)}}" alt="{{$item->title}}" />
                  @endif
                  @php
                  $i--;
                  @endphp
                  @endforeach

                  <h2>&#8377;{{$item->price}}</h2>
                  <p>{{$item->description}}</p>
                  <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                </div>
                <div class="product-overlay">
                  <div class="overlay-content">
                    <h2>&#8377;{{$item->price}}</h2>
                    <p>{{$item->title}}</p>
                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                  </div>
                </div>
              </div>
              <div class="choose">
                <ul class="nav nav-pills nav-justified">
                  <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                  <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
                </ul>
              </div>
            </div>
          </div>
          @endforeach
          <!-- <div class="col-sm-4">
            <div class="product-image-wrapper">
              <div class="single-products">
                <div class="productinfo text-center">
                  <img src="{{asset('images/home/product2.jpg')}}" alt="" />
                  <h2>$56</h2>
                  <p>Easy Polo Black Edition</p>
                  <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                </div>
                <div class="product-overlay">
                  <div class="overlay-content">
                    <h2>$56</h2>
                    <p>Easy Polo Black Edition</p>
                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                  </div>
                </div>
              </div>
              <div class="choose">
                <ul class="nav nav-pills nav-justified">
                  <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                  <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="product-image-wrapper">
              <div class="single-products">
                <div class="productinfo text-center">
                  <img src="{{asset('images/home/product3.jpg')}}" alt="" />
                  <h2>$56</h2>
                  <p>Easy Polo Black Edition</p>
                  <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                </div>
                <div class="product-overlay">
                  <div class="overlay-content">
                    <h2>$56</h2>
                    <p>Easy Polo Black Edition</p>
                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                  </div>
                </div>
              </div>
              <div class="choose">
                <ul class="nav nav-pills nav-justified">
                  <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                  <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="product-image-wrapper">
              <div class="single-products">
                <div class="productinfo text-center">
                  <img src="{{asset('images/home/product4.jpg')}}" alt="" />
                  <h2>$56</h2>
                  <p>Easy Polo Black Edition</p>
                  <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                </div>
                <div class="product-overlay">
                  <div class="overlay-content">
                    <h2>$56</h2>
                    <p>Easy Polo Black Edition</p>
                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                  </div>
                </div>
                <img src="{{asset('images/home/new.png')}}" class="new" alt="" />
              </div>
              <div class="choose">
                <ul class="nav nav-pills nav-justified">
                  <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                  <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="product-image-wrapper">
              <div class="single-products">
                <div class="productinfo text-center">
                  <img src="{{asset('images/home/product5.jpg')}}" alt="" />
                  <h2>$56</h2>
                  <p>Easy Polo Black Edition</p>
                  <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                </div>
                <div class="product-overlay">
                  <div class="overlay-content">
                    <h2>$56</h2>
                    <p>Easy Polo Black Edition</p>
                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                  </div>
                </div>
                <img src="{{asset('images/home/sale.png')}}" class="new" alt="" />
              </div>
              <div class="choose">
                <ul class="nav nav-pills nav-justified">
                  <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                  <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="product-image-wrapper">
              <div class="single-products">
                <div class="productinfo text-center">
                  <img src="{{asset('images/home/product6.jpg')}}" alt="" />
                  <h2>$56</h2>
                  <p>Easy Polo Black Edition</p>
                  <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                </div>
                <div class="product-overlay">
                  <div class="overlay-content">
                    <h2>$56</h2>
                    <p>Easy Polo Black Edition</p>
                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                  </div>
                </div>
              </div>
              <div class="choose">
                <ul class="nav nav-pills nav-justified">
                  <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                  <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
                </ul>
              </div>
            </div>
          </div> -->

        </div>
        <!--features_items-->

        <div class="category-tab">
          <!--category-tab-->
          <div class="col-sm-12">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tshirt" data-toggle="tab">T-Shirt</a></li>
              <li><a href="#blazers" data-toggle="tab">Blazers</a></li>
              <li><a href="#sunglass" data-toggle="tab">Sunglass</a></li>
              <li><a href="#kids" data-toggle="tab">Kids</a></li>
              <li><a href="#poloshirt" data-toggle="tab">Polo shirt</a></li>
            </ul>
          </div>
          <div class="tab-content">
            <div class="tab-pane fade active in" id="tshirt">

              @foreach($products as $item)
              <div class="col-sm-3">
                <div class="product-image-wrapper">
                  <div class="single-products">
                    <div class="productinfo text-center"> @php
                      $i = 1;
                      @endphp
                      @foreach($item->images as $image)
                      @if($i > 0)
                      <a href="{{route('products.show',$item->slug)}}"><img src="{{asset('public/images/home/'.$image->image)}}" style="width: 68%" alt="{{$item->title}}" /></a>
                      @endif
                      @php
                      $i--;
                      @endphp
                      @endforeach
                      <h2>${{$item->price}}</h2>
                      <a href="{{route('products.show',$item->slug)}}">
                        <p>{{$item->title}}</p>
                      </a>
                      <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                    </div>

                  </div>
                </div>
              </div>
              @endforeach
              <!-- <div class="col-sm-3">
                <div class="product-image-wrapper">
                  <div class="single-products">
                    <div class="productinfo text-center">
                      <img src="{{asset('images/home/gallery2.jpg')}}" alt="" />
                      <h2>$56</h2>
                      <p>Easy Polo Black Edition</p>
                      <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                    </div>

                  </div>
                </div>
              </div> -->
              <!-- <div class="col-sm-3">
                <div class="product-image-wrapper">
                  <div class="single-products">
                    <div class="productinfo text-center">
                      <img src="{{asset('images/home/gallery3.jpg')}}" alt="" />
                      <h2>$56</h2>
                      <p>Easy Polo Black Edition</p>
                      <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                    </div>

                  </div>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="product-image-wrapper">
                  <div class="single-products">
                    <div class="productinfo text-center">
                      <img src="{{asset('images/home/gallery4.jpg')}}" alt="" />
                      <h2>$56</h2>
                      <p>Easy Polo Black Edition</p>
                      <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                    </div>

                  </div>
                </div>
              </div> -->
            </div>

            <div class="tab-pane fade" id="blazers">
              <div class="col-sm-3">
                <div class="product-image-wrapper">
                  <div class="single-products">
                    <div class="productinfo text-center">
                      <img src="{{asset('images/home/gallery4.jpg')}}" alt="" />
                      <h2>$56</h2>
                      <p>Easy Polo Black Edition</p>
                      <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                    </div>

                  </div>
                </div>
              </div>
              <!-- <div class="col-sm-3">
                <div class="product-image-wrapper">
                  <div class="single-products">
                    <div class="productinfo text-center">
                      <img src="{{asset('images/home/gallery3.jpg')}}" alt="" />
                      <h2>$56</h2>
                      <p>Easy Polo Black Edition</p>
                      <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                    </div>

                  </div>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="product-image-wrapper">
                  <div class="single-products">
                    <div class="productinfo text-center">
                      <img src="{{asset('images/home/gallery2.jpg')}}" alt="" />
                      <h2>$56</h2>
                      <p>Easy Polo Black Edition</p>
                      <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                    </div>

                  </div>
                </div>
              </div> -->
              <!-- <div class="col-sm-3">
                <div class="product-image-wrapper">
                  <div class="single-products">
                    <div class="productinfo text-center">
                      <img src="{{asset('images/home/gallery1.jpg')}}" alt="" />
                      <h2>$56</h2>
                      <p>Easy Polo Black Edition</p>
                      <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                    </div>

                  </div>
                </div>
              </div> -->
            </div>

            <div class="tab-pane fade" id="sunglass">
              <div class="col-sm-3">
                <div class="product-image-wrapper">
                  <div class="single-products">
                    <div class="productinfo text-center">
                      <img src="{{asset('images/home/gallery3.jpg')}}" alt="" />
                      <h2>$56</h2>
                      <p>Easy Polo Black Edition</p>
                      <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                    </div>

                  </div>
                </div>
              </div>
              <!-- <div class="col-sm-3">
                <div class="product-image-wrapper">
                  <div class="single-products">
                    <div class="productinfo text-center">
                      <img src="{{asset('images/home/gallery4.jpg')}}" alt="" />
                      <h2>$56</h2>
                      <p>Easy Polo Black Edition</p>
                      <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                    </div>

                  </div>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="product-image-wrapper">
                  <div class="single-products">
                    <div class="productinfo text-center">
                      <img src="{{asset('images/home/gallery1.jpg')}}" alt="" />
                      <h2>$56</h2>
                      <p>Easy Polo Black Edition</p>
                      <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                    </div>

                  </div>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="product-image-wrapper">
                  <div class="single-products">
                    <div class="productinfo text-center">
                      <img src="{{asset('images/home/gallery2.jpg')}}" alt="" />
                      <h2>$56</h2>
                      <p>Easy Polo Black Edition</p>
                      <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                    </div>

                  </div>
                </div>
              </div> -->
            </div>

            <div class="tab-pane fade" id="kids">
              <div class="col-sm-3">
                <div class="product-image-wrapper">
                  <div class="single-products">
                    <div class="productinfo text-center">
                      <img src="{{asset('images/home/gallery1.jpg')}}" alt="" />
                      <h2>$56</h2>
                      <p>Easy Polo Black Edition</p>
                      <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                    </div>

                  </div>
                </div>
              </div>
              <!-- <div class="col-sm-3">
                <div class="product-image-wrapper">
                  <div class="single-products">
                    <div class="productinfo text-center">
                      <img src="{{asset('images/home/gallery2.jpg')}}" alt="" />
                      <h2>$56</h2>
                      <p>Easy Polo Black Edition</p>
                      <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                    </div>

                  </div>
                </div>
              </div> -->
              <!-- <div class="col-sm-3">
                <div class="product-image-wrapper">
                  <div class="single-products">
                    <div class="productinfo text-center">
                      <img src="{{asset('images/home/gallery3.jpg')}}" alt="" />
                      <h2>$56</h2>
                      <p>Easy Polo Black Edition</p>
                      <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                    </div>

                  </div>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="product-image-wrapper">
                  <div class="single-products">
                    <div class="productinfo text-center">
                      <img src="{{asset('images/home/gallery4.jpg')}}" alt="" />
                      <h2>$56</h2>
                      <p>Easy Polo Black Edition</p>
                      <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                    </div>

                  </div>
                </div>
              </div> -->
            </div>

            <div class="tab-pane fade" id="poloshirt">
              <div class="col-sm-3">
                <div class="product-image-wrapper">
                  <div class="single-products">
                    <div class="productinfo text-center">
                      <img src="{{asset('images/home/gallery2.jpg')}}" alt="" />
                      <h2>$56</h2>
                      <p>Easy Polo Black Edition</p>
                      <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                    </div>

                  </div>
                </div>
              </div>
              <!-- <div class="col-sm-3">
                <div class="product-image-wrapper">
                  <div class="single-products">
                    <div class="productinfo text-center">
                      <img src="{{asset('images/home/gallery4.jpg')}}" alt="" />
                      <h2>$56</h2>
                      <p>Easy Polo Black Edition</p>
                      <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                    </div>

                  </div>
                </div>
              </div> -->
              <!-- <div class="col-sm-3">
                <div class="product-image-wrapper">
                  <div class="single-products">
                    <div class="productinfo text-center">
                      <img src="{{asset('images/home/gallery3.jpg')}}" alt="" />
                      <h2>$56</h2>
                      <p>Easy Polo Black Edition</p>
                      <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                    </div>

                  </div>
                </div>
              </div> -->
              <div class="col-sm-3">
                <div class="product-image-wrapper">
                  <div class="single-products">
                    <div class="productinfo text-center">
                      <img src="{{asset('images/home/gallery1.jpg')}}" alt="" />
                      <h2>$56</h2>
                      <p>Easy Polo Black Edition</p>
                      <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--/category-tab-->

        <div class="recommended_items">
          <!--recommended_items-->
          <h2 class="title text-center">recommended items</h2>

          <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="item active">
                <div class="col-sm-4">
                  <div class="product-image-wrapper">
                    <div class="single-products">
                      <div class="productinfo text-center">
                        <img src="{{asset('images/home/recommend1.jpg')}}" alt="" />
                        <h2>$56</h2>
                        <p>Easy Polo Black Edition</p>
                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                      </div>

                    </div>
                  </div>
                </div>
                <!-- <div class="col-sm-4">
                  <div class="product-image-wrapper">
                    <div class="single-products">
                      <div class="productinfo text-center">
                        <img src="{{asset('images/home/recommend2.jpg')}}" alt="" />
                        <h2>$56</h2>
                        <p>Easy Polo Black Edition</p>
                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                      </div>

                    </div>
                  </div>
                </div> -->
                <!-- <div class="col-sm-4">
                  <div class="product-image-wrapper">
                    <div class="single-products">
                      <div class="productinfo text-center">
                        <img src="{{asset('images/home/recommend3.jpg')}}" alt="" />
                        <h2>$56</h2>
                        <p>Easy Polo Black Edition</p>
                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                      </div>

                    </div>
                  </div>
                </div> -->
              </div>
              <div class="item">
                <!-- <div class="col-sm-4">
                  <div class="product-image-wrapper">
                    <div class="single-products">
                      <div class="productinfo text-center">
                        <img src="{{asset('images/home/recommend1.jpg')}}" alt="" />
                        <h2>$56</h2>
                        <p>Easy Polo Black Edition</p>
                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                      </div>

                    </div>
                  </div>
                </div> -->
                <!-- <div class="col-sm-4">
                  <div class="product-image-wrapper">
                    <div class="single-products">
                      <div class="productinfo text-center">
                        <img src="{{asset('images/home/recommend2.jpg')}}" alt="" />
                        <h2>$56</h2>
                        <p>Easy Polo Black Edition</p>
                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                      </div>

                    </div>
                  </div>
                </div> -->
                <!-- <div class="col-sm-4">
                  <div class="product-image-wrapper">
                    <div class="single-products">
                      <div class="productinfo text-center">
                        <img src="{{asset('images/home/recommend3.jpg')}}" alt="" />
                        <h2>$56</h2>
                        <p>Easy Polo Black Edition</p>
                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                      </div>

                    </div>
                  </div>
                </div> -->
              </div>
            </div>
            <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
              <i class="fa fa-angle-left"></i>
            </a>
            <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
              <i class="fa fa-angle-right"></i>
            </a>
          </div>
        </div>
        <!--/recommended_items-->

      </div>
    </div>
  </div>
</section>

@endsection