<!-- MAIN BANNER START -->
<section class="main-banner">
    <div class="sec-wp">
        <div class="container">
            <div class="row">
                @php
                    $hero_section = \App\Models\Description::where('section_order',1)->first();
                @endphp

                @if($hero_section)
                    <div class="col-lg-5 order-2 order-lg-1">

                        <div class="banner-content">
                            <h1 class="h1-title wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.3s">
                                {{ $hero_section->module_name }}</h1>
                            <div class="sub-title wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.4s">
                                <p>{{ $hero_section->module_description }}</p>
                            </div>
                            <div class="banner-btn wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.5s">
                                <a href="/c/contact" class="sec-btn" title="Contact Us">Contact Us</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 order-1 order-lg-2">
                        <div class="banner-img-wp wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.2s">
                            <div class="back-img" style="background-image: url({{ config('app.url') }}/storage/{{ $hero_section->banner }});">
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>
<!-- MAIN BANNER END -->