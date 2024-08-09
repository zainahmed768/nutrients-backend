@extends('frontEnd.layouts.app')
@section('content')
    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/css/blog.css') }}">
    <!-- Stylesheet -->
    <!-- Universal Banner Sec Start Here -->
    <section class="universal_banner">
        <div class="container-fluid p-0">
            <div class="banner-content">
                <div class="banner_image">
                    <figure><img src="{{ asset('assets/img/inner-banner.png') }}" class="img-fluid"></figure>
                </div>
                <div class="page-title">
                    <h2 class="title">Blogs</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- Universal Banner Sec End Here -->
    <!-- Blogs Sec Start Here -->
    <section class="blog_sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="blog_box">
                        <div class="picture_box">
                            <div class="img_box">
                                <figure><a href="{{ route('blog-detail') }}"><img src="img/blogs1.png"
                                            class="img-fluid"></a></figure>
                            </div>
                            <div class="hover_dv">

                            </div>
                        </div>
                        <div class="content_box">
                            <div class="date">
                                <h5>March 30 2022</h5>
                            </div>
                            <div class="name">
                                <a href="blog-detail.php">
                                    <h4>Lorem Ipsum is simply dummy text of the
                                        printing.</h4>
                                </a>
                            </div>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                been Lorem Ipsum is simply dummy text of the printing.
                            </p>
                            <div class="button-group">
                                <a href="blog-detail.php">Read more <span class="icon"><i class="fa fa-plus"
                                            aria-hidden="true"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog_box">
                        <div class="picture_box">
                            <div class="img_box">
                                <figure><a href="blog-detail.php"><img src="img/blogs2.png" class="img-fluid"></a></figure>
                            </div>
                            <div class="hover_dv">

                            </div>
                        </div>
                        <div class="content_box">
                            <div class="date">
                                <h5>March 30 2022</h5>
                            </div>
                            <div class="name">
                                <a href="blog-detail.php">
                                    <h4>Lorem Ipsum is simply dummy text of the
                                        printing.</h4>
                                </a>
                            </div>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                been Lorem Ipsum is simply dummy text of the printing.
                            </p>
                            <div class="button-group">
                                <a href="blog-detail.php">Read more <span class="icon"><i class="fa fa-plus"
                                            aria-hidden="true"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog_box">
                        <div class="picture_box">
                            <div class="img_box">
                                <figure><a href="blog-detail.php"><img src="img/blogs3.png" class="img-fluid"></a></figure>
                            </div>
                            <div class="hover_dv">

                            </div>
                        </div>
                        <div class="content_box">
                            <div class="date">
                                <h5>March 30 2022</h5>
                            </div>
                            <div class="name">
                                <a href="blog-detail.php">
                                    <h4>Lorem Ipsum is simply dummy text of the
                                        printing.</h4>
                                </a>
                            </div>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                been Lorem Ipsum is simply dummy text of the printing.
                            </p>
                            <div class="button-group">
                                <a href="blog-detail.php">Read more <span class="icon"><i class="fa fa-plus"
                                            aria-hidden="true"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog_box">
                        <div class="picture_box">
                            <div class="img_box">
                                <figure><a href="blog-detail.php"><img src="img/blogs2.png" class="img-fluid"></figure></a>
                            </div>
                            <div class="hover_dv">

                            </div>
                        </div>
                        <div class="content_box">
                            <div class="date">
                                <h5>March 30 2022</h5>
                            </div>
                            <div class="name">
                                <a href="blog-detail.php">
                                    <h4>Lorem Ipsum is simply dummy text of the
                                        printing.</h4>
                                </a>
                            </div>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                been Lorem Ipsum is simply dummy text of the printing.
                            </p>
                            <div class="button-group">
                                <a href="blog-detail.php">Read more <span class="icon"><i class="fa fa-plus"
                                            aria-hidden="true"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog_box">
                        <div class="picture_box">
                            <div class="img_box">
                                <figure><a href="blog-detail.php"><img src="img/blogs1.png" class="img-fluid"></figure></a>
                            </div>
                            <div class="hover_dv">

                            </div>
                        </div>
                        <div class="content_box">
                            <div class="date">
                                <h5>March 30 2022</h5>
                            </div>
                            <div class="name">
                                <a href="blog-detail.php">
                                    <h4>Lorem Ipsum is simply dummy text of the
                                        printing.</h4>
                                </a>
                            </div>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                been Lorem Ipsum is simply dummy text of the printing.
                            </p>
                            <div class="button-group">
                                <a href="blog-detail.php">Read more <span class="icon"><i class="fa fa-plus"
                                            aria-hidden="true"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog_box">
                        <div class="picture_box">
                            <div class="img_box">
                                <figure><a href="blog-detail.php"><img src="img/blogs3.png" class="img-fluid"></figure>
                                </a>
                            </div>
                            <div class="hover_dv">

                            </div>
                        </div>
                        <div class="content_box">
                            <div class="date">
                                <h5>March 30 2022</h5>
                            </div>
                            <div class="name">
                                <a href="blog-detail.php">
                                    <h4>Lorem Ipsum is simply dummy text of the
                                        printing.</h4>
                                </a>
                            </div>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                been Lorem Ipsum is simply dummy text of the printing.
                            </p>
                            <div class="button-group">
                                <a href="blog-detail.php">Read more <span class="icon"><i class="fa fa-plus"
                                            aria-hidden="true"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog_box">
                        <div class="picture_box">
                            <div class="img_box">
                                <figure><a href="blog-detail.php"><img src="img/blogs3.png" class="img-fluid"></figure>
                                </a>
                            </div>
                            <div class="hover_dv">

                            </div>
                        </div>
                        <div class="content_box">
                            <div class="date">
                                <h5>March 30 2022</h5>
                            </div>
                            <div class="name">
                                <a href="blog-detail.php">
                                    <h4>Lorem Ipsum is simply dummy text of the
                                        printing.</h4>
                                </a>
                            </div>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                been Lorem Ipsum is simply dummy text of the printing.
                            </p>
                            <div class="button-group">
                                <a href="blog-detail.php">Read more <span class="icon"><i class="fa fa-plus"
                                            aria-hidden="true"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog_box">
                        <div class="picture_box">
                            <div class="img_box">
                                <figure><a href="blog-detail.php"><img src="img/blogs1.png" class="img-fluid"></figure>
                                </a>
                            </div>
                            <div class="hover_dv">

                            </div>
                        </div>
                        <div class="content_box">
                            <div class="date">
                                <h5>March 30 2022</h5>
                            </div>
                            <div class="name">
                                <a href="blog-detail.php">
                                    <h4>Lorem Ipsum is simply dummy text of the
                                        printing.</h4>
                                </a>
                            </div>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                been Lorem Ipsum is simply dummy text of the printing.
                            </p>
                            <div class="button-group">
                                <a href="blog-detail.php">Read more <span class="icon"><i class="fa fa-plus"
                                            aria-hidden="true"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog_box">
                        <div class="picture_box">
                            <div class="img_box">
                                <figure><a href="blog-detail.php"><img src="img/blogs2.png" class="img-fluid"></figure>
                                </a>
                            </div>
                            <div class="hover_dv">

                            </div>
                        </div>
                        <div class="content_box">
                            <div class="date">
                                <h5>March 30 2022</h5>
                            </div>
                            <div class="name">
                                <a href="blog-detail.php">
                                    <h4>Lorem Ipsum is simply dummy text of the
                                        printing.</h4>
                                </a>
                            </div>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                been Lorem Ipsum is simply dummy text of the printing.
                            </p>
                            <div class="button-group">
                                <a href="blog-detail.php">Read more <span class="icon"><i class="fa fa-plus"
                                            aria-hidden="true"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blogs Sec End Here -->
@endsection
