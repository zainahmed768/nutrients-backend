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
                @if ($blogs->count() != 0)
                    @foreach ($blogs as $key => $blog)
                        <div class="col-lg-4 col-md-6">
                            <div class="blog_box">
                                <div class="picture_box">
                                    <div class="img_box">
                                        <figure><a href="{{ route('blog-detail', $blog->id) }}"><img
                                                    src="{{ asset('storage/' . $blog->image) }}" class="img-fluid"></a>
                                        </figure>
                                    </div>
                                    <div class="hover_dv">

                                    </div>
                                </div>
                                <div class="content_box">
                                    <div class="date">
                                        <h5>{{ $blog->created_at }}</h5>
                                    </div>
                                    <div class="name">
                                        <a href="#">
                                            <h4>{{ $blog->title }}</h4>
                                        </a>
                                    </div>
                                    <p>
                                        {{ $blog->content }}
                                    </p>
                                    <div class="button-group">
                                        <a href="blog-detail.php">Read more <span class="icon"><i class="fa fa-plus"
                                                    aria-hidden="true"></i></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="noblock-wrapper text-center">
                        <h1 class="text-center">No Blog Found</h1>
                    </div>
                @endif
            </div>
        </div>
    </section>
    <!-- Blogs Sec End Here -->
@endsection
