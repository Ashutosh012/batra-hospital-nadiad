@extends('blogs.layout.blogdetail')

@section('header')
    @include('layouts.includes.header')
@endsection

@section('blogdetail')

    <section class="main-banner inner-banner" style="background-image: url('assets/images/appointment-bg-img.jpg')">
        <div class="sec-wp">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="banner-content white-text">
                            <div class="breadcreumb">
                                <ul>
                                    <li>
                                        <a href="/" title="Home">Home</a>
                                    </li>
                                    <li>{{ $post->title }}</li>
                                </ul>
                            </div>
                            <h1 class="h1-title wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.4s">
                                Blogs</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="main-blog-feed">
        <div class="sec-wp">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="blog-feed">
                            <div class="blog-feed-img-wp">
                                <div class="back-img"
                                    style="background-image: url('assets/images/appointment-bg-img.jpg')"></div>
                            </div>
                            <div class="author-wp">
                                <div class="date">
                                    <div class="icon">
                                        <img src="assets/images/calendar.png" alt="calendar-icon" width="60"
                                            height="60">
                                    </div>
                                    {{ Carbon\Carbon::parse($post->published_at)->format('Y M d') }}
                                </div>
                                <div class="author">
                                    <div class="icon">
                                        <img src="assets/images/user-icon.svg" alt="user-icon" width="60" height="60">
                                    </div>
                                    {{ $post->author->name }}
                                </div>
                            </div>
                            <div class="title-wp">
                                <h3 class="h3-title">{{ $post->title }}</h3>
                            </div>
                            <div class="blog-feed-text">
                                {!! $post->content !!}
                            </div>
                            <div class="blog-feed-content-img-box">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="blog-feed-content-img">
                                            <div class="back-img"
                                                style="background-image: url('assets/images/banner-img.jpg')"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="blog-feed-content-img">
                                            <div class="back-img"
                                                style="background-image: url('assets/images/exercise.jpg')"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="col-lg-4">
                        <div class="small-feed-list">
                            @foreach($relatedPosts as $relatedPost)
                                <div class="small-feed-card">
                                    <div class="small-feed-card-img">
                                        <div class="back-img"
                                            style="background-image: url(assets/images/sub-service-bg.jpg);">
                                        </div>
                                    </div>

                                    <div class="small-feed-card-content">
                                        <div class="small-feed-author">
                                            <span>{{ Carbon\Carbon::parse($relatedPost->published_at)->format('Y M d') }}</span>
                                            <span>-{{ $relatedPost->author->name }}</span>
                                        </div>
                                        <div class="title">
                                            <a href="{{$relatedPost->slug}}">
                                                <h4 class="h4-title">{{ $relatedPost->title }}
                                                </h4>
                                            </a>

                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="sidebar-box">
                            <h3 class="h3-title">Categories</h3>
                            <ul>
                                @foreach(\Stephenjude\FilamentBlog\Models\Category::all() as $category)
                                    <li><a href="javascript:void(0);" title="{{ $category->name }}">{{ $category->name }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="related-blog-title">
                            <h3 class="h3-title">Related Blogs</h3>
                        </div>
                    </div>
                    @foreach($relatedPosts as $relatedPost)
                        <div class="col-lg-4 col-md-6">
                            <div class="small-feed-card">
                                <div class="small-feed-card-img">
                                    <div class="back-img" style="background-image: url(assets/images/cardiology.jpg);">
                                    </div>
                                </div>
                                <div class="small-feed-card-content">
                                    <div class="small-feed-author">
                                        <span>{{ Carbon\Carbon::parse($relatedPost->published_at)->format('Y M d') }}</span>
                                        <span>-{{ $relatedPost->author->name }}</span>
                                    </div>
                                    <div class="title">
                                        <a href="{{ $post->slug }}">
                                            <h4 class="h4-title">{{ $relatedPost->title }}
                                            </h4>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

@endsection

@section('footer')
    @include('layouts.includes.footer')
@endsection