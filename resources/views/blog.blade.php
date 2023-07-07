<!-- MIAN BLOG START -->
    <section class="main-blog" id="blogs">
        <div class="sec-wp">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="sec-title wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.3s">
                            <h2 class="h2-title icon">Latest Blog</h2>
                        </div>
                        <div class="blog-wp">
                            @foreach(\Stephenjude\FilamentBlog\Models\Post::with(['author','category'])->get() as $post)
                                <div class="blog-card">
                                    <div class="blog-card-img">
                                        <div class="back-img" style="background-image: url(assets/images/banner-img.jpg);">
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
                            <div class="blog-btn-wp">
                                <a href="blog-list.html" class="sec-btn" title="View All">View All</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- MIAN BLOG END -->