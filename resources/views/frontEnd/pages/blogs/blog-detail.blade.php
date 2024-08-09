@extends('frontEnd.layouts.app')
@section('content')
    <!-- css file starts here -->
    <link rel="stylesheet" href="css/blog-detailed.css">
    <!-- css file ends here -->
    <!-- Universal Banner Sec Start Here -->
    <section class="universal_banner">
        <div class="container-fluid p-0">
            <div class="banner-content">
                <div class="banner_image">
                    <figure><img src="{{ asset('assets/img/inner-banner.png') }}" class="img-fluid"></figure>
                </div>
                <div class="page-title">
                    <h2 class="title">{{ $blog->title }}</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- Universal Banner Sec End Here -->
    <!-- news detailed section starts here -->
    <section class="detailed">
        <div class="blog-round-left">
            <img src="img/round.png" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 ">
                    <div class="blog-deatiled-img-wrapper pt-5">
                        <figure>
                            <img src="{{ asset('assets/img/detailed-img.png') }}" class="img-fluid detailed-img"
                                alt="">
                        </figure>
                        <div class="blo-date-and-authar-wrapper">
                            <ul>
                                <li><a href="#"><i class="fa fa-calendar"></i> {{ $blog->created_at }}</a></li>
                                <li><a href="#"><i class="fa fa-user"></i> By Admin</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="blog-description">
                        <p>
                            {{ $blog->content }}
                        </p>

                    </div>

                    <div class="blog-replies-wrapper">
                        <div class="row">
                            <div class="col-sm-12 pb-5">
                                <h3>3 Replies to “<span>Lorem ipsum dolor sit amet consectetur adipiscing eli</span>”</h3>
                            </div>
                            <div class="col-lg-1">
                                <div class="user-img-wrapper">
                                    <figure>
                                        <img src="img/user1.png" class="img-fluid" alt="">
                                    </figure>
                                </div>
                            </div>
                            <div class="col-lg-11">
                                <div class="user-content-wrapper">
                                    <h5 class="replied-user-name">John Doe</h5>
                                    <h6 class="comment-date">28Feb2021</h6>
                                    <p class="comment-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                        do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                        veniam, quis nostrud exercitation ullamco laboris nisLorem ipsum dolor sit amet,
                                        consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et</p>
                                    <a href="#" class="comment-reply">Reply :</a>
                                </div>
                            </div>
                            <div class="col-lg-1">
                                <div class="user-img-wrapper">
                                    <figure>
                                        <img src="img/user2.png" class="img-fluid" alt="">
                                    </figure>
                                </div>
                            </div>
                            <div class="col-lg-11">
                                <div class="user-content-wrapper">
                                    <h5 class="replied-user-name">John Doe</h5>
                                    <h6 class="comment-date">28Feb2021</h6>
                                    <p class="comment-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                        do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                        veniam, quis nostrud exercitation ullamco laboris nisLorem ipsum dolor sit amet,
                                        consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et</p>
                                    <a href="#" class="comment-reply">Reply :</a>
                                </div>
                            </div>
                            <div class="col-lg-1">
                                <div class="user-img-wrapper">
                                    <figure>
                                        <img src="img/user3.png" class="img-fluid" alt="">
                                    </figure>
                                </div>
                            </div>
                            <div class="col-lg-11">
                                <div class="user-content-wrapper">
                                    <h5 class="replied-user-name">John Doe</h5>
                                    <h6 class="comment-date">28Feb2021</h6>
                                    <p class="comment-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                        do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                        veniam, quis nostrud exercitation ullamco laboris nisLorem ipsum dolor sit amet,
                                        consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et</p>
                                    <a href="#" class="comment-reply">Reply :</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="blog-round">
            <img src="img/round.png" alt="">
        </div>
    </section>
    <!-- news detailed section ends here -->
    <!-- QUOTE wrapper starts here -->
    <section class="quote">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-heading">
                        <h3>Leave A Comment</h3>
                    </div>
                    <form action="" style="display: block;">
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="">Your Name</label>
                                <input type="text" class="form-control" placeholder="John Doe">
                            </div>
                            <div class="col-md-6">
                                <label for="">Email</label>
                                <input type="email" class="form-control" placeholder="JohnDoe@gmail.com">
                            </div>
                        </div>
                        <div class="form-group pt-4">
                            <label for="">Type Your Comment</label>
                            <textarea name="" class="form-control" placeholder="Type here" id="" cols="30" rows="10"></textarea>
                        </div>
                        <div class="form-group row pt-4">
                            <div class="col-lg-8">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Save my name, email, and website
                                        in this browser for the next time I comment.</label>
                                </div>
                            </div>
                            <div class="col-lg-4 text-right"><button class="btn">Submit</button></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
