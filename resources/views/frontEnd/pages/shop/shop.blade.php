@extends('frontEnd.layouts.app')
@section('content')
    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/css/shop.css') }}">
    <!-- Stylesheet -->
    <!-- Universal Banner Sec Start Here -->
    <section class="universal_banner">
        <div class="container-fluid p-0">
            <div class="banner-content">
                <div class="banner_image">
                    <figure><img src="{{ asset('assets/img/inner-banner.png') }}" class="img-fluid"></figure>
                </div>
                <div class="page-title">
                    <h2 class="title">Shop</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- Universal Banner Sec End Here -->
    <!-- shop products starts here -->
    <section class="shop">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="sidebar-card-wrapper">
                        <div class="sidebar-heading-wrapper">
                            <h4>Categories</h4>
                        </div>
                        <div class="sidebar-content-wrapper">
                            <div id="accordion" class="ps-2">
                                <ul class="list-unstyled  mb-0">
                                    @foreach ($categories as $category)
                                        <li>{{ $category->category_name }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-card-wrapper">
                        <div class="sidebar-heading-wrapper">
                            <h4>Price Range</h4>
                        </div>
                        <div class="sidebar-content-wrapper">
                            <div class="rangeSlideDv">
                                <label class="d-flex justify-content-between"><span>MIN</span> <span>MAX</span></label>
                                <div slider id="slider-distance">
                                    <div>
                                        <div inverse-left style="width:70%;"></div>
                                        <div inverse-right style="width:70%;"></div>
                                        <div range style="left:30%;right:40%;"></div>

                                        <span thumb style="left:30%;"></span>
                                        <span thumb style="left:60%;"></span>

                                    </div>

                                    <input type="range" tabindex="0" value="30" max="100" min="0"
                                        step="1"
                                        oninput="
                        this.value=Math.min(this.value,this.parentNode.childNodes[5].value-1);
                        var value=(100/(parseInt(this.max)-parseInt(this.min)))*parseInt(this.value)-(100/(parseInt(this.max)-parseInt(this.min)))*parseInt(this.min);
                        var children = this.parentNode.childNodes[1].childNodes;
                        children[1].style.width=value+'%';
                        children[5].style.left=value+'%';
                        children[7].style.left=value+'%';children[11].style.left=value+'%';
                        children[11].childNodes[1].innerHTML=this.value;" />

                                    <input type="range" tabindex="0" value="60" max="100" min="0"
                                        step="1"
                                        oninput="
                        this.value=Math.max(this.value,this.parentNode.childNodes[3].value-(-1));
                        var value=(100/(parseInt(this.max)-parseInt(this.min)))*parseInt(this.value)-(100/(parseInt(this.max)-parseInt(this.min)))*parseInt(this.min);
                        var children = this.parentNode.childNodes[1].childNodes;
                        children[3].style.width=(100-value)+'%';
                        children[5].style.right=(100-value)+'%';
                        children[9].style.left=value+'%';children[13].style.left=value+'%';
                        children[13].childNodes[1].innerHTML=this.value;" />
                                </div>

                                <div class="labelPrice">
                                    <span class="label text-center d-block">
                                        Price: € 200
                                    </span>
                                    <!-- <span class="startPrice">
                                                                                    $13 -
                                                                                </span>

                                                                                <span class="endPrice">
                                                                                    $335
                                                                                </span> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-card-wrapper">
                        <div class="sidebar-heading-wrapper">
                            <h4>Rated</h4>
                        </div>
                        <div class="sidebar-content-wrapper rating-wrappers">
                            <div class="form-check">
                                <!-- <span class="commit"></span> -->
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">
                                    <ul class="d-flex">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck2">
                                <label class="form-check-label" for="exampleCheck2">
                                    <ul class="d-flex">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star-o"></i></li>
                                    </ul>
                                </label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck2">
                                <label class="form-check-label" for="exampleCheck2">
                                    <ul class="d-flex">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star-o"></i></li>
                                        <li><i class="fa fa-star-o"></i></li>
                                    </ul>
                                </label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck2">
                                <label class="form-check-label" for="exampleCheck2">
                                    <ul class="d-flex">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star-o"></i></li>
                                        <li><i class="fa fa-star-o"></i></li>
                                        <li><i class="fa fa-star-o"></i></li>
                                    </ul>
                                </label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck5">
                                <label class="form-check-label" for="exampleCheck5">
                                    <ul class="d-flex">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star-o"></i></li>
                                        <li><i class="fa fa-star-o"></i></li>
                                        <li><i class="fa fa-star-o"></i></li>
                                        <li><i class="fa fa-star-o"></i></li>
                                    </ul>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="row search-and-select">
                        <div class="col-lg-6">
                            <div class="search-wrapper d-flex">
                                <input type="text" placeholder="Search" class="form-control">
                                <button class="d-flex align-items-center"> <span class="align-self-center">|</span> &nbsp;
                                    &nbsp; &nbsp;<img src="img/search.png" alt=""></button>
                            </div>
                        </div>
                        <div class="col-lg-2">

                        </div>
                        <div class="col-lg-4">
                            <select name="" class="form-control" id="">
                                <option value="Default Sorting" selected>Default Sorting</option>
                            </select>
                        </div>
                    </div>
                    <div class="row single-product-card">
                        @foreach ($products as $product)
                            <div class="col-lg-4">
                                <div class="single-product-card-wrapper">
                                    <div class="single-producrt-img-wrapper">
                                        <figure>
                                            <a href="{{ route('product-detail', $product->id) }}"><img
                                                    src="{{ asset('storage/' . $product->image) }}" class="img-fluid"
                                                    alt=""></a>
                                        </figure>
                                    </div>
                                    <div class="single-product-content-wrapper">
                                        <h6 class="single-product-category">{{ $product->name }}</h6>
                                        {{-- <h5 class="single-product-name">{{ $product->description }}</h5> --}}
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
                                            <h6 class="price">$ {{ $product->price }}</h6>
                                        </div>
                                        <div class="cart-button-wrapper">
                                            <a href="product-details.php" class="btn form-control"><i
                                                    class="fa fa-shopping-cart"></i> Add To Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <div class="row pt-3 align-items-center">
                        <div class="col-lg-6">
                            <p class="total-result">
                                Showing 1–12 of 40 results
                            </p>
                        </div>
                        <div class="col-lg-6">
                            <ul class="pagination justify-content-end">
                                <li class="pagination-item"><button class="pagination-btn active">01</button></li>
                                <li class="pagination-item"><button class="pagination-btn">02</button></li>
                                <li class="pagination-item"><button class="pagination-btn">03</button></li>
                                <li class="pagination-item"><button class="pagination-btn">04</button></li>
                                <li class="pagination-item"><button class="pagination-btn"><i
                                            class="fa fa-angle-right"></i></button></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- shop products End here -->
@endsection
