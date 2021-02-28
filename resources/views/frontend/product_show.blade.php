@extends('frontend.layout')

@section('title'){{$product->title}} | Laravel Ecommerce

@endsection

@section('contents')

@include('frontend.sidebar')
<div class="col-sm-9 padding-right">
  <div class="product-details">
    <div class="col-sm-5">
      @php $i=1;
      @endphp
      @foreach($product->images as $img)
      @if($i > 0)
      <div class="view-product {{$i == 1 ? 'active':''}}">
        <img src="{{asset('public/images/home/'.$img->image)}}" style="width:61%" alt="" />
        <h3>ZOOM</h3>
      </div>
      @endif
      @php
      $i--;
      @endphp
      @endforeach
      <div id="similar-product" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          @php $i=1;
          @endphp
          @foreach($product->images as $img)
          <div class="item {{$i == 1 ? 'active':''}}" style="padding-left:121px;">
            <img src="{{asset('public/images/home/'.$img->image)}}" width="100" alt="" />
          </div>
          @php
          $i++;
          @endphp
          @endforeach
        </div>

        <!-- Controls -->
        <a class="left item-control" href="#similar-product" data-slide="prev">
          <i class="fa fa-angle-left"></i>
        </a>
        <a class="right item-control" href="#similar-product" data-slide="next">
          <i class="fa fa-angle-right"></i>
        </a>
      </div>

    </div>
    <div class="col-sm-7">
      <div class="product-information">
        <!--/product-information-->
        <img src="images/product-details/new.jpg" class="newarrival" alt="" />
        <h2>{{$product->title}} in <mark>{{$product->category->name}} Category</mark></h2>
        <h4>Brand : <mark>{{$product->brand->name}}</mark></h4>
        <p>Web ID: 1089772</p>
        <img src="images/product-details/rating.png" alt="" />
        <span>
          <span>&#8377;{{$product->price}}</span>
          <label>Quantity:</label>
          <input type="text" value="3" />
          <button type="button" class="btn btn-fefault cart">
            <i class="fa fa-shopping-cart"></i>
            Add to cart
          </button>
        </span>

        <p><b>Availability:</b>{{$product->quantity < 1 ? 'No Item is Available' : $product->quantity.'Item In Stock'}}</p>
        <p><b>Condition:</b> New</p>
        <!-- <p><b>Offer Price:&#8377;{{$product->offer_price}}</b></p> -->
        <p><b>Description : {{$product->description}}</b></p>
        <a href=""><img src="images/product-details/share.png" class="share img-responsive" alt="" /></a>
      </div>
      <!--/product-information-->
    </div>
  </div>
  <!--/product-details-->

  <div class="category-tab shop-details-tab">
    <!--category-tab-->
    <div class="col-sm-12">
      <ul class="nav nav-tabs">
        <li><a href="#details" data-toggle="tab">Details</a></li>
        <li><a href="#companyprofile" data-toggle="tab">Company Profile</a></li>
        <li><a href="#tag" data-toggle="tab">Tag</a></li>
        <li class="active"><a href="#reviews" data-toggle="tab">Reviews (5)</a></li>
      </ul>
    </div>
    <div class="tab-content">
      <div class="tab-pane fade" id="details">
        <div class="col-sm-3">
          <div class="product-image-wrapper">
            <div class="single-products">
              <div class="productinfo text-center">
                <img src="images/home/gallery1.jpg" alt="" />
                <h2>$56</h2>
                <p>Easy Polo Black Edition</p>
                <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="product-image-wrapper">
            <div class="single-products">
              <div class="productinfo text-center">
                <img src="images/home/gallery2.jpg" alt="" />
                <h2>$56</h2>
                <p>Easy Polo Black Edition</p>
                <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="product-image-wrapper">
            <div class="single-products">
              <div class="productinfo text-center">
                <img src="images/home/gallery3.jpg" alt="" />
                <h2>$56</h2>
                <p>Easy Polo Black Edition</p>
                <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="product-image-wrapper">
            <div class="single-products">
              <div class="productinfo text-center">
                <img src="images/home/gallery4.jpg" alt="" />
                <h2>$56</h2>
                <p>Easy Polo Black Edition</p>
                <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="tab-pane fade" id="companyprofile">
        <div class="col-sm-3">
          <div class="product-image-wrapper">
            <div class="single-products">
              <div class="productinfo text-center">
                <img src="images/home/gallery1.jpg" alt="" />
                <h2>$56</h2>
                <p>Easy Polo Black Edition</p>
                <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="product-image-wrapper">
            <div class="single-products">
              <div class="productinfo text-center">
                <img src="images/home/gallery3.jpg" alt="" />
                <h2>$56</h2>
                <p>Easy Polo Black Edition</p>
                <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="product-image-wrapper">
            <div class="single-products">
              <div class="productinfo text-center">
                <img src="images/home/gallery2.jpg" alt="" />
                <h2>$56</h2>
                <p>Easy Polo Black Edition</p>
                <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="product-image-wrapper">
            <div class="single-products">
              <div class="productinfo text-center">
                <img src="images/home/gallery4.jpg" alt="" />
                <h2>$56</h2>
                <p>Easy Polo Black Edition</p>
                <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="tab-pane fade" id="tag">
        <div class="col-sm-3">
          <div class="product-image-wrapper">
            <div class="single-products">
              <div class="productinfo text-center">
                <img src="images/home/gallery1.jpg" alt="" />
                <h2>$56</h2>
                <p>Easy Polo Black Edition</p>
                <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="product-image-wrapper">
            <div class="single-products">
              <div class="productinfo text-center">
                <img src="images/home/gallery2.jpg" alt="" />
                <h2>$56</h2>
                <p>Easy Polo Black Edition</p>
                <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="product-image-wrapper">
            <div class="single-products">
              <div class="productinfo text-center">
                <img src="images/home/gallery3.jpg" alt="" />
                <h2>$56</h2>
                <p>Easy Polo Black Edition</p>
                <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="product-image-wrapper">
            <div class="single-products">
              <div class="productinfo text-center">
                <img src="images/home/gallery4.jpg" alt="" />
                <h2>$56</h2>
                <p>Easy Polo Black Edition</p>
                <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="tab-pane fade active in" id="reviews">
        <div class="col-sm-12">
          <ul>
            <li><a href=""><i class="fa fa-user"></i>EUGEN</a></li>
            <li><a href=""><i class="fa fa-clock-o"></i>12:41 PM</a></li>
            <li><a href=""><i class="fa fa-calendar-o"></i>31 DEC 2014</a></li>
          </ul>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
          <p><b>Write Your Review</b></p>
        </div>
      </div>

    </div>
  </div>
  <!--/category-tab-->

</div>

@endsection