@extends('frontEnd.layouts.app')

@section('content')
    <!-- banner section starts here -->
    <section class="banner">
        <div class="container">
            <div class="banner-slider">
                <div class="banner-slide-wrapper">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="banner-content-wrapper wow animate__animated animate__fadeInLeft">
                                <h5>Nutritions</h5>
                                <h1>Build Your Health
                                    With us</h1>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                    has been the industry's standard dummy text ever since the 1500s,Lorem Ipsum is simply
                                    dummy text of the printing and typesetting industry Lorem Ipsum has been the industry's.
                                </p>
                                <button onclick="location.href='about.php'" class="btn">Buy Now</button>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="banner-img-wrapper">
                                <figure>
                                    <img src="{{ asset('assets/img/banner-img.png') }}" class="wow animate__animated animate__zoomIn img-fluid"
                                        alt="">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner-slide-wrapper">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="banner-content-wrapper">
                                <h5>Nutritions</h5>
                                <h1>Build Your Health
                                    With us</h1>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                    has been the industry's standard dummy text ever since the 1500s,Lorem Ipsum is simply
                                    dummy text of the printing and typesetting industry Lorem Ipsum has been the industry's.
                                </p>
                                <button class="btn">Buy Now</button>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="banner-img-wrapper">
                                <figure>
                                    <img src="{{ asset('assets/img/banner-img.png') }}" class="img-fluid" alt="">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner-slide-wrapper">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="banner-content-wrapper">
                                <h5>Nutritions</h5>
                                <h1>Build Your Health
                                    With us</h1>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                    has been the industry's standard dummy text ever since the 1500s,Lorem Ipsum is simply
                                    dummy text of the printing and typesetting industry Lorem Ipsum has been the industry's.
                                </p>
                                <button class="btn">Buy Now</button>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="banner-img-wrapper">
                                <figure>
                                    <img src="{{ asset('assets/img/banner-img.png') }}" class="img-fluid" alt="">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- banner section ends here -->
    <!-- product-card section starts here -->
    <section class="product-card">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="product-card-slider">
                        <div class="product-card-wrapper">
                            <div class="product-card-img-wrapper">
                                <figure>
                                    <img src="{{ asset('assets/img/special-img.png') }}" alt="">
                                </figure>
                            </div>
                            <div class="product-card-content-wrapper">
                                <h6>Lorem ipsum</h6>
                                <span>2 Products</span>
                            </div>
                        </div>
                        <div class="product-card-wrapper">
                            <div class="product-card-img-wrapper">
                                <figure>
                                    <img src="{{ asset('assets/img/special-img.png') }}" alt="">
                                </figure>
                            </div>
                            <div class="product-card-content-wrapper">
                                <h6>Lorem ipsum</h6>
                                <span>2 Products</span>
                            </div>
                        </div>
                        <div class="product-card-wrapper">
                            <div class="product-card-img-wrapper">
                                <figure>
                                    <img src="{{ asset('assets/img/special-img.png') }}" alt="">
                                </figure>
                            </div>
                            <div class="product-card-content-wrapper">
                                <h6>Lorem ipsum</h6>
                                <span>2 Products</span>
                            </div>
                        </div>
                        <div class="product-card-wrapper">
                            <div class="product-card-img-wrapper">
                                <figure>
                                    <img src="{{ asset('assets/img/special-img.png') }}" alt="">
                                </figure>
                            </div>
                            <div class="product-card-content-wrapper">
                                <h6>Lorem ipsum</h6>
                                <span>2 Products</span>
                            </div>
                        </div>
                        <div class="product-card-wrapper">
                            <div class="product-card-img-wrapper">
                                <figure>
                                    <img src="{{ asset('assets/img/special-img.png') }}" alt="">
                                </figure>
                            </div>
                            <div class="product-card-content-wrapper">
                                <h6>Lorem ipsum</h6>
                                <span>2 Products</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product-card section ends here -->
    <!-- About us section starts here -->
    <section class="About-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-img-wrapper">
                        <figure>
                            <img src="{{ asset('assets/img/about-img.png') }}" class="img-fluid" alt="">
                        </figure>
                        <div class="call-btn">
                            <a href="tel:+123-456-789">
                                <img src="{{ asset('assets/img/call-btn.svg') }}" class="img-fluid" alt="">
                            </a>
                            <div class="content">
                                <h4>Call us Any Time</h4>
                                <h6>+123-456-789</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="content-wrapper">
                        <h6>About Us</h6>
                        <h2>Lorem Ipsum is simply dummy
                            text of the printing.</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. sum has been Lorem
                            Ipsum is simply dummy text of the printing </p>
                        <div class="about-quote-wrapper">
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting indu stry. Lorem Ipsum has
                                been Lorem Ipsum
                            </p>
                        </div>
                        <div class="john-wrapper">
                            <div class="profile-img-wrapper">
                                <figure>
                                    <img src="{{ asset('assets/img/john.png') }}" class="img-fluid" alt="">
                                </figure>
                            </div>
                            <div class="john-name-wrapper">
                                <h6>John Doe</h6>
                                <span>CEO and Founder</span>
                            </div>
                        </div>
                        <div class="about-tabs-wrapper">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home"
                                        role="tab" aria-controls="home" aria-selected="true">Our Mission</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile"
                                        role="tab" aria-controls="profile" aria-selected="false">Our Goal</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel"
                                    aria-labelledby="home-tab">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been Lorem Ipsum</p>
                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been Lorem Ipsum</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About us section ends here -->
    <!-- featured collection wrapper starts here-->
    <section class="featured-products">
        <div class="container">
            <div class="row pb-4">
                <div class="col-lg-12">
                    <div class="content-wrapper text-center">
                        <h2>Featured Collection</h2>
                    </div>
                </div>
            </div>
            <div class="row single-product-card">
                <div class="col-lg-3">
                    <div class="single-product-card-wrapper">
                        <div class="single-producrt-img-wrapper">
                            <figure>
                                <img src="{{ asset('assets/img/pro1.png') }}" class="img-fluid" alt="">
                            </figure>
                        </div>
                        <div class="single-product-content-wrapper">
                            <h6 class="single-product-category">Vitamins & Supplement</h6>
                            <h5 class="single-product-name">Lorem Ipsum is simply
                                dummy text</h5>
                            <div class="review-wrapper">
                                <ul>
                                    <li>
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <span class="total-reviews">
                                            ( 119 reviews )
                                        </span>
                                    </li>
                                </ul>
                            </div>
                            <div class="price-wrapper">
                                <h6 class="price">$ 49.00 <span class="regular-price">$ 55.00</span></h6>
                            </div>
                            <div class="cart-button-wrapper">
                                <a href="product-details.php" class="btn form-control"><i
                                        class="fa fa-shopping-cart"></i> Add To Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="single-product-card-wrapper">
                        <div class="single-producrt-img-wrapper">
                            <figure>
                                <img src="{{ asset('assets/img/pro2.png') }}" class="img-fluid" alt="">
                            </figure>
                        </div>
                        <div class="single-product-content-wrapper">
                            <h6 class="single-product-category">Herbs & Natural Remedies</h6>
                            <h5 class="single-product-name">Lorem Ipsum is simply
                                dummy text</h5>
                            <div class="review-wrapper">
                                <ul>
                                    <li>
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <span class="total-reviews">
                                            ( 119 reviews )
                                        </span>
                                    </li>
                                </ul>
                            </div>
                            <div class="price-wrapper">
                                <h6 class="price">$ 49.00 <span class="regular-price">$ 55.00</span></h6>
                            </div>
                            <div class="cart-button-wrapper">
                                <a href="" class="btn form-control"><i class="fa fa-shopping-cart"></i> Add To
                                    Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="single-product-card-wrapper">
                        <div class="single-producrt-img-wrapper">
                            <figure>
                                <img src="{{ asset('assets/img/pro3.png') }}" class="img-fluid" alt="">
                            </figure>
                        </div>
                        <div class="single-product-content-wrapper">
                            <h6 class="single-product-category">Sports Nutrition</h6>
                            <h5 class="single-product-name">Lorem Ipsum is simply
                                dummy text</h5>
                            <div class="review-wrapper">
                                <ul>
                                    <li>
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <span class="total-reviews">
                                            ( 119 reviews )
                                        </span>
                                    </li>
                                </ul>
                            </div>
                            <div class="price-wrapper">
                                <h6 class="price">$ 49.00 <span class="regular-price">$ 55.00</span></h6>
                            </div>
                            <div class="cart-button-wrapper">
                                <a href="" class="btn form-control"><i class="fa fa-shopping-cart"></i> Add To
                                    Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="single-product-card-wrapper">
                        <div class="single-producrt-img-wrapper">
                            <figure>
                                <img src="{{ asset('assets/img/pro4.png') }}" class="img-fluid" alt="">
                            </figure>
                        </div>
                        <div class="single-product-content-wrapper">
                            <h6 class="single-product-category">Food & Drink</h6>
                            <h5 class="single-product-name">Lorem Ipsum is simply
                                dummy text</h5>
                            <div class="review-wrapper">
                                <ul>
                                    <li>
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <span class="total-reviews">
                                            ( 119 reviews )
                                        </span>
                                    </li>
                                </ul>
                            </div>
                            <div class="price-wrapper">
                                <h6 class="price">$ 49.00 <span class="regular-price">$ 55.00</span></h6>
                            </div>
                            <div class="cart-button-wrapper">
                                <a href="" class="btn form-control"><i class="fa fa-shopping-cart"></i> Add To
                                    Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="single-product-card-wrapper">
                        <div class="single-producrt-img-wrapper">
                            <figure>
                                <img src="{{ asset('assets/img/pro1.png') }}" class="img-fluid" alt="">
                            </figure>
                        </div>
                        <div class="single-product-content-wrapper">
                            <h6 class="single-product-category">Vitamins & Supplement</h6>
                            <h5 class="single-product-name">Lorem Ipsum is simply
                                dummy text</h5>
                            <div class="review-wrapper">
                                <ul>
                                    <li>
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <span class="total-reviews">
                                            ( 119 reviews )
                                        </span>
                                    </li>
                                </ul>
                            </div>
                            <div class="price-wrapper">
                                <h6 class="price">$ 49.00 <span class="regular-price">$ 55.00</span></h6>
                            </div>
                            <div class="cart-button-wrapper">
                                <a href="" class="btn form-control"><i class="fa fa-shopping-cart"></i> Add To
                                    Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="single-product-card-wrapper">
                        <div class="single-producrt-img-wrapper">
                            <figure>
                                <img src="{{ asset('assets/img/pro2.png') }}" class="img-fluid" alt="">
                            </figure>
                        </div>
                        <div class="single-product-content-wrapper">
                            <h6 class="single-product-category">Herbs & Natural Remedies</h6>
                            <h5 class="single-product-name">Lorem Ipsum is simply
                                dummy text</h5>
                            <div class="review-wrapper">
                                <ul>
                                    <li>
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <span class="total-reviews">
                                            ( 119 reviews )
                                        </span>
                                    </li>
                                </ul>
                            </div>
                            <div class="price-wrapper">
                                <h6 class="price">$ 49.00 <span class="regular-price">$ 55.00</span></h6>
                            </div>
                            <div class="cart-button-wrapper">
                                <a href="" class="btn form-control"><i class="fa fa-shopping-cart"></i> Add To
                                    Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="single-product-card-wrapper">
                        <div class="single-producrt-img-wrapper">
                            <figure>
                                <img src="i{{ asset('assets/img/pro3.png') }}" class="img-fluid" alt="">
                            </figure>
                        </div>
                        <div class="single-product-content-wrapper">
                            <h6 class="single-product-category">Sports Nutrition</h6>
                            <h5 class="single-product-name">Lorem Ipsum is simply
                                dummy text</h5>
                            <div class="review-wrapper">
                                <ul>
                                    <li>
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <span class="total-reviews">
                                            ( 119 reviews )
                                        </span>
                                    </li>
                                </ul>
                            </div>
                            <div class="price-wrapper">
                                <h6 class="price">$ 49.00 <span class="regular-price">$ 55.00</span></h6>
                            </div>
                            <div class="cart-button-wrapper">
                                <a href="" class="btn form-control"><i class="fa fa-shopping-cart"></i> Add To
                                    Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="single-product-card-wrapper">
                        <div class="single-producrt-img-wrapper">
                            <figure>
                                <img src="{{ asset('assets/img/pro4.png') }}" class="img-fluid" alt="">
                            </figure>
                        </div>
                        <div class="single-product-content-wrapper">
                            <h6 class="single-product-category">Food & Drink</h6>
                            <h5 class="single-product-name">Lorem Ipsum is simply
                                dummy text</h5>
                            <div class="review-wrapper">
                                <ul>
                                    <li>
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <span class="total-reviews">
                                            ( 119 reviews )
                                        </span>
                                    </li>
                                </ul>
                            </div>
                            <div class="price-wrapper">
                                <h6 class="price">$ 49.00 <span class="regular-price">$ 55.00</span></h6>
                            </div>
                            <div class="cart-button-wrapper">
                                <a href="" class="btn form-control"><i class="fa fa-shopping-cart"></i> Add To
                                    Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- featured collection wrapper ends here-->
    <!-- winter section starts here -->
    <section class="winter-sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="winter-card-wrapper">
                        <div class="card-content-wrapper">
                            <h6>In Store Now</h6>
                            <h2>Get Set For
                                Winter</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <button class="btn">Buy Now</button>
                        </div>
                        <div class="card-img-wrapper">
                            <img src="{{ asset('assets/img/Get-Set-For-Winter-img.png') }}" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="sports-card-wrapper">
                        <div class="sport-content-wrapper">
                            <h6>Sports</h6>
                            <h2>Sports Nutritions <br>
                                $ Accessories</h2>
                            <a href="£" class="btn">Buy Now</a>
                        </div>
                        <div class="sports-img-wrapper">
                            <!-- <img src="img/sports-nutrition.png" class="img-fluid" alt=""> -->
                        </div>
                    </div>
                    <div class="sports-card-wrapper herb">
                        <div class="sports-img-wrapper">
                            <img src="{{ asset('assets/img/herbal-img.png') }}" class="img-fluid" alt="">
                        </div>
                        <div class="sport-content-wrapper">
                            <h6>New Product</h6>
                            <h2>Herbal healthy
                                Supplement</h2>
                            <a href="£" class="btn">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- winter section ends here -->
    <!-- Special Offer starts here -->
    <section class="special-offer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="content-wrapper text-center">
                        <h2>Special Offer</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="product-card-wrapper">
                        <div class="product-card-img-wrapper">
                            <figure>
                                <img src="{{ asset('assets/img/special-img.png') }}" alt="">
                            </figure>
                        </div>
                        <div class="product-card-content-wrapper">
                            <h6>Lorem Ipsum is simply
                                dummy text</h6>
                            <div class="rating">
                                <ul>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><span>( 119 reviews )</span></li>
                                </ul>
                                <span class="sale-price">$ 49.00</span> <span class="reg-price">$ 55.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="product-card-wrapper">
                        <div class="product-card-img-wrapper">
                            <figure>
                                <img src="{{ asset('assets/img/special-img.png') }}" alt="">
                            </figure>
                        </div>
                        <div class="product-card-content-wrapper">
                            <h6>Lorem Ipsum is simply
                                dummy text</h6>
                            <div class="rating">
                                <ul>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><span>( 119 reviews )</span></li>
                                </ul>
                                <span class="sale-price">$ 49.00</span> <span class="reg-price">$ 55.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="product-card-wrapper">
                        <div class="product-card-img-wrapper">
                            <figure>
                                <img src="{{ asset('assets/img/special-img.png') }}" alt="">
                            </figure>
                        </div>
                        <div class="product-card-content-wrapper">
                            <h6>Lorem Ipsum is simply
                                dummy text</h6>
                            <div class="rating">
                                <ul>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><span>( 119 reviews )</span></li>
                                </ul>
                                <span class="sale-price">$ 49.00</span> <span class="reg-price">$ 55.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="product-card-wrapper">
                        <div class="product-card-img-wrapper">
                            <figure>
                                <img src="{{ asset('assets/img/special-img.png') }}" alt="">
                            </figure>
                        </div>
                        <div class="product-card-content-wrapper">
                            <h6>Lorem Ipsum is simply
                                dummy text</h6>
                            <div class="rating">
                                <ul>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><span>( 119 reviews )</span></li>
                                </ul>
                                <span class="sale-price">$ 49.00</span> <span class="reg-price">$ 55.00</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="offer-bg-wrapper">
                        <figure>
                            <img src="{{ asset('assets/img/special-offer-main.png') }}" class="img-fluid" alt="">
                        </figure>
                    </div>
                    <div class="single-product-card-wrapper">
                        <h5 class="single-product-name">Lorem Ipsum is simply
                            dummy text</h5>
                        <div class="review-wrapper">
                            <ul>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <span class="total-reviews">
                                        ( 119 reviews )
                                    </span>
                                </li>
                            </ul>
                        </div>
                        <div class="price-wrapper">
                            <h6 class="price">$ 49.00 <span class="regular-price">$ 55.00</span></h6>
                        </div>
                        <div class="cart-button-wrappers">
                            <a href="" class="btn form-control"><img src="{{ asset('assets/img/angle-down.png') }}" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="product-card-wrapper">
                        <div class="product-card-img-wrapper">
                            <figure>
                                <img src="i{{ asset('assets/mg/special-img.png') }}" alt="">
                            </figure>
                        </div>
                        <div class="product-card-content-wrapper">
                            <h6>Lorem Ipsum is simply
                                dummy text</h6>
                            <div class="rating">
                                <ul>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><span>( 119 reviews )</span></li>
                                </ul>
                                <span class="sale-price">$ 49.00</span> <span class="reg-price">$ 55.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="product-card-wrapper">
                        <div class="product-card-img-wrapper">
                            <figure>
                                <img src="{{ asset('assets/img/special-img.png') }}" alt="">
                            </figure>
                        </div>
                        <div class="product-card-content-wrapper">
                            <h6>Lorem Ipsum is simply
                                dummy text</h6>
                            <div class="rating">
                                <ul>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><span>( 119 reviews )</span></li>
                                </ul>
                                <span class="sale-price">$ 49.00</span> <span class="reg-price">$ 55.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="product-card-wrapper">
                        <div class="product-card-img-wrapper">
                            <figure>
                                <img src="{{ asset('assets/img/special-img.png') }}" alt="">
                            </figure>
                        </div>
                        <div class="product-card-content-wrapper">
                            <h6>Lorem Ipsum is simply
                                dummy text</h6>
                            <div class="rating">
                                <ul>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><span>( 119 reviews )</span></li>
                                </ul>
                                <span class="sale-price">$ 49.00</span> <span class="reg-price">$ 55.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="product-card-wrapper">
                        <div class="product-card-img-wrapper">
                            <figure>
                                <img src="{{ asset('assets/img/special-img.png') }}" alt="">
                            </figure>
                        </div>
                        <div class="product-card-content-wrapper">
                            <h6>Lorem Ipsum is simply
                                dummy text</h6>
                            <div class="rating">
                                <ul>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><span>( 119 reviews )</span></li>
                                </ul>
                                <span class="sale-price">$ 49.00</span> <span class="reg-price">$ 55.00</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="button-group text-center">
                        <a href="#" class="btn">View More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Special Offer ends here -->
    <!-- testimonials starts here -->
    <section class="testimonails">
        <div class="container">
            <div class="row pb-4">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    <div class="content-wrapper text-center">
                        <h2>Our Happy Customers</h2>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the industry's standard dummy
                        </p>
                    </div>
                </div>
                <div class="col-lg-3"></div>
            </div>
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <div class="testimonails-slider">
                        <div class="testimonails-wrapper">
                            <div class="testimonails-img-wrapper text-center">
                                <figure>
                                    <img src="{{ asset('assets/img/testimonails-bg.png') }}" class="img-fluid" alt="">
                                </figure>
                            </div>
                            <div class="testimonails-content-wrapper text-center">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo
                                    viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur
                                </p>
                                <h6>James Alberuni</h6>
                                <div class="rating-wrapper">
                                    <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="testimonails-wrapper">
                            <div class="testimonails-img-wrapper text-center">
                                <figure>
                                    <img src="{{ asset('assets/img/testimonails-bg.png') }}" class="img-fluid" alt="">
                                </figure>
                            </div>
                            <div class="testimonails-content-wrapper text-center">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo
                                    viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur
                                </p>
                                <h6>James Alberuni</h6>
                                <div class="rating-wrapper">
                                    <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="testimonails-wrapper">
                            <div class="testimonails-img-wrapper text-center">
                                <figure>
                                    <img src="{{ asset('assets/img/testimonails-bg.png') }}" class="img-fluid" alt="">
                                </figure>
                            </div>
                            <div class="testimonails-content-wrapper text-center">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo
                                    viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur
                                </p>
                                <h6>James Alberuni</h6>
                                <div class="rating-wrapper">
                                    <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="testimonails-wrapper">
                            <div class="testimonails-img-wrapper text-center">
                                <figure>
                                    <img src="{{ asset('assets/img/testimonails-bg.png') }}" class="img-fluid" alt="">
                                </figure>
                            </div>
                            <div class="testimonails-content-wrapper text-center">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo
                                    viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur
                                </p>
                                <h6>James Alberuni</h6>
                                <div class="rating-wrapper">
                                    <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2"></div>
            </div>
        </div>
    </section>
    <!-- testimonials ends here -->
    <!-- blogs section starts here -->
    <section class="blog">
        <div class="container">
            <div class="row pb-4">
                <div class="col-lg-12">
                    <div class="content-wrapper text-center">
                        <h2>Blogs</h2>
                    </div>
                </div>
            </div>
            <div class="row blog-row-wrapper">
                <div class="col-lg-4">
                    <div class="blog-card-wrapper">
                        <div class="blog-img-wrapper">
                            <figure>
                                <a href="blog.php">
                                    <img src="{{ asset('assets/img/blog1.png') }}" class="img-fluid" alt="">
                                </a>
                            </figure>
                        </div>
                        <div class="blog-content-wrapper">
                            <div class="blo-date-and-authar-wrapper">
                                <ul>
                                    <li><a href="#"><i class="fa fa-calendar"></i> 26 Sep 2022</a></li>
                                    <li><a href="#"><i class="fa fa-user"></i> By Admin</a></li>
                                </ul>
                            </div>
                            <p class="blog-des">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                                eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua consetetur
                                sadipscing.</p>
                            <a href="blog.php" class="btn">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-card-wrapper">
                        <div class="blog-img-wrapper">
                            <figure>
                                <a href="blog.php">
                                    <img src="{{ asset('assets/img/blog2.png') }}" class="img-fluid" alt="">
                                </a>
                            </figure>
                        </div>
                        <div class="blog-content-wrapper">
                            <div class="blo-date-and-authar-wrapper">
                                <ul>
                                    <li><a href="#"><i class="fa fa-calendar"></i> 26 Sep 2022</a></li>
                                    <li><a href="#"><i class="fa fa-user"></i> By Admin</a></li>
                                </ul>
                            </div>
                            <p class="blog-des">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                                eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua consetetur
                                sadipscing.</p>
                            <a href="blog.php" class="btn">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-card-wrapper">
                        <div class="blog-img-wrapper">
                            <figure>
                                <a href="blog.php">
                                    <img src="{{ asset('assets/img/blog3.png') }}" class="img-fluid" alt="">
                                </a>
                            </figure>
                        </div>
                        <div class="blog-content-wrapper">
                            <div class="blo-date-and-authar-wrapper">
                                <ul>
                                    <li><a href="#"><i class="fa fa-calendar"></i> 26 Sep 2022</a></li>
                                    <li><a href="#"><i class="fa fa-user"></i> By Admin</a></li>
                                </ul>
                            </div>
                            <p class="blog-des">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                                eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua consetetur
                                sadipscing.</p>
                            <a href="blog.php" class="btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- banner section starts here -->
@endsection
