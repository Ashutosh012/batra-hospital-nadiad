@extends('blogs.layout.blog')

@section('header')
	@include('layouts.includes.header')
@endsection

@section('bloglist')
<section class="main-banner inner-banner" style="background-image: url('{{asset('assets/images/appointment-bg-img.jpg') }}')">
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
                                    <li>Blogs</li>
                                </ul>
                            </div>
                            <h1 class="h1-title wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.4s">
                                Blog List</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- MIAN BLOG START -->
    <section class="main-blog secondary">
        <div class="sec-wp">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- <div class="sec-title wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.3s">
                            <h2 class="h2-title icon">Latest Blog</h2>
                        </div> -->
                        <div class="blog-wp">
                        	@foreach($blogPosts as $post)
	                            <div class="blog-card">
	                                <div class="blog-card-img">
	                                    <div class="back-img" style="background-image: url('{{ asset('assets/images/banner-img.jpg') }}');">
	                                    </div>
	                                </div>
	                                <div class="blog-card-content">
	                                    <h4 class="h4-title">{{ $post->title }}</h4>
	                                    <div class="blog-card-content-text">
	                                        <p>{{ $post->excerpt }}</p>
	                                    </div>
	                                </div>
	                                <div class="blog-card-date">
	                                    <div class="date">
	                                        <h6 class="h6-title">{{ $post->published_at }}</h6>
	                                    </div>
	                                    <div class="author">
	                                        <h6 class="h6-title">-{{ $post->author->name }}</h6>
	                                    </div>
	                                </div>
	                                <a href="{{ $post->slug }}" class="icon-wp">
	                                    <span class="icon"></span>
	                                </a>
	                            </div>
	                        @endforeach
	                        {{-- Pagination --}}
					        <div class="d-flex justify-content-center customer-pagination">
					          {!! $blogPosts->links('pagination::bootstrap-4') !!}
					        </div>
                            <!-- <div class="pagination blog">
                                <ul>
                                    <li><a href="javascript:void(0);" class="arrow" title="Previous"><i
                                                class="fas fa-chevron-left" aria-hidden="true"></i></a></li>
                                    <li class="active"><a href="javascript:void(0);">1</a></li>
                                    <li><a href="javascript:void(0);">2</a></li>
                                    <li><a href="javascript:void(0);">3</a></li>
                                    <li><a href="javascript:void(0);">4</a></li>
                                    <li><a href="javascript:void(0);">5</a></li>
                                    <li><a href="javascript:void(0);" class="arrow" title="Next"><i
                                                class="fas fa-chevron-right" aria-hidden="true"></i></a></li>
                                </ul>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- MIAN BLOG END -->
@endsection


@section('footer')
	@include('layouts.includes.footer')
@endsection