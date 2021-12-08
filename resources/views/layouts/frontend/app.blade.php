<!DOCTYPE html>
<html lang="en">
<head>
  @include('layouts.frontend.partials.head')
  @livewireStyles
  @toastr_css
</head>
<body class="bg-light">

<!-- loader start -->
<div class="loader-wrapper">
  <div>
    <img src="assets/frontend/images/loader.gif" alt="loader">
  </div>
</div>
<!-- loader end -->

<!--header start-->
@include('layouts.frontend.partials.header')
<!--header end-->

@if(isset($slot))
  {{ $slot }}
@else
  @yield('content')
@endif


<!-- footer start -->
@include('layouts.frontend.partials.footer')
<!-- footer end -->






<!-- Add to cart bar -->
<div id="cart_side" class="add_to_cart top ">
  <a href="javascript:void(0)" class="overlay" onclick="closeCart()"></a>
  <div class="cart-inner">
    <div class="cart_top">
      <h3>my cart</h3>
      <div class="close-cart">
        <a href="javascript:void(0)" onclick="closeCart()">
          <i class="fa fa-times" aria-hidden="true"></i>
        </a>
      </div>
    </div>
    <div class="cart_media">
      <ul class="cart_product">
        <li>
          <div class="media">
            <a href="product-page(left-sidebar).html">
              <img alt="megastore1" class="me-3" src="assets/frontend/images/layout-2/product/1.jpg">
            </a>
            <div class="media-body">
              <a href="product-page(left-sidebar).html">
                <h4>redmi not 3</h4>
              </a>
              <h6>
                $80.00 <span>$120.00</span>
              </h6>
              <div class="addit-box">
                <div class="qty-box">
                  <div class="input-group">
                    <button class="qty-minus"></button>
                    <input class="qty-adj form-control" type="number" value="1"/>
                    <button class="qty-plus"></button>
                  </div>
                </div>
                <div class="pro-add">
                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#edit-product" >
                    <i data-feather="edit"></i>
                  </a>
                  <a href="javascript:void(0)">
                    <i  data-feather="trash-2"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li>
          <div class="media">
            <a href="product-page(left-sidebar).html">
              <img alt="megastore1" class="me-3" src="assets/frontend/images/layout-2/product/2.jpg">
            </a>
            <div class="media-body">
              <a href="product-page(left-sidebar).html">
                <h4>Double Door Refrigerator</h4>
              </a>
              <h6>
                $80.00 <span>$120.00</span>
              </h6>
              <div class="addit-box">
                <div class="qty-box">
                  <div class="input-group">
                    <button class="qty-minus"></button>
                    <input class="qty-adj form-control" type="number" value="1"/>
                    <button class="qty-plus"></button>
                  </div>
                </div>
                <div class="pro-add">
                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#edit-product" >
                    <i data-feather="edit"></i>
                  </a>
                  <a href="javascript:void(0)">
                    <i  data-feather="trash-2"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li>
          <div class="media">
            <a href="product-page(left-sidebar).html">
              <img alt="megastore1" class="me-3" src="assets/frontend/images/layout-2/product/3.jpg">
            </a>
            <div class="media-body">
              <a href="product-page(left-sidebar).html">
                <h4>woman hande bag</h4>
              </a>
              <h6>
                $80.00 <span>$120.00</span>
              </h6>
              <div class="addit-box">
                <div class="qty-box">
                  <div class="input-group">
                    <button class="qty-minus"></button>
                    <input class="qty-adj form-control" type="number" value="1"/>
                    <button class="qty-plus"></button>
                  </div>
                </div>
                <div class="pro-add">
                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#edit-product" >
                    <i data-feather="edit"></i>
                  </a>
                  <a href="javascript:void(0)">
                    <i  data-feather="trash-2"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </li>
      </ul>
      <ul class="cart_total">
        <li>
          subtotal : <span>$1050.00</span>
        </li>
        <li>
          shpping <span>free</span>
        </li>
        <li>
          taxes <span>$0.00</span>
        </li>
        <li>
          <div class="total">
            total<span>$1050.00</span>
          </div>
        </li>
        <li>
          <div class="buttons">
            <a href="cart.html" class="btn btn-solid btn-sm">view cart</a>
            <a href="checkout.html" class="btn btn-solid btn-sm ">checkout</a>
          </div>
        </li>
      </ul>
    </div>
  </div>
</div>
<!-- Add to cart bar end-->

<!-- wishlistbar bar -->
<div id="wishlist_side" class="add_to_cart right ">
  <a href="javascript:void(0)" class="overlay"  onclick="closeWishlist()"></a>
  <div class="cart-inner">
    <div class="cart_top">
      <h3>my wishlist</h3>
      <div class="close-cart">
        <a href="javascript:void(0)" onclick="closeWishlist()">
          <i class="fa fa-times" aria-hidden="true"></i>
        </a>
      </div>
    </div>
    <div class="cart_media">
      <ul class="cart_product">
        <li>
          <div class="media">
            <a href="product-page(left-sidebar).html">
              <img alt="megastore1" class="me-3" src="assets/frontend/images/layout-2/product/1.jpg">
            </a>
            <div class="media-body">
              <a href="product-page(left-sidebar).html">
                <h4>redmi not 3</h4>
              </a>
              <h6>
                $80.00 <span>$120.00</span>
              </h6>
              <div class="addit-box">
                <div class="qty-box">
                  <div class="input-group">
                    <button class="qty-minus"></button>
                    <input class="qty-adj form-control" type="number" value="1"/>
                    <button class="qty-plus"></button>
                  </div>
                </div>
                <div class="pro-add">
                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#edit-product" >
                    <i data-feather="edit"></i>
                  </a>
                  <a href="javascript:void(0)">
                    <i  data-feather="trash-2"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li>
          <div class="media">
            <a href="product-page(left-sidebar).html">
              <img alt="megastore1" class="me-3" src="assets/frontend/images/layout-2/product/2.jpg">
            </a>
            <div class="media-body">
              <a href="product-page(left-sidebar).html">
                <h4>Double Door Refrigerator</h4>
              </a>
              <h6>
                $80.00 <span>$120.00</span>
              </h6>
              <div class="addit-box">
                <div class="qty-box">
                  <div class="input-group">
                    <button class="qty-minus"></button>
                    <input class="qty-adj form-control" type="number" value="1"/>
                    <button class="qty-plus"></button>
                  </div>
                </div>
                <div class="pro-add">
                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#edit-product" >
                    <i data-feather="edit"></i>
                  </a>
                  <a href="javascript:void(0)">
                    <i  data-feather="trash-2"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li>
          <div class="media">
            <a href="product-page(left-sidebar).html">
              <img alt="megastore1" class="me-3" src="assets/frontend/images/layout-2/product/3.jpg">
            </a>
            <div class="media-body">
              <a href="product-page(left-sidebar).html">
                <h4>woman hande bag</h4>
              </a>
              <h6>
                $80.00 <span>$120.00</span>
              </h6>
              <div class="addit-box">
                <div class="qty-box">
                  <div class="input-group">
                    <button class="qty-minus"></button>
                    <input class="qty-adj form-control" type="number" value="1"/>
                    <button class="qty-plus"></button>
                  </div>
                </div>
                <div class="pro-add">
                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#edit-product" >
                    <i data-feather="edit"></i>
                  </a>
                  <a href="javascript:void(0)">
                    <i  data-feather="trash-2"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </li>
      </ul>
      <ul class="cart_total">
        <li>
          subtotal : <span>$1050.00</span>
        </li>
        <li>
          shpping <span>free</span>
        </li>
        <li>
          taxes <span>$0.00</span>
        </li>
        <li>
          <div class="total">
            total<span>$1050.00</span>
          </div>
        </li>
        <li>
          <div class="buttons">
            <a href="wishlist.html" class="btn btn-solid btn-block btn-md">view wislist</a>
          </div>
        </li>
      </ul>
    </div>
  </div>
</div>
<!-- wishlistbar bar end-->

<!-- My account bar start-->
<div id="myAccount" class="add_to_cart right account-bar">
  <a href="javascript:void(0)" class="overlay" onclick="closeAccount()"></a>
  <div class="cart-inner">
    <div class="cart_top">
      <h3>my account</h3>
      <div class="close-cart">
        <a href="javascript:void(0)" onclick="closeAccount()">
          <i class="fa fa-times" aria-hidden="true"></i>
        </a>
      </div>
    </div>
    <form class="theme-form">
      <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control" id="email" placeholder="Email" required="">
      </div>
      <div class="form-group">
        <label for="review">Password</label>
        <input type="password" class="form-control" id="review" placeholder="Enter your password" required="">
      </div>
      <div class="form-group">
        <a href="javascript:void(0)" class="btn btn-solid btn-md btn-block ">Login</a>
      </div>
      <div class="accout-fwd">
        <a href="forget-pwd.html" class="d-block"><h5>forget password?</h5></a>
        <a href="register.html" class="d-block"><h6 >you have no account ?<span>signup now</span></h6></a>
      </div>
    </form>
  </div>
</div>
<!-- Add to account bar end-->

<!-- cookie bar start -->
@include('layouts.frontend.partials.cookie')
<!-- cookie bar end -->

<!-- notification product -->
@include('layouts.frontend.partials.notification')
<!-- notification product -->
@include('layouts.frontend.partials.foot')

@livewireScripts
{{-- @jquery --}}
@toastr_js
@toastr_render

<script>
    window.addEventListener('alert', event => { 
                 toastr[event.detail.type](event.detail.message, 
                 event.detail.title ?? ''), toastr.options = {
                        "closeButton": true,
                        "progressBar": true,
                    }
                });
    </script>
</body>
</html>
