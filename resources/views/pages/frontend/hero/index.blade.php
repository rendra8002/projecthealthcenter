@extends('layouts.frontend.app')
@section('content')
    <!-- HOME -->
    <section id="top" class="slider" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <div class="owl-carousel owl-theme">
                    @forelse ($heroes as $hero)
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
                    @empty
                        <div class="item"
                            style="background-image: url('{{ asset('assets/default.jpg') }}'); min-height:400px;">
                            <div class="caption">
                                <div class="col-md-offset-1 col-md-10 text-center">
                                    <h3>subtitle kosong</h3>
                                    <h1>title kososng</h1>
                                    <a href="#about" class="section-btn btn btn-default smoothScroll">
                                        Learn More
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforelse
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
                        <h2 class="wow fadeInUp" data-wow-delay="0.6s">
                            Welcome to Your <i class="fa fa-h-square"></i>ealth Center
                        </h2>
                        <div class="about-info">
                            <div class="wow fadeInUp" data-wow-delay="0.8s">
                                <p>{{ $about->description }}</p>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="col-md-6 col-sm-6">
                        <p class="text-white">Belum ada data about.</p>
                    </div>
                @endif
            </div>
        </div>
        <br>
    </section>

    <!-- TEAM -->
    <section id="team" data-stellar-background-ratio="1">
        <div class="container">
            <div class="row">

                <div class="col-md-6 col-sm-6">
                    <div class="about-info">
                        <h2 class="wow fadeInUp" data-wow-delay="0.1s">Our Doctors</h2>
                    </div>
                </div>

                <div class="clearfix"></div>

                @forelse ($teams as $team)
                    <div class="col-md-4 col-sm-6">
                        <div class="team-thumb wow fadeInUp" data-wow-delay="0.{{ $loop->iteration * 2 }}s">
                            <img src="{{ $team->photo ? asset('storage/' . $team->photo) : asset('assets/images/default-bg.jpg') }}"
                                class="img-responsive" alt="{{ $team->name }}">

                            <div class="team-info">
                                <h3>{{ $team->name }}</h3>
                                <p>{{ $team->speciality }}</p>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-md-12 text-center">
                        <p>Belum ada data dokter.</p>
                    </div>
                @endforelse

            </div>
        </div>
        <br>
    </section>

    <!-- GALLERY -->
    <section id="gallery">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="section-title">
                        <h2>Gallery</h2>
                    </div>
                </div>

                @forelse ($galleries as $gal)
                    <div class="col-md-4 col-sm-6">
                        <div class="news-thumb">
                            <img src="{{ asset('storage/' . $gal->photo) }}" class="img-responsive" alt="">
                            <div class="news-info">
                                <h3>{{ $gal->title }}</h3>
                                <p>{{ $gal->description }}</p>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-md-12 text-center">
                        <p>Belum ada gallery yang ditambahkan.</p>
                    </div>
                @endforelse
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

                @forelse ($testimonials as $testi)
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
                @empty
                    <div class="col-md-12 text-center">
                        <p>Belum ada testimoni.</p>
                    </div>
                @endforelse

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

                @forelse ($services as $index => $service)
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
                @empty
                    <div class="col-md-12 text-center">
                        <p>Belum ada service yang ditambahkan.</p>
                    </div>
                @endforelse

            </div>
        </div>
        <br><br><br>
    </section>

    <!-- SEJARAH -->
    <section id="sejarah" data-stellar-background-ratio="0.5">
        <br>
        <div class="container">
            <div class="row">

                <div class="col-md-8 col-sm-7">
                    <div class="news-detail-thumb">
                        <div class="news-image">
                            <img src="{{ $sejarah && $sejarah->photo ? asset('storage/' . $sejarah->photo) : asset('assets/default.jpg') }}"
                                class="img-responsive" alt="">
                        </div>
                        <br>
                    </div>
                </div>

                <div class="col-md-4 col-sm-5">
                    <div class="news-sidebar">
                        <div class="news-author">
                            <h4>{{ $sejarah->title ?? 'Sejarah Klinik' }}</h4>
                            <p>{{ $sejarah->description ?? 'Belum ada deskripsi sejarah.' }}</p>
                        </div>
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
                    <div class="col-md-12 text-center">
                        <p>Belum ada partner yang ditambahkan.</p>
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
                    <img src="{{ asset('assets/default.jpg') }}" class="img-responsive" alt="">
                </div>

                <div class="col-md-6 col-sm-6">
                    <!-- ALERT SUCCESS -->
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <!-- ALERT ERROR -->
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <!-- CONTACT FORM -->
                    <form id="appointment-form" role="form" method="post" action="{{ route('fronthero.store') }}">
                        @csrf
                        <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                            <h2>Make an appointment</h2>
                        </div>

                        <div class="wow fadeInUp" data-wow-delay="0.8s">
                            <div class="col-md-6 col-sm-6">
                                <label for="first_name">First Name</label>
                                <input type="text" class="form-control" id="first_name" name="first_name"
                                    placeholder="first Name">
                            </div>
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
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3647.3030413476204!2d100.5641230193719!3d13.757206847615207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf51ce6427b7918fc!2sG+Tower!5e0!3m2!1sen!2sth!4v1510722015945"
            width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
    </section>
@endsection
