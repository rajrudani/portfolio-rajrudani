@extends('front.layout')

@section('content')
    <header id="header" class="header d-flex flex-column justify-content-center">
        <i class="header-toggle d-xl-none bi bi-list"></i>
        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="#hero" class="active"><i class="bi bi-house navicon"></i><span>Home</span></a></li>
                <li><a href="#about"><i class="bi bi-person navicon"></i><span>About</span></a></li>
                <li><a href="#skills"><i class="bi bi-graph-up-arrow navicon"></i><span> Skills</span></a></li>
                <li><a href="#resume"><i class="bi bi-file-earmark-text navicon"></i><span>Resume</span></a></li>
                <li><a href="#portfolio"><i class="bi bi-hdd-stack navicon"></i><span>Portfolio</span></a></li>
                <li><a href="#awards"><i class="bi bi-award navicon"></i><span>Awards</span></a></li>
                {{-- <li><a href="#contact"><i class="bi bi-envelope navicon"></i><span>Contact</span></a></li> --}}
            </ul>
        </nav>
    </header>

    <main class="main">
        <!-- Hero Section -->
        <section id="hero" class="hero section light-background">
            <img src="assets/img/hero-img2.png" alt="">
            <div class="container" data-aos="zoom-out">
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <h2>{{ $personalData['name'] }}</h2>
                        <p>I'm
                            <span class="typed"
                                data-typed-items="PHP Developer, Freelance Developer">{{ $personalData['job-title'] }}
                            </span><span class="typed-cursor typed-cursor--blink" aria-hidden="true"></span>
                        </p>
                        <div class="social-links">
                            @isset($socialMedia['facebook'])
                                <a href="{{ $socialMedia['facebook'] }}" target="_blank"><i class="bi bi-facebook"></i></a>
                            @endisset
                            @isset($socialMedia['twitter'])
                                <a href="{{ $socialMedia['twitter'] }}" target="_blank"><i class="bi bi-twitter-x"></i></a>
                            @endisset
                            @isset($socialMedia['instagram'])
                                <a href="{{ $socialMedia['instagram'] }}" target="_blank"><i class="bi bi-instagram"></i></a>
                            @endisset
                            @isset($socialMedia['linkedin'])
                                <a href="{{ $socialMedia['linkedin'] }}" target="_blank"><i class="bi bi-linkedin"></i></a>
                            @endisset
                            @isset($socialMedia['github'])
                                <a href="{{ $socialMedia['github'] }}" target="_blank"><i class="bi bi-github"></i></a>
                            @endisset
                            @isset($socialMedia['skype'])
                                <a href="{{ $socialMedia['skype'] }}" target="_blank"><i class="bi bi-skype"></i></a>
                            @endisset
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Hero Section -->

        <!-- About Section -->
        @include('front.index-partials.about')
        <!-- /About Section -->

        <!-- Skills Section -->
        @include('front.index-partials.skills')
        <!-- /Skills Section -->

        <!-- Resume Section -->
        @include('front.index-partials.resume')
        <!-- /Resume Section -->

        <!-- Portfolio Section -->
        @include('front.index-partials.portfolio')
        <!-- /Portfolio Section -->

        <!-- Awards Section -->
        @include('front.index-partials.awards')
        <!-- /Awards Section -->

        <!-- Contact Section -->
        {{-- <section id="contact" class="contact section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Contact</h2>
                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade" data-aos-delay="100">

                <div class="row gy-4">

                    <div class="col-lg-4">
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                            <i class="bi bi-geo-alt flex-shrink-0"></i>
                            <div>
                                <h3>Address</h3>
                                <p>A108 Adam Street, New York, NY 535022</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-telephone flex-shrink-0"></i>
                            <div>
                                <h3>Call Us</h3>
                                <p>+1 5589 55488 55</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                            <i class="bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h3>Email Us</h3>
                                <p>info@example.com</p>
                            </div>
                        </div><!-- End Info Item -->

                    </div>

                    <div class="col-lg-8">
                        <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up"
                            data-aos-delay="200">
                            <div class="row gy-4">

                                <div class="col-md-6">
                                    <input type="text" name="name" class="form-control" placeholder="Your Name"
                                        required="">
                                </div>

                                <div class="col-md-6 ">
                                    <input type="email" class="form-control" name="email" placeholder="Your Email"
                                        required="">
                                </div>

                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="subject" placeholder="Subject"
                                        required="">
                                </div>

                                <div class="col-md-12">
                                    <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                                </div>

                                <div class="col-md-12 text-center">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>

                                    <button type="submit">Send Message</button>
                                </div>

                            </div>
                        </form>
                    </div><!-- End Contact Form -->

                </div>

            </div>

        </section><!-- /Contact Section --> --}}
    </main>
@endsection
