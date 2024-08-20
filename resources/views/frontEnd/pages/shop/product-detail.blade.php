@extends('frontEnd.layouts.app')
@section('content')
    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/css/product-details.css') }}">
    <!-- Stylesheet -->
    <!-- Universal Banner Sec Start Here -->
    <section class="universal_banner">
        <div class="container-fluid p-0">
            <div class="banner-content">
                <div class="banner_image">
                    <figure><img src="{{ asset('assets/img/inner-banner.png') }}" class="img-fluid"></figure>
                </div>
                <div class="page-title">
                    <h2 class="title">Product Details</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- Universal Banner Sec End Here -->
    <!-- products-detail starts here -->
    <section class="product-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="product-detail-img-wrapper">
                        <figure>
                            <img src="{{ asset('storage/' . $product->image) }}" class="img-fluid" alt="">
                        </figure>
                    </div>
                    <div class="product-img-slider-wrapper">
                        <div class="detailed-slider-img">
                            <div class="img-wrapper">
                                <img src="img/banner-img2.png" class="img-fluid" alt="">
                            </div>
                            <div class="img-wrapper">
                                <img src="img/banner-img2.png" class="img-fluid" alt="">
                            </div>
                            <div class="img-wrapper">
                                <img src="img/med.png" class="img-fluid" alt="">
                            </div>
                            <div class="img-wrapper">
                                <img src="img/banner-img2.png" class="img-fluid" alt="">
                            </div>
                            <div class="img-wrapper">
                                <img src="img/banner-img2.png" class="img-fluid" alt="">
                            </div>
                            <div class="img-wrapper">
                                <img src="img/banner-img2.png" class="img-fluid" alt="">
                            </div>
                            <div class="img-wrapper">
                                <img src="img/banner-img2.png" class="img-fluid" alt="">
                            </div>
                            <div class="img-wrapper">
                                <img src="img/banner-img2.png" class="img-fluid" alt="">
                            </div>
                            <div class="img-wrapper">
                                <img src="img/med.png" class="img-fluid" alt="">
                            </div>
                            <div class="img-wrapper">
                                <img src="img/banner-img2.png" class="img-fluid" alt="">
                            </div>
                            <div class="img-wrapper">
                                <img src="img/banner-img2.png" class="img-fluid" alt="">
                            </div>
                            <div class="img-wrapper">
                                <img src="img/banner-img2.png" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 ">
                    <div class="pl-5">
                        <div class="product-name-wrapper">
                            <h4>{{ $product->name }}</h4>
                        </div>
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
                        <div class="availability-wrapper">
                            <span class="Availability">Availability :</span> &nbsp; &nbsp; &nbsp; <span class="InStock">In
                                Stock (13)</span>
                        </div>
                        <div class="product-des-wrapper">
                            <p>
                                {{ $product->description }}
                            </p>
                        </div>
                        <div class="product-spec-list-wrapper">
                            <ul>
                                <li>Lorem ipsum dolor sit</li>
                                <li>Lorem ipsum dolor sit</li>
                                <li>Lorem ipsum dolor sit</li>
                            </ul>
                        </div>
                        <div class="counter-and-price-wrapper">
                            <div class="price-wrapper">
                                <h2><span class="sales-price">$ {{ $product->price }}</span> <strike class="regular-price">$
                                        59.00</strike>
                                </h2>
                            </div>
                            <div class="number">
                                <span class="plus">+</span>
                                <input type="text" value="01">
                                <span class="minus">-</span>
                            </div>
                        </div>
                        <div class="button-wrapper">
                            <button onclick="location.href='cart.php'" class="cart-btn form-control"><i
                                    class="fa fa-shopping-cart"></i> Add To Cart</button>
                            <button class="wishlist-wrapper form-control">Add To wishlist</button>
                        </div>
                        <div class="other-spec-wrapper">
                            <ul>
                                <li>
                                    <span class="property">Excluding 7% VAT :</span> <span class="value">Plus
                                        shipping</span>
                                </li>
                                <li>
                                    <span class="property">Recommended retail price :</span> <span class="value">50,00
                                        $</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <img src="img/product-detialline.png" class="img-fluid" alt="">
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="detail-tabs-wrapper">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home"
                                    role="tab" aria-controls="home" aria-selected="true">Description</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                    aria-controls="profile" aria-selected="false">Reviews</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel"
                                aria-labelledby="home-tab">
                                <div class="des-content-wrapper">
                                    <h4>Product Information</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore.Lorem ipsum dolor sit amet, consectetur adipiscing
                                        elit, sed do eiusmod tempor incididunt ut labore et dolore.Lorem ipsum dolor sit
                                        amet,Lorem ipsum dolor sit amet</p>
                                    <div id="accordion">
                                        <div class="card">
                                            <div class="card-header" id="headingOne">
                                                <h5 class="mb-0">
                                                    <button class="btn-link" data-toggle="collapse"
                                                        data-target="#collapseOne" aria-expanded="true"
                                                        aria-controls="collapseOne">
                                                        Ingredients and potential allergens <i
                                                            class="fa fa-angle-down"></i>
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                                data-parent="#accordion">
                                                <div class="card-body">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                    tempor incididunt ut labore et dolore.Lorem ipsum dolor sit amet,
                                                    consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                                                    et dolor
                                                    Lorem ipsum dolor sit amet,Lorem ipsum dolor sit amet
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingTwo">
                                                <h5 class="mb-0">
                                                    <button class="btn-link collapsed" data-toggle="collapse"
                                                        data-target="#collapseTwo" aria-expanded="false"
                                                        aria-controls="collapseTwo">
                                                        Recommended intake <i class="fa fa-angle-down"></i>
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo"
                                                data-parent="#accordion">
                                                <div class="card-body">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                    tempor incididunt ut labore et dolore.Lorem ipsum dolor sit amet,
                                                    consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                                                    et dolor
                                                    Lorem ipsum dolor sit amet,Lorem ipsum dolor sit amet
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingThree">
                                                <h5 class="mb-0">
                                                    <button class="btn-link collapsed" data-toggle="collapse"
                                                        data-target="#collapseThree" aria-expanded="false"
                                                        aria-controls="collapseThree">
                                                        Warnings and additional information <i
                                                            class="fa fa-angle-down"></i>
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id="collapseThree" class="collapse show" aria-labelledby="headingThree"
                                                data-parent="#accordion">
                                                <div class="card-body">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                    tempor incididunt ut labore et dolore.Lorem ipsum dolor sit amet,
                                                    consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                                                    et dolor
                                                    Lorem ipsum dolor sit amet,Lorem ipsum dolor sit amet
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row pt-5 Related">
                                    <div class="col-lg-12 pb-3">
                                        <div class="content-wrapper text-center">
                                            <h2>Related Products</h2>
                                        </div>
                                    </div>
                                    @foreach ($related_product as $product)
                                        <div class="col-lg-3">
                                            <div class="single-product-card-wrapper">
                                                <div class="single-producrt-img-wrapper">
                                                    <figure>
                                                        <img src={{ asset('storage/', $product->image) }} class="img-fluid"
                                                            alt="">
                                                    </figure>
                                                </div>
                                                <div class="single-product-content-wrapper">
                                                    <h6 class="single-product-category">{{ $product->category_name }}</h6>
                                                    <h5 class="single-product-name">{{ $product->name }}</h5>
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
                                                                    (119 reviews)
                                                                </span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="price-wrapper">
                                                        <h6 class="price">$ {{ $product->price }} <span
                                                                class="regular-price">$
                                                                55.00</span>
                                                        </h6>
                                                    </div>
                                                    <div class="cart-button-wrapper">
                                                        <a href="" class="btn form-control"><i
                                                                class="fa fa-shopping-cart"></i>
                                                            Add To Cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="blog-replies-wrapper">
                                    <div class="row">
                                        <div class="col-sm-12 pb-5">
                                            <h4>Our Clients Reviews</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore.Lorem ipsum dolor sit amet,
                                                consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                                dolore.Lorem ipsum dolor sit amet,Lorem ipsum dolor sit amet</p>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="user-img-wrapper">
                                                <figure>
                                                    <img src="img/rev1.png" class="img-fluid" alt="">
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="col-lg-11">
                                            <div class="user-content-wrapper">
                                                <h5 class="replied-user-name">John Doe</h5>
                                                <div class="date-and-starts-wrapper d-flex">
                                                    <h6 class="comment-date">26 March 2022</h6>
                                                    <div class="rating-wrapper">
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
                                                        </ul>
                                                    </div>
                                                </div>
                                                <p class="comment-content">Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                                    magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                                    laboris nisLorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                                    do eiusmod tempor incididunt ut labore et</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="user-img-wrapper">
                                                <figure>
                                                    <img src="img/rev2.png" class="img-fluid" alt="">
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="col-lg-11">
                                            <div class="user-content-wrapper">
                                                <h5 class="replied-user-name">John Doe</h5>
                                                <div class="date-and-starts-wrapper d-flex">
                                                    <h6 class="comment-date">26 March 2022</h6>
                                                    <div class="rating-wrapper">
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
                                                                <i class="fa fa-star-half-o"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fa fa-star-o"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                                <p class="comment-content">Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                                    magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                                    laboris nisLorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                                    do eiusmod tempor incididunt ut labore et</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="user-img-wrapper">
                                                <figure>
                                                    <img src="img/rev3.png" class="img-fluid" alt="">
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="col-lg-11">
                                            <div class="user-content-wrapper">
                                                <h5 class="replied-user-name">John Doe</h5>
                                                <div class="date-and-starts-wrapper d-flex">
                                                    <h6 class="comment-date">26 March 2022</h6>
                                                    <div class="rating-wrapper">
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
                                                                <i class="fa fa-star-half-o"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <p class="comment-content">Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                                    magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                                    laboris nisLorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                                    do eiusmod tempor incididunt ut labore et</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="user-img-wrapper">
                                                <figure>
                                                    <img src="img/rev4.png" class="img-fluid" alt="">
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="col-lg-11">
                                            <div class="user-content-wrapper">
                                                <h5 class="replied-user-name">John Doe</h5>
                                                <div class="date-and-starts-wrapper d-flex">
                                                    <h6 class="comment-date">26 March 2022</h6>
                                                    <div class="rating-wrapper">
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
                                                                <i class="fa fa-star-half-o"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <p class="comment-content">Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                                    magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                                    laboris nisLorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                                    do eiusmod tempor incididunt ut labore et</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="rev-wrapper">
                                                <h4 class="mb-4">Add Review</h4>

                                                <form action="">
                                                    <div class="form-group row">
                                                        <div class="col-lg-4">
                                                            <input type="text" class="form-control"
                                                                placeholder="Name">
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <input type="email" class="form-control"
                                                                placeholder="Email">
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <input type="email" class="form-control"
                                                                placeholder="Rating">
                                                            <fieldset class="rating">
                                                                <input type="radio" id="star5" name="rating"
                                                                    value="5"><label class="full" for="star5"
                                                                    title="Awesome - 5 stars"></label>
                                                                <input type="radio" id="star4half" name="rating"
                                                                    value="4 and a half"><label class="half"
                                                                    for="star4half"
                                                                    title="Pretty good - 4.5 stars"></label>
                                                                <input type="radio" id="star4" name="rating"
                                                                    value="4"><label class="full" for="star4"
                                                                    title="Pretty good - 4 stars"></label>
                                                                <input type="radio" id="star3half" name="rating"
                                                                    value="3 and a half"><label class="half"
                                                                    for="star3half" title="Meh - 3.5 stars"></label>
                                                                <input type="radio" id="star3" name="rating"
                                                                    value="3"><label class="full" for="star3"
                                                                    title="Meh - 3 stars"></label>
                                                                <input type="radio" id="star2half" name="rating"
                                                                    value="2 and a half"><label class="half"
                                                                    for="star2half" title="Kinda bad - 2.5 stars"></label>
                                                                <input type="radio" id="star2" name="rating"
                                                                    value="2"><label class="full" for="star2"
                                                                    title="Kinda bad - 2 stars"></label>
                                                                <input type="radio" id="star1half" name="rating"
                                                                    value="1 and a half"><label class="half"
                                                                    for="star1half" title="Meh - 1.5 stars"></label>
                                                                <input type="radio" id="star1" name="rating"
                                                                    value="1"><label class="full" for="star1"
                                                                    title="Sucks big time - 1 star"></label>
                                                                <input type="radio" id="starhalf" name="rating"
                                                                    value="half"><label class="half" for="starhalf"
                                                                    title="Sucks big time - 0.5 stars"></label>
                                                            </fieldset>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <textarea name="" class="form-control" placeholder="Type here" id="" cols="30"
                                                            rows="10"></textarea>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-lg-8">

                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="" id="defaultCheck1">
                                                                <label class="form-check-label" for="defaultCheck1">
                                                                    By using this form you agree with the storage and
                                                                    handling of your data by this website.
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 text-right">
                                                            <button class="btn">Submit</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- products-detail End here -->
@endsection
