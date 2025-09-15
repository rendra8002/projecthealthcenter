@extends('layouts.frontend.app')
@section('content')
    <!-- HOME -->
    <section id="top" class="slider" data-stellar-background-ratio="0.5">
        <br>
        <div class="container">
            <div class="row">

                <div class="owl-carousel owl-theme">
                    <div class="item item-first">
                        <div class="caption">
                            <div class="col-md-offset-1 col-md-10">
                                <h3>Let's make your life happier</h3>
                                <h1>Healthy Living</h1>
                                <a href="{{ asset('assets/#team') }}" class="section-btn btn btn-default smoothScroll">Meet
                                    Our Doctors</a>
                            </div>
                        </div>
                    </div>

                    <div class="item item-second">
                        <div class="caption">
                            <div class="col-md-offset-1 col-md-10">
                                <h3>Aenean luctus lobortis tellus</h3>
                                <h1>New Lifestyle</h1>
                                <a href="{{ asset('assets/#about') }}"
                                    class="section-btn btn btn-default btn-gray smoothScroll">More About Us</a>
                            </div>
                        </div>
                    </div>

                    <div class="item item-third">
                        <div class="caption">
                            <div class="col-md-offset-1 col-md-10">
                                <h3>Pellentesque nec libero nisi</h3>
                                <h1>Your Health Benefits</h1>
                                <a href="{{ asset('assets/#sejarah') }}"
                                    class="section-btn btn btn-default btn-blue smoothScroll">Read Stories</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <br>
    </section>

    <!-- ABOUT -->
    <section id="about">
        <br>
        <div class="container">
            <div class="row">

                <div class="col-md-6 col-sm-6">
                    <div class="about-info">
                        <h2 class="wow fadeInUp" data-wow-delay="0.6s">Welcome to Your <i class="fa fa-h-square"></i>ealth
                            Center</h2>
                        <div class="wow fadeInUp" data-wow-delay="0.8s">
                            <p>Aenean luctus lobortis tellus, vel ornare enim molestie condimentum. Curabitur lacinia nisi
                                vitae velit volutpat venenatis.</p>
                            <p>Sed a dignissim lacus. Quisque fermentum est non orci commodo, a luctus urna mattis. Ut
                                placerat, diam a tempus vehicula.</p>
                        </div>
                    </div>
                </div>

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

                <div class="col-md-4 col-sm-6">
                    <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
                        <img src="{{ asset('assets/images/team-image1.jpg') }}" class="img-responsive" alt="">

                        <div class="team-info">
                            <h3>Nate Baston</h3>
                            <p>General Principal</p>
                            <div class="team-contact-info">
                                <p><i class="fa fa-phone"></i> 010-020-0120</p>
                                <p><i class="fa fa-envelope-o"></i> <a
                                        href="mailto:general@company.com">general@company.com</a></p>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="team-thumb wow fadeInUp" data-wow-delay="0.4s">
                        <img src="{{ asset('assets/images/team-image2.jpg') }}" class="img-responsive" alt="">

                        <div class="team-info">
                            <h3>Jason Stewart</h3>
                            <p>Pregnancy</p>
                            <div class="team-contact-info">
                                <p><i class="fa fa-phone"></i> 010-070-0170</p>
                                <p><i class="fa fa-envelope-o"></i> <a
                                        href="mailto:pregnancy@company.com">pregnancy@company.com</a></p>
                            </div>

                        </div>

                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="team-thumb wow fadeInUp" data-wow-delay="0.6s">
                        <img src="{{ asset('assets/images/team-image3.jpg') }}" class="img-responsive" alt="">

                        <div class="team-info">
                            <h3>Miasha Nakahara</h3>
                            <p>Cardiology</p>
                            <div class="team-contact-info">
                                <p><i class="fa fa-phone"></i> 010-040-0140</p>
                                <p><i class="fa fa-envelope-o"></i> <a
                                        href="mailto:cardio@company.com">cardio@company.com</a></p>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>
        <br>
    </section>

    <!-- galery -->
    <section id="gallery" data-stellar-background-ratio="2.5">
        <br>
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-sm-12">
                    <!-- SECTION TITLE -->
                    <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                        <h2>Gallery cihuy</h2>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <!-- NEWS THUMB -->
                    <div class="news-thumb wow fadeInUp" data-wow-delay="0.4s">
                        <img src="{{ asset('assets/images/news-image1.jpg') }}" class="img-responsive" alt="">
                        <div class="news-info">
                            <span>March 08, 2018</span>
                            <h3>>About Amazing Technology</h3>
                            <p>Maecenas risus neque, placerat volutpat tempor ut, vehicula et felis.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <!-- NEWS THUMB -->
                    <div class="news-thumb wow fadeInUp" data-wow-delay="0.6s">

                        <img src="{{ asset('assets/images/news-image2.jpg') }}" class="img-responsive" alt="">

                        <div class="news-info">
                            <span>February 20, 2018</span>
                            <h3>Introducineg a new healing process</h3>
                            <p>Fusce vel sm finibus, rhoncus massa non, aliquam velit. Nam et est ligula.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <!-- NEWS THUMB -->
                    <div class="news-thumb wow fadeInUp" data-wow-delay="0.8s">
                        <img src="{{ asset('assets/images/news-image3.jpg') }}" class="img-responsive" alt="">

                        <div class="news-info">
                            <span>January 27, 2018</span>
                            <h3>Review Annual Medical Research</h3>
                            <p>Vivamus non nulla semper diam cursus maximus. Pellentesque dignissim.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <br>
    </section>

    <!-- TESTIMONIALS -->
    <section id="testimonials" class="py-5 bg-light">
        <br>
        <br>
        <br>
        <div class="container">
            <div class="row mb-4">
                <div class="col text-center">
                    <h2>Testimonials</h2>
                    <p class="text-muted">Apa kata pasien kami</p>
                </div>
            </div>
            <div class="row">

                <!-- Testimonial 1 -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 text-center p-3">
                        <img src="{{ asset('assets/images/news-image1.jpg') }}" class="rounded-circle mx-auto mb-3"
                            width="80" height="80" alt="Patient">
                        <h5>John Doe</h5>
                        <p class="text-muted">"Pelayanan sangat ramah dan cepat."</p>
                        <div class="text-warning">
                            ★★★★☆
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 text-center p-3">
                        <img src="{{ asset('assets/images/news-image1.jpg') }}" class="rounded-circle mx-auto mb-3"
                            width="80" height="80" alt="Patient">
                        <h5>Maria Smith</h5>
                        <p class="text-muted">"Tempat bersih, dokter komunikatif."</p>
                        <div class="text-warning">
                            ★★★★★
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 text-center p-3">
                        <img src="{{ asset('assets/images/news-image1.jpg') }}" class="rounded-circle mx-auto mb-3"
                            width="80" height="80" alt="Patient">
                        <h5>Kevin Lee</h5>
                        <p class="text-muted">"Sangat puas dengan pemeriksaan."</p>
                        <div class="text-warning">
                            ★★★★☆
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <br>
    </section>

    <!-- SERVICES -->
    <section id="services" data-stellar-background-ratio="1">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-sm-12">
                    <!-- SECTION TITLE -->
                    <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                        <h2 class="col text-center">Our Services</h2>
                        <p>We provide professional healthcare services for your needs</p>
                    </div>
                </div>

                <!-- Service Item -->
                <div class="col-md-4 col-sm-6">
                    <div class="service-thumb wow fadeInUp" data-wow-delay="0.2s">
                        <img src="assets/images/slider1.jpg" class="img-responsive" alt="Service 1">
                        <div class="service-info">
                            <h3>General Checkup</h3>
                            <p>Comprehensive health checkup for early detection and prevention of illness.</p>
                        </div>
                    </div>
                </div>

                <!-- Service Item -->
                <div class="col-md-4 col-sm-6">
                    <div class="service-thumb wow fadeInUp" data-wow-delay="0.4s">
                        <img src="assets/images/slider1.jpg" class="img-responsive" alt="Service 2">
                        <div class="service-info">
                            <h3>Cardiology</h3>
                            <p>Expert heart care with modern technology and experienced specialists.</p>
                        </div>
                    </div>
                </div>

                <!-- Service Item -->
                <div class="col-md-4 col-sm-6">
                    <div class="service-thumb wow fadeInUp" data-wow-delay="0.6s">
                        <img src="assets/images/slider1.jpg" class="img-responsive" alt="Service 3">
                        <div class="service-info">
                            <h3>Dental Care</h3>
                            <p>Expert heart care with modern technology and experienced specialists.</p>

                        </div>
                    </div>
                </div>

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
                    <!-- NEWS THUMB -->
                    <div class="news-detail-thumb">
                        <div class="news-image">
                            <img src="{{ asset('assets/images/news-image3.jpg') }}" class="img-responsive"
                                alt="">
                        </div>

                        <br>
                    </div>
                </div>

                <div class="col-md-4 col-sm-5">
                    <div class="news-sidebar">
                        <div class="news-author">
                            <h4>About the author</h4>
                            <p>Lorem ipsum dolor sit amet, maecenas eget vestibulum justo imperdiet, wisi risus purus augue
                                vulputate voluptate neque.</p>
                        </div>


                        <div class="news-tags">
                            <h4>Tags</h4>
                            <li><a href="#">Pregnancy</a></li>
                            <li><a href="#">Health</a></li>
                            <li><a href="#">Consultant</a></li>
                            <li><a href="#">Medical</a></li>
                            <li><a href="#">Doctors</a></li>
                            <li><a href="#">Social</a></li>
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

                <!-- Partner Item -->
                <div class="col-md-4 col-sm-6">
                    <div class="partner-thumb wow fadeInUp" data-wow-delay="0.2s">
                        <img src="assets/images/slider1.jpg" class="img-responsive" alt="Partner 1">
                        <div class="partner-info">
                            <h3>Partner One</h3>
                            <p>Specialized in advanced medical equipment and innovative healthcare solutions.</p>
                        </div>
                    </div>
                </div>

                <!-- Partner Item -->
                <div class="col-md-4 col-sm-6">
                    <div class="partner-thumb wow fadeInUp" data-wow-delay="0.4s">
                        <img src="assets/images/slider1.jpg" class="img-responsive" alt="Partner 2">
                        <div class="partner-info">
                            <h3>Partner Two</h3>
                            <p>Providing world-class cardiology research and clinical support.</p>
                        </div>
                    </div>
                </div>

                <!-- Partner Item -->
                <div class="col-md-4 col-sm-6">
                    <div class="partner-thumb wow fadeInUp" data-wow-delay="0.6s">
                        <img src="assets/images/slider3.jpg" class="img-responsive" alt="Partner 3">
                        <div class="partner-info">
                            <h3>Partner Three</h3>
                            <p>International collaboration for dental and oral health services.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <br><br><br>
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
