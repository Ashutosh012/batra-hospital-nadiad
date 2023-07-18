@extends('contact.layout.app')

@section('header')
    @include('layouts.includes.header')
@endsection

@section('contact')
    <section class="main-banner inner-banner" style="background-image: url('{{ asset('assets/images/appointment-bg-img.jpg') }}">
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
                                    <li>Contact Us</li>
                                </ul>
                            </div>
                            <h1 class="h1-title wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.4s">
                                Contact Us</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="appointment" class="main-contact-us">
        <div class="sec-wp">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="contact-form-wp">
                            <div class="appointment-form-wp wow left-animation" data-wow-duration="0.8s"
                                data-wow-delay="0.4s">
                                @include('appointment-form')

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="side-banner-wp white-text"
                            style="background-image: url('{{ asset('assets/images/advance-eye-treatment.jpg') }}')">
                            <div class="title">
                                <h3 class="h3-title">Understanding NT Scan: A Crucial Prenatal Screening Tool</h3>
                            </div>
                            <div class="text">
                                <p>During pregnancy, various tests and screenings are conducted to ensure the health and well-being of both the mother and the developing baby. One such important screening tool is the Nuchal Translucency (NT) scan. The NT scan is a non-invasive prenatal test that provides valuable information about the risk of certain chromosomal abnormalities in the fetus. In this blog post, we will explore what the NT scan entails, its significance, and what expectant parents should know. </p>
                            </div>
                            <div class="btn-wp">
                                <a href="{{ config('app.url') }}/understanding-nt-scan-a-crucial-prenatal-screening-tool" class="sec-btn">Know More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="location" class="main-map-wp">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="map-wp">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3681.608071978462!2d72.85387187921967!3d22.66839692636872!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e5bec51e397bb%3A0x1e6246f30a455105!2sKant%20Arcade!5e0!3m2!1sen!2sin!4v1688494355857!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('footer')
    @include('layouts.includes.footer')
@endsection