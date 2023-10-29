<!--FACILITY START -->
    <section id="facility" class="main-facility">
        <div class="sec-wp">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="sec-title text-center">
                            @php
                                $hero_section = \App\Models\Description::where('section_order',3)->first();
                            @endphp
                            @if($hero_section)
                            <h2 class="h2-title icon wow fadeup-animation" data-wow-duration="0.8s"
                                data-wow-delay="0.2s">{{ $hero_section->module_name }}</h2>
                            <div class="title-sub-text wow fadeup-animation" data-wow-duration="0.8s"
                                data-wow-delay="0.3s">
                                <p>{{ $hero_section->module_description }}</p>
                            </div>
                            @endif
                        </div>
                        <div class="main-facility-content">
                            <div class="card-row first-row">
                                @php
                                $facilities = \App\Models\Facilities::where('order','=', 1)->first();
                                @endphp
                                @if($facilities!=null)
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
                                                <div class="number for-des">
                                                    <span>1</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <div class="facility-card text-center wow fadeIn" data-wow-duration="0.8s"
                                        data-wow-delay="0.7s">
                                        <div class="icon-wp">
                                            <div class="icon">
                                                <img src="assets/images/pharmacy-icon.svg" width="71" height="61"
                                                    alt="pharmacy-icon">
                                            </div>
                                        </div>
                                        <div class="facility-card-content-wp">
                                            <div class="facility-card-content">
                                                <div class="title">
                                                    <h3 class="h3-title">pharmacy</h3>
                                                </div>
                                                <div class="text">
                                                    <p>A well-functioning health system working in harmony is built on
                                                        having trained and motivated health workers</p>
                                                </div>
                                                <div class="number for-des">
                                                    <span>3</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                            <div class="card-row second-row">
                                @php
                                $facilities = \App\Models\Facilities::where('order','=', 2)->get();
                                @endphp

                                @forelse($facilities as $index => $facility)
                                    <div class="facility-card text-center wow fadeIn" data-wow-duration="0.8s"
                                        data-wow-delay="0.6s">
                                        <div class="icon-wp">
                                            @if($facility->banner)
                                            <div class="icon">
                                                <img src="{{ config('app.url')}}/storage/{{ $facility->banner }}" width="71" height="61"
                                                    alt="{{ $facility->name }}">
                                            </div>
                                            @endif
                                        </div>
                                        <div class="facility-card-content-wp">
                                            <div class="facility-card-content">
                                                <div class="title">
                                                    <h3 class="h3-title">{{ $facility->name }}</h3>
                                                </div>
                                                <div class="text">
                                                    <p>{{ $facility->short_description }}</p>
                                                </div>
                                                <div class="number for-des">
                                                    <span>{{ $index + 2}}</span>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                @empty
                                    <div class="facility-card text-center wow fadeIn" data-wow-duration="0.8s"
                                    data-wow-delay="0.6s">
                                        <div class="icon-wp">
                                            <div class="icon">
                                                <img src="assets/images/surgery-icon.svg" width="69" height="65"
                                                    alt="surgery-icon">
                                            </div>
                                        </div>
                                        <div class="facility-card-content-wp">
                                            <div class="facility-card-content">
                                                <div class="title">
                                                    <h3 class="h3-title">Surgery Service</h3>
                                                </div>
                                                <div class="text">
                                                    <p>A well-functioning health system working in harmony is built on
                                                        having trained and motivated health workers</p>
                                                </div>
                                                <div class="number for-des">
                                                    <span>2</span>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="facility-card text-center wow fadeIn" data-wow-duration="0.8s"
                                        data-wow-delay="0.8s">
                                        <div class="icon-wp">
                                            <div class="icon">
                                                <img src="assets/images/file-icon.svg" width="71" height="80"
                                                    alt="file-icon">
                                            </div>
                                        </div>
                                        <div class="facility-card-content-wp">
                                            <div class="facility-card-content">
                                                <div class="title">
                                                    <h3 class="h3-title">Outdoor Checkup</h3>
                                                </div>
                                                <div class="text">
                                                    <p>A well-functioning health system working in harmony is built on
                                                        having trained and motivated health workers</p>
                                                </div>
                                                <div class="number for-des">
                                                    <span>4</span>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                @endforelse
                            </div>
                            <div class="card-row third-row">
                                @php
                                $facilities = \App\Models\Facilities::where('order','=', 3)->get();
                                @endphp
                                @forelse($facilities as $index => $facility)
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
                                                <div class="number for-des">
                                                    <span>{{ $index + 4}}</span>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                @empty
                                    <div class="facility-card text-center wow fadeIn" data-wow-duration="0.8s"
                                    data-wow-delay="0.5s">
                                    <div class="icon-wp">
                                        <div class="icon">
                                            <img src="assets/images/ambulance-icon.svg" width="51" height="35"
                                                alt="ambulance-icon">
                                        </div>
                                    </div>
                                    <div class="facility-card-content-wp">
                                        <div class="facility-card-content">
                                            <div class="title">
                                                <h3 class="h3-title">24*7 Ambulance</h3>
                                            </div>
                                            <div class="text">
                                                <p>A well-functioning health system working in harmony is built on
                                                    having trained and motivated health workers</p>
                                            </div>
                                            <div class="number for-des">
                                                <span>1</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="facility-card text-center wow fadeIn" data-wow-duration="0.8s"
                                    data-wow-delay="0.9s">
                                    <div class="icon-wp">
                                        <div class="icon">
                                            <img src="assets/images/ot-icon.svg" width="72" height="56" alt="ot-icon">
                                        </div>
                                    </div>
                                    <div class="facility-card-content-wp">
                                        <div class="facility-card-content">
                                            <div class="title">
                                                <h3 class="h3-title">Operation Theatre</h3>
                                            </div>
                                            <div class="text">
                                                <p>A well-functioning health system working in harmony is built on
                                                    having trained and motivated health workers</p>
                                            </div>
                                            <div class="number for-des">
                                                <span>5</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                @endforelse
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