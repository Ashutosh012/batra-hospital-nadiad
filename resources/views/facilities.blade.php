<!--FACILITY START -->
    <section id="facility" class="main-facility">
        <div class="sec-wp">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="sec-title text-center">
                            <h2 class="h2-title icon wow fadeup-animation" data-wow-duration="0.8s"
                                data-wow-delay="0.2s">Facilities We Provide</h2>
                            <div class="title-sub-text wow fadeup-animation" data-wow-duration="0.8s"
                                data-wow-delay="0.3s">
                                <p>Explore Our Completed Services! Consectetur adipiscing elitt elit tellus,
                                    luctus
                                    pulvinar dapibus leoconsectetur luctus nec.Explore Our Completed Services!
                                    Consectetur adipiscing elitt elit tellus, luctus pulvinar dapibus
                                    leoconsectetur
                                    luctus nec.</p>
                            </div>
                        </div>
                        <div class="main-facility-content">
                            <div class="card-row first-row">
                                @php
                                $facilities = \App\Models\Facilities::where('order','=', 1)->first();
                                @endphp
                                <div class="facility-card text-center wow fadeIn" data-wow-duration="0.8s"
                                    data-wow-delay="0.7s">
                                    <div class="icon-wp">
                                        <div class="icon">
                                            <img src="{{ config('app.url')}}/storage/{{ $facilities->banner }}" width="71" height="61"
                                                alt="{{ $facilities->name }}">
                                        </div>
                                    </div>
                                    <div class="facility-card-content-wp">
                                        <div class="facility-card-content">
                                            <div class="title">
                                                <h3 class="h3-title">{{ $facilities->name }}</h3>
                                            </div>
                                            <div class="text">
                                                <p>{{ $facilities->short_description }}</p>
                                            </div>
                                            <!-- <div class="number for-des">
                                                <span>3</span>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-row second-row">
                                @php
                                $facilities = \App\Models\Facilities::where('order','=', 2)->get();
                                @endphp

                                @foreach($facilities as $facility)
                                    <div class="facility-card text-center wow fadeIn" data-wow-duration="0.8s"
                                        data-wow-delay="0.6s">
                                        <div class="icon-wp">
                                            <div class="icon">
                                                <img src="{{ config('app.url')}}/storage/{{ $facility->banner }}" width="69" height="65"
                                                    alt="{{ $facility->name }}">
                                            </div>
                                        </div>
                                        <div class="facility-card-content-wp">
                                            <div class="facility-card-content">
                                                <div class="title">
                                                    <h3 class="h3-title">{{ $facility->name }}</h3>
                                                </div>
                                                <div class="text">
                                                    <p>{{ $facility->short_description }}</p>
                                                </div>
                                                <!-- <div class="number for-des">
                                                    <span>2</span>
                                                </div> -->
                                            </div>
                                        </div>

                                    </div>
                                @endforeach
                            </div>
                            <div class="card-row third-row">
                                @php
                                $facilities = \App\Models\Facilities::where('order','=', 3)->get();
                                @endphp
                                @foreach($facilities as $facility)
                                    <div class="facility-card text-center wow fadeIn" data-wow-duration="0.8s"
                                        data-wow-delay="0.6s">
                                        <div class="icon-wp">
                                            <div class="icon">
                                                <img src="{{ config('app.url')}}/storage/{{ $facility->banner }}" width="69" height="65"
                                                    alt="{{ $facility->name }}">
                                            </div>
                                        </div>
                                        <div class="facility-card-content-wp">
                                            <div class="facility-card-content">
                                                <div class="title">
                                                    <h3 class="h3-title">{{ $facility->name }}</h3>
                                                </div>
                                                <div class="text">
                                                    <p>{{ $facility->short_description }}</p>
                                                </div>
                                                <!-- <div class="number for-des">
                                                    <span>2</span>
                                                </div> -->
                                            </div>
                                        </div>

                                    </div>
                                @endforeach
                            </div>
                            <div class="facility-img-wp for-des">
                                <div class="back-img"
                                    style="background-image: url(assets/images/facility-doctor-img.png);">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FACILITY END -->