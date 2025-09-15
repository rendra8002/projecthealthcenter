@extends('layouts.frontend.app')
@section('content')
    <!-- HOME -->
    <section id="top" class="slider" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">

                <div class="owl-carousel owl-theme">
                    @foreach ($heroes as $hero)
                        <div class="item" style="background-image: url('{{ asset('storage/' . $hero->photo) }}')">
                            <div class="caption">
                                <div class="col-md-offset-1 col-md-10">
                                    <h3>{{ $hero->subtitle }}</h3>
                                    <h1>{{ $hero->title }}</h1>
                                    @if ($hero->button_text && $hero->button_link)
                                        <a href="{{ $hero->button_link }}" class="section-btn btn btn-default smoothScroll">
                                            {{ $hero->button_text }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </section>

    <!-- ABOUT -->
    <section id="about"style="
                            background: url('{{ asset('storage/' . $aboutuses->photo) }}') no-repeat top center;
                            background-size: cover;
                            padding-top: 150px;
                            padding-bottom: 150px;
                            ">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="about-info">
                        <h2 class="wow fadeInUp" data-wow-delay="0.6s">Welcome to Your <i class="fa fa-h-square"></i>ealth
                            Center</h2>
                        <div class="wow fadeInUp" data-wow-delay="0.8s">
                            @if ($aboutuses)
                                <p>{{ $aboutuses->description }}</p>
                            @else
                                <p>Deskripsi belum tersedia.</p>
                            @endif
                        </div>
                    </div>
                </div>

            </div>
        </div>
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

                @foreach ($tenagakerjas as $tenagakerja)
                    <div class="col-md-4 col-sm-6">
                        <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
                            <img src="{{ asset('storage/' . $tenagakerja->photo) }}" class="img-responsive" alt="">
                            <div class="team-info">
                                <h3>{{ $tenagakerja->name }}</h3>
                                <p>{{ $tenagakerja->speciality }}</p>
                                <div class="team-contact-info">
                                    <p><i class="fa fa-phone"></i> {{ $tenagakerja->phone }}</p>
                                    <p><i class="fa fa-envelope-o"></i>
                                        <a href="mailto:{{ $tenagakerja->email }}">{{ $tenagakerja->email }}</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <!-- NEWS -->
    <section id="news" data-stellar-background-ratio="2.5">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-sm-12">
                    <!-- SECTION TITLE -->
                    <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                        <h2>Latest News</h2>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <!-- NEWS THUMB -->
                    <div class="news-thumb wow fadeInUp" data-wow-delay="0.4s">
                        <a href="news-detail.html">
                            <img src="{{ asset('assets/images/news-image1.jpg') }}" class="img-responsive" alt="">
                        </a>
                        <div class="news-info">
                            <span>March 08, 2018</span>
                            <h3><a href="news-detail.html">About Amazing Technology</a></h3>
                            <p>Maecenas risus neque, placerat volutpat tempor ut, vehicula et felis.</p>
                            <div class="author">
                                <img src="{{ asset('assets/images/author-image.jpg') }}" class="img-responsive" alt="">
                                <div class="author-info">
                                    <h5>Jeremie Carlson</h5>
                                    <p>CEO / Founder</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <!-- NEWS THUMB -->
                    <div class="news-thumb wow fadeInUp" data-wow-delay="0.6s">
                        <a href="news-detail.html">
                            <img src="{{ asset('assets/images/news-image2.jpg') }}" class="img-responsive" alt="">
                        </a>
                        <div class="news-info">
                            <span>February 20, 2018</span>
                            <h3><a href="news-detail.html">Introducing a new healing process</a></h3>
                            <p>Fusce vel sem finibus, rhoncus massa non, aliquam velit. Nam et est ligula.</p>
                            <div class="author">
                                <img src="{{ asset('assets/images/author-image.jpg') }}" class="img-responsive" alt="">
                                <div class="author-info">
                                    <h5>Jason Stewart</h5>
                                    <p>General Director</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <!-- NEWS THUMB -->
                    <div class="news-thumb wow fadeInUp" data-wow-delay="0.8s">
                        <a href="news-detail.html">
                            <img src="{{ asset('assets/images/news-image3.jpg') }}" class="img-responsive" alt="">
                        </a>
                        <div class="news-info">
                            <span>January 27, 2018</span>
                            <h3><a href="news-detail.html">Review Annual Medical Research</a></h3>
                            <p>Vivamus non nulla semper diam cursus maximus. Pellentesque dignissim.</p>
                            <div class="author">
                                <img src="{{ asset('assets/images/author-image.jpg') }}" class="img-responsive" alt="">
                                <div class="author-info">
                                    <h5>Andrio Abero</h5>
                                    <p>Online Advertising</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- MAKE AN APPOINTMENT -->
    <section id="appointment" data-stellar-background-ratio="3">
        <div class="container">
            <div class="row">

                <div class="col-md-6 col-sm-6">
                    <img src="images/appointment-image.jpg" class="img-responsive" alt="">
                </div>

                <div class="col-md-6 col-sm-6">
                    <!-- CONTACT FORM HERE -->
                    <form id="appointment-form" role="form" method="post" action="#">

                        <!-- SECTION TITLE -->
                        <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                            <h2>Make an appointment</h2>
                        </div>

                        <div class="wow fadeInUp" data-wow-delay="0.8s">
                            <div class="col-md-6 col-sm-6">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Full Name">
                            </div>

                            <div class="col-md-6 col-sm-6">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="Your Email">
                            </div>

                            <div class="col-md-6 col-sm-6">
                                <label for="date">Select Date</label>
                                <input type="date" name="date" value="" class="form-control">
                            </div>

                            <div class="col-md-6 col-sm-6">
                                <label for="select">Select Department</label>
                                <select class="form-control">
                                    <option>General Health</option>
                                    <option>Cardiology</option>
                                    <option>Dental</option>
                                    <option>Medical Research</option>
                                </select>
                            </div>

                            <div class="col-md-12 col-sm-12">
                                <label for="telephone">Phone Number</label>
                                <input type="tel" class="form-control" id="phone" name="phone"
                                    placeholder="Phone">
                                <label for="Message">Additional Message</label>
                                <textarea class="form-control" rows="5" id="message" name="message" placeholder="Message"></textarea>
                                <button type="submit" class="form-control" id="cf-submit" name="submit">Submit
                                    Button</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>
@endsection
