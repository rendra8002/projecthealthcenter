@extends('layouts.frontend.app')
@section('content')
    <!-- HOME -->
    <section id="top" class="slider" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <div class="owl-carousel owl-theme">
                    @foreach ($heroes as $hero)
                        <div class="item"
                            style="background-image: url('{{ $hero->photo ? asset('storage/' . $hero->photo) : asset('assets/default.jpg') }}');">
                            <div class="caption">
                                <div class="col-md-offset-1 col-md-10">
                                    <h3>{{ $hero->subtitle }}</h3>
                                    <h1>{{ $hero->title }}</h1>
                                    <a href="{{ $hero->button_link }}" class="section-btn btn btn-default smoothScroll">
                                        {{ $hero->button_text }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- ABOUT -->
    <section id="about"
        style="background: url('{{ $about && $about->photo ? asset('storage/' . $about->photo) : asset('assets/images/default-bg.jpg') }}') no-repeat top center;
        background-size: cover; padding-top:150px; padding-bottom:150px;">
        <br>
        <div class="container">
            <div class="row">
                @if ($about)
                    <div class="col-md-6 col-sm-6">
                        <div class="about-info">
                            <h2 class="wow fadeInUp" data-wow-delay="0.6s">
                                Welcome to Your <i class="fa fa-h-square"></i>ealth Center
                            </h2>
                            <div class="wow fadeInUp" data-wow-delay="0.8s">
                                <p>{{ $about->description }}</p>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
        <br>
    </section>

    <!-- Tenaga kerja -->
    <section id="team" data-stellar-background-ratio="1">
        <div class="container">
            <div class="row">

                <div class="col-md-6 col-sm-6">
                    <div class="about-info">
                        <h2 class="wow fadeInUp" data-wow-delay="0.1s">Our Doctors</h2>
                    </div>
                </div>

                <div class="clearfix"></div>

                @foreach ($teams as $team)
                    <div class="col-md-4 col-sm-6">
                        <div class="team-thumb wow fadeInUp" data-wow-delay="0.{{ $loop->iteration * 2 }}s">
                            <img src="{{ $team->photo ? asset('storage/' . $team->photo) : asset('assets/images/default-team.jpg') }}"
                                class="img-responsive" alt="{{ $team->name }}">

                            <div class="team-info">
                                <h3>{{ $team->name }}</h3>
                                <p>{{ $team->speciality }}</p>
                                <div class="team-contact-info">
                                    @if ($team->phone)
                                        <p><i class="fa fa-phone"></i> {{ $team->phone }}</p>
                                    @endif
                                    @if ($team->email)
                                        <p><i class="fa fa-envelope-o"></i>
                                            <a href="mailto:{{ $team->email }}">{{ $team->email }}</a>
                                        </p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
        <br>
    </section>

    <!-- galery -->
    <section id="gallery">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="section-title">
                        <h2>Gallery</h2>
                    </div>
                </div>

                @foreach ($galleries as $gal)
                    <div class="col-md-4 col-sm-6">
                        <div class="news-thumb">
                            <img src="{{ asset('storage/' . $gal->photo) }}" class="img-responsive" alt="">
                            <div class="news-info">
                                <h3>{{ $gal->title }}</h3>
                                <p>{{ $gal->description }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- TESTIMONIALS -->
    <section id="testimonials" class="py-5 bg-light">
        <br><br><br>
        <div class="container">
            <div class="row mb-4">
                <div class="col text-center">
                    <h2>Testimonials</h2>
                    <p class="text-muted">Apa kata pasien kami</p>
                </div>
            </div>
            <div class="row">

                @foreach ($testimonials as $testi)
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 text-center p-3">
                            <img src="{{ $testi->photo ? asset('storage/' . $testi->photo) : asset('assets/images/default-user.png') }}"
                                class="rounded-circle mx-auto mb-3" width="100" height="100"
                                alt="{{ $testi->name }}">
                            <h5>{{ $testi->name }}</h5>
                            <p class="text-muted">"{{ $testi->detail }}"</p>
                            <div class="text-warning">
                                @for ($i = 1; $i <= 5; $i++)
                                    {!! $i <= $testi->rating ? '★' : '☆' !!}
                                @endfor
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
        <br><br><br><br><br><br>
    </section>

    <!-- SERVICES -->
    <section id="services" data-stellar-background-ratio="1">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-sm-12">
                    <!-- SECTION TITLE -->
                    <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                        <h2 class="col text-center">Our Services</h2>
                        <p style="text-align: center;">We provide professional healthcare services for your needs</p>
                    </div>
                </div>

                @foreach ($services as $index => $service)
                    <div class="col-md-4 col-sm-6">
                        <div class="service-thumb wow fadeInUp" data-wow-delay="{{ 0.2 + $index * 0.2 }}s">
                            <img src="{{ $service->photo ? asset('storage/' . $service->photo) : asset('assets/images/default-service.jpg') }}"
                                class="img-responsive" alt="{{ $service->title }}">
                            <div class="service-info">
                                <h3>{{ $service->title }}</h3>
                                <p>{{ $service->description }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
        <br><br><br>
    </section>



    <!-- sejarh -->
    <section id="sejarah" data-stellar-background-ratio="0.5">
        <br>
        <div class="container">
            <div class="row">

                <div class="col-md-8 col-sm-7">
                    <div class="news-detail-thumb">
                        <div class="news-image">
                            <img src="{{ $sejarah && $sejarah->photo ? asset('storage/' . $sejarah->photo) : asset('assets/images/news-image3.jpg') }}"
                                class="img-responsive" alt="">
                        </div>
                        <br>
                    </div>
                </div>

                <div class="col-md-4 col-sm-5">
                    <div class="news-sidebar">
                        <div class="news-author">
                            <h4>{{ $sejarah->title ?? 'About the author' }}</h4>
                            <p>{{ $sejarah->description ?? 'Belum ada deskripsi sejarah.' }}</p>
                        </div>
                        {{-- 
                        <div class="news-tags">
                            <h4>Tags</h4>
                            <li><a href="#">Pregnancy</a></li>
                            <li><a href="#">Health</a></li>
                            <li><a href="#">Consultant</a></li>
                            <li><a href="#">Medical</a></li>
                            <li><a href="#">Doctors</a></li>
                            <li><a href="#">Social</a></li>
                        </div> --}}
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- PARTNERS -->
    <section id="partners" data-stellar-background-ratio="1">
        <br>
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-sm-12">
                    <!-- SECTION TITLE -->
                    <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                        <h2>Our Partners</h2>
                        <p>We collaborate with trusted institutions to deliver the best healthcare services.</p>
                    </div>
                </div>

                @forelse ($partners as $partner)
                    <div class="col-md-4 col-sm-6">
                        <div class="partner-thumb wow fadeInUp" data-wow-delay="0.2s">
                            <img src="{{ $partner->photo ? asset('storage/' . $partner->photo) : asset('assets/images/default-partner.jpg') }}"
                                class="img-responsive" alt="{{ $partner->name }}">
                            <div class="partner-info">
                                <h3>{{ $partner->name }}</h3>
                                <p>{{ $partner->description }}</p>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-md-12">
                        <p class="text-center">Belum ada partner yang ditambahkan.</p>
                    </div>
                @endforelse

            </div>
        </div>
        <br><br><br>
    </section>

    <!-- MAKE AN APPOINTMENT -->
    <section id="appointment" data-stellar-background-ratio="3">
        <div class="container">
            <div class="row">

                <div class="col-md-6 col-sm-6">
                    <img src="{{ asset('assets/images/appointment-image.jpg') }}" class="img-responsive" alt="">
                </div>

                <div class="col-md-6 col-sm-6">
                    <!-- ALERT SUCCESS -->
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <!-- ALERT ERROR (kalau validasi gagal) -->
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <!-- CONTACT FORM HERE -->
                    <form id="appointment-form" role="form" method="post"
                        action="{{ route('fronthero.store') }}">
                        @csrf
                        <!-- SECTION TITLE -->
                        <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                            <h2>Make an appointment</h2>
                        </div>

                        <div class="wow fadeInUp" data-wow-delay="0.8s">
                            <div class="col-md-6 col-sm-6">
                                <label for="first_name">First Name</label>
                                <input type="text" class="form-control" id="first_name" name="first_name"
                                    placeholder="first Name">
                            </div>
                            <div class="wow fadeInUp" data-wow-delay="0.8s">
                                <div class="col-md-6 col-sm-6">
                                    <label for="last_name">Last Name</label>
                                    <input type="text" class="form-control" id="last_name" name="last_name"
                                        placeholder="Last Name">
                                </div>

                                <div class="col-md-12 col-sm-6">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="Your Email">
                                </div>

                                <div class="wow fadeInUp" data-wow-delay="0.8s">
                                    <div class="col-md-12 col-sm-6">
                                        <label for="subject">Subject</label>
                                        <input type="text" class="form-control" id="subject" name="subject"
                                            placeholder="Subject">
                                    </div>



                                    <div class="col-md-12 col-sm-12">
                                        <label for="description">Description</label>
                                        <textarea class="form-control" rows="5" id="description" name="description" placeholder="Description"></textarea>
                                        <button type="submit" class="form-control" id="cf-submit" name="submit">Submit
                                            Button</button>
                                    </div>
                                </div>
                    </form>
                </div>

            </div>
        </div>
    </section>

    <!-- GOOGLE MAP -->
    <section id="contact">
        <!-- How to change your own map point
                                                                                                                    1. Go to Google Maps
                                                                                                                    2. Click on your location point
                                                                                                                    3. Click "Share" and choose "Embed map" tab
                                                                                                                    4. Copy only URL and paste it within the src="" field below
                                                                                                         -->
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3647.3030413476204!2d100.5641230193719!3d13.757206847615207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf51ce6427b7918fc!2sG+Tower!5e0!3m2!1sen!2sth!4v1510722015945"
            width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
    </section>
@endsection
