<div>
    <!--slider start-->
    <section class="theme-slider home-slide b-g-white " id="home-slide">
        <div class="custom-container">
            <div class="row">
                <div class="col">
                    <div class="slide-1 no-arrow">
                        <div>
                            <div class="slider-banner p-center slide-banner-1">
                                <div class="slider-img">
                                    <ul class="layout1-slide-1">
                                        <li id="img-1"><img src="assets/frontend/images/layout-2/slider/1.1.png" class="img-fluid" alt="slider"></li>
                                        <li id="img-2" class="slide-center"><img src="assets/frontend/images/layout-2/slider/1.2.png" class="img-fluid" alt="slider"></li>
                                    </ul>
                                </div>
                                <div class="slider-banner-contain">
                                    <div>
                                        <h1>mi<span>Mobile</span></h1>
                                        <h4>fast and light</h4>
                                        <h2>Pixel Perfect Deal Camera</h2>
                                        <a href="product-page(left-sidebar).html" class="btn btn-normal">
                                            Shop Now
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="slider-banner p-center slide-banner-1">
                                <div class="slider-img">
                                    <ul class="layout1-slide-2">
                                        <li id="img-3" class="slide-center"><img src="assets/frontend/images/layout-2/slider/2.1.png" class="img-fluid" alt="slider"></li>
                                        <li id="img-4" class="slide-center"><img src="assets/frontend/images/layout-2/slider/2.2.png" class="img-fluid" alt="slider"></li>
                                    </ul>
                                </div>
                                <div class="slider-banner-contain">
                                    <div>
                                        <h1>big<span>Sale</span></h1>
                                        <h4>now start at $99</h4>
                                        <h2>50% off</h2>
                                        <a href="product-page(left-sidebar).html" class="btn btn-normal">
                                            Shop Now
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="slider-banner p-center slide-banner-1">
                                <div class="slider-img">
                                    <ul class="layout1-slide-3">
                                        <li id="img-5"><img src="assets/frontend/images/layout-2/slider/3.2.png" class="img-fluid" alt="slider"></li>
                                        <li id="img-6" class="slide-center"><img src="assets/frontend/images/layout-2/slider/3.1.png" class="img-fluid" alt="slider"></li>
                                    </ul>
                                </div>
                                <div class="slider-banner-contain">
                                    <div>
                                        <h1>camera<span>Sale</span></h1>
                                        <h4>now start at $79</h4>
                                        <h2>70% off today</h2>
                                        <a href="product-page(left-sidebar).html" class="btn btn-normal">
                                            Shop Now
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--slider end-->

    <!--collection banner start-->
    <section class="collection-banner section-pt-space b-g-white ">
        <div class="custom-container">
            <div class="row collection2">
                <div class="col-md-4">
                    <div class="collection-banner-main banner-1  p-right">
                        <div class="collection-img">
                            <img src="assets/frontend/images/layout-2/collection-banner/1.jpg" class="img-fluid bg-img  " alt="banner">
                        </div>
                        <div class="collection-banner-contain">
                            <div>
                                <h3>women</h3>
                                <h4>fashion</h4>
                                <div class="shop">
                                    <a href="product-page(left-sidebar).html">
                                        shop now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="collection-banner-main banner-1 p-right">
                        <div class="collection-img">
                            <img src="assets/frontend/images/layout-2/collection-banner/2.jpg" class="img-fluid bg-img  " alt="banner">
                        </div>
                        <div class="collection-banner-contain ">
                            <div>
                                <h3>camera</h3>
                                <h4>lenses</h4>
                                <div class="shop">
                                    <a href="product-page(left-sidebar).html">
                                        shop now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="collection-banner-main banner-1 p-right">
                        <div class="collection-img">
                            <img src="assets/frontend/images/layout-2/collection-banner/3.jpg" class="img-fluid bg-img  " alt="banner">
                        </div>
                        <div class="collection-banner-contain ">
                            <div>
                                <h3>refrigerator</h3>
                                <h4>lG mini</h4>
                                <div class="shop">
                                    <a href="product-page(left-sidebar).html">
                                        shop now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--collection banner end-->

    <!--discount banner start-->
    <section class="discount-banner">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="discount-banner-contain">
                        <h2>Discount on every single item on our site.</h2>
                        <h1><span>OMG! Just Look at the</span> <span>great Deals!</span></h1>
                        <div class="rounded-contain rounded-inverse">
                            <div class="rounded-subcontain">
                                How does it feel, when you see great discount deals for each product?
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--discount banner end-->

    <!--Category tab product-->
    <section class="section-pt-space">
        <div class="tab-product-main">
            <div class="tab-prodcut-contain">
                <ul class="tabs tab-title">
                    <li class="current"><a href="product-all">All</a></li>
                    @foreach ($priduct_categories as $priduct_category)
                    <li class=""><a href="product-category-{{ $loop->iteration }}">{{ $priduct_category->name }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>
    <!--tab product-->

    <!-- products tab  -->
    <section class="section-py-space ratio_square product">
        <div class="custom-container">
            <div class="row">
                <div class="col pr-0">
                    <div class="theme-tab product mb--5">
                        <div class="tab-content-cls ">
                            <div id="product-all" class="tab-content active default">
                                <div class="custom-container">
                                    <div class="row product-block4">
                                        @foreach ($products as $product)
                                        <div class="col-lg-3 col-md-4 col-sm-6">
                                            <div class="product-box">
                                                <div class="product-imgbox">
                                                    <div class="product-front">
                                                        <a href="product-page(left-sidebar).html">
                                                            <img src="assets/frontend/images/layout-2/product/1.jpg" class="innerzoom" alt="deal-banner">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-detail detail-center detail-inverse">
                                                    <div class="detail-title">
                                                        <div class="detail-left">
                                                            <a href="product-page(left-sidebar).html">
                                                                <h6 class="price-title">
                                                                    {{ $product->name }}
                                                                </h6>
                                                            </a>
                                                        </div>
                                                        <div class="detail-right">
                                                            {{-- <div class="check-price"> {{ $product->price }} </div> --}}
                                                            <div class="price">
                                                                <div class="price">BDT {{ $product->price }} </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="icon-detail">
                                                        <button class="tooltip-top add-cartnoty" data-tippy-content="Add to cart"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart">
                                                                <circle cx="9" cy="21" r="1"></circle>
                                                                <circle cx="20" cy="21" r="1"></circle>
                                                                <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                                                            </svg> </button>
                                                        <a href="javascript:void(0)" class="add-to-wish tooltip-top" data-tippy-content="Add to Wishlist"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart">
                                                                <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                                                            </svg> </a>
                                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top" data-tippy-content="Quick View"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                                <circle cx="12" cy="12" r="3"></circle>
                                                            </svg> </a>
                                                        <a href="compare.html" class="tooltip-top" data-tippy-content="Compare"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-refresh-cw">
                                                                <polyline points="23 4 23 10 17 10"></polyline>
                                                                <polyline points="1 20 1 14 7 14"></polyline>
                                                                <path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"></path>
                                                            </svg> </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            @foreach ($priduct_categories as $priduct_category)
                            <div id="product-category-{{ $loop->iteration }}" class="tab-content">
                                <div class="custom-container">
                                    <div class="row product-block4">
                                        @foreach ($priduct_category->onlineProducts as $product)
                                        <div class="col-lg-3 col-md-4 col-sm-6">
                                            <div class="product-box">
                                                <div class="product-imgbox">
                                                    <div class="product-front">
                                                        <a href="product-page(left-sidebar).html">
                                                            <img src="assets/frontend/images/layout-2/product/1.jpg" class="innerzoom" alt="deal-banner">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-detail detail-center detail-inverse">
                                                    <div class="detail-title">
                                                        <div class="detail-left">
                                                            <a href="product-page(left-sidebar).html">
                                                                <h6 class="price-title">
                                                                    {{ $product->name }}
                                                                </h6>
                                                            </a>
                                                        </div>
                                                        <div class="detail-right">
                                                            {{-- <div class="check-price"> {{ $product->price }} </div> --}}
                                                            <div class="price">
                                                                <div class="price">BDT {{ $product->price }} </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="icon-detail">
                                                        <button class="tooltip-top add-cartnoty" data-tippy-content="Add to cart"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart">
                                                                <circle cx="9" cy="21" r="1"></circle>
                                                                <circle cx="20" cy="21" r="1"></circle>
                                                                <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                                                            </svg> </button>
                                                        <a href="javascript:void(0)" class="add-to-wish tooltip-top" data-tippy-content="Add to Wishlist"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart">
                                                                <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                                                            </svg> </a>
                                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top" data-tippy-content="Quick View"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                                <circle cx="12" cy="12" r="3"></circle>
                                                            </svg> </a>
                                                        <a href="compare.html" class="tooltip-top" data-tippy-content="Compare"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-refresh-cw">
                                                                <polyline points="23 4 23 10 17 10"></polyline>
                                                                <polyline points="1 20 1 14 7 14"></polyline>
                                                                <path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"></path>
                                                            </svg> </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- category wise tab end -->

    <!--title start-->
    <div class="title1 section-my-space">
        <h4>Testimonials</h4>
    </div>
    <!--title end-->

    <!--testimonial start-->
    <section class="testimonial testimonial-inverse">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="slide-1 no-arrow">
                        <div>
                            <div class="testimonial-contain">
                                <div class="media">
                                    <div class="testimonial-img">
                                        <img src="assets/frontend/images/testimonial/1.jpg" class="img-fluid rounded-circle  " alt="testimonial">
                                    </div>
                                    <div class="media-body">
                                        <h5>mark jecno</h5>
                                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="testimonial-contain">
                                <div class="media">
                                    <div class="testimonial-img">
                                        <img src="assets/frontend/images/testimonial/2.jpg" class="img-fluid rounded-circle  " alt="testimonial">
                                    </div>
                                    <div class="media-body">
                                        <h5>mark jecno</h5>
                                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="testimonial-contain">
                                <div class="media">
                                    <div class="testimonial-img">
                                        <img src="assets/frontend/images/testimonial/3.jpg" class="img-fluid rounded-circle  " alt="testimonial">
                                    </div>
                                    <div class="media-body">
                                        <h5>mark jecno</h5>
                                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--testimonial end-->

    <!--instagram start-->
    <section class="instagram">
        <div class="container-fluid">
            <div class="row">
                <div class="col p-0 position-relative">
                    <div class="insta-contant1 ">
                        <div class="slide-7 no-arrow">
                            <div>
                                <div class="instagram-box">
                                    <img src="assets/frontend/images/insta/1.jpg" class="img-fluid  " alt="insta">
                                    <div class="insta-cover">
                                        <i class="fa fa-instagram"></i>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="instagram-box">
                                    <img src="assets/frontend/images/insta/2.jpg" class="img-fluid  " alt="insta">
                                    <div class="insta-cover">
                                        <i class="fa fa-instagram"></i>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="instagram-box">
                                    <img src="assets/frontend/images/insta/3.jpg" class="img-fluid  " alt="insta">
                                    <div class="insta-cover">
                                        <i class="fa fa-instagram"></i>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="instagram-box">
                                    <img src="assets/frontend/images/insta/4.jpg" class="img-fluid  " alt="insta">
                                    <div class="insta-cover">
                                        <i class="fa fa-instagram"></i>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="instagram-box">
                                    <img src="assets/frontend/images/insta/5.jpg" class="img-fluid  " alt="insta">
                                    <div class="insta-cover">
                                        <i class="fa fa-instagram"></i>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="instagram-box">
                                    <img src="assets/frontend/images/insta/6.jpg" class="img-fluid  " alt="insta">
                                    <div class="insta-cover">
                                        <i class="fa fa-instagram"></i>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="instagram-box">
                                    <img src="assets/frontend/images/insta/7.jpg" class="img-fluid  " alt="insta">
                                    <div class="insta-cover">
                                        <i class="fa fa-instagram"></i>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="instagram-box">
                                    <img src="assets/frontend/images/insta/8.jpg" class="img-fluid  " alt="insta">
                                    <div class="insta-cover">
                                        <i class="fa fa-instagram"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="insta-sub-contant1">
                            <div class="insta-title">
                                <h4><span>#</span>INSTAGRAM</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--instagra end-->
</div>
