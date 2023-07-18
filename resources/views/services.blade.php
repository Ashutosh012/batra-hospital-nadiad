<!-- MAIN SERVICES START -->
    <section class="main-service">
        <div class="sec-wp">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="sec-title white-text">
                            <h2 class="h2-title icon wow fadeup-animation" data-wow-duration="0.8s"
                                data-wow-delay="0.2s">Our Services</h2>
                            <div class="title-sub-text wow fadeup-animation" data-wow-duration="0.8s"
                                data-wow-delay="0.3s">
                                <p>We Offer Different Services To Improve Yourraise awareness about the value of
                                    continuous patient monitoring.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">

                    @php
                    $services = App\Models\Ourservices::all();
                    @endphp

                    @foreach($services as $service)
                        <div class="{{ count($services) > 4 ? 'col-lg-4' : ''}} col-md-6">
                            <div class="service-card-wp-main">
                                <div class="service-card-wp">
                                    <span class="su_button_circle">
                                    </span>
                                    <div class="service-card">
                                        <div class="service-card-title">
                                            <div class="icon"> 
                                                <img src="{{ config('app.url') }}/storage/{{ $service->banner }}" width="33"
                                                    height="50" alt="{{ $service->name }}"></div>
                                            <div class="text">
                                                <h4 class="h4-title">{{ $service->name }}</h4>
                                            </div>
                                        </div>
                                        <div class="service-card-desc">
                                            <p>{{ $service->excerpt }}</p>
                                        </div>
                                        <div class="read-more-wp">
                                            <a href="#" title="know more">Know
                                                More</a>
                                            <span><i class="fas fa-arrow-right"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    @endforeach

                    
                </div>
            </div>
        </div>
    </section>
    <!-- MAIN SERVICES END -->