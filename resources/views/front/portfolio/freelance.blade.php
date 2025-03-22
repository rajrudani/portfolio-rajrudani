@extends('front.layout')

@section('content')
    @include('front.portfolio.header')

    <main class="main">
        <div class="page-title" data-aos="fade">
            <div class="container">
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="{{ route('index') }}">Home</a></li>
                        <li class="current">Freelance Projects</li>
                    </ol>
                </nav>
                <h1>Freelance Projects</h1>
            </div>
        </div>

        <section id="service-details" class="service-details section">
            <div class="container">
                <div class="row gy-5">
                    <!-- Project List (Tabs) -->
                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-box">
                            <div class="services-list">
                                <h4>Projects</h4>
                                <ul class="nav nav-pills flex-column" id="projectTabs">
                                    <a class="nav-link active" data-bs-toggle="pill" href="#project1">
                                        <i class="bi bi-arrow-right-circle"></i> <span> City Soccer FC
                                        </span>
                                    </a>
                                    <a class="nav-link" data-bs-toggle="pill" href="#project2">
                                        <i class="bi bi-arrow-right-circle"></i> <span>Taco Sur</span>
                                    </a>
                                </ul>
                            </div>
                        </div>

                        <div class="service-box">
                            <h4>Portfolios</h4>
                            <div class="download-catalog">
                                <a href="{{ route('view-portfolio', 'webbrains') }}"><i
                                        class="bi bi-arrow-up-right-circle"></i><span>Webbrains Technologies
                                        Projects</span></a>
                                <a href="{{ route('view-portfolio', 'svaapta') }}"><i
                                        class="bi bi-arrow-up-right-circle"></i><span class="mr-2">Svaapta IT
                                        ALLY Solutions</span></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8 ps-lg-5" data-aos="fade-up" data-aos-delay="200">
                        <div class="tab-content">
                            <!-- Project 1 -->
                            <div class="tab-pane fade show active" id="project1">
                                <h3>City Soccer FC </h3>
                                <p>
                                    City Soccer FC is a mobile application built with Laravel, designed to manage soccer
                                    events and ticket bookings for local football club matches. The app offers a seamless
                                    experience for users to browse match schedules and book tickets in real-time.
                                </p>

                                <div class="mt-1">
                                    <h6 class="text-dark">Key Features</h6>
                                    <ul class="list-unstyled">
                                        <li>
                                            <i class="bi bi-arrow-right-short"></i>
                                            Real-time match schedules.
                                        </li>
                                        <li>
                                            <i class="bi bi-arrow-right-short"></i>
                                            Secure and user-friendly ticket booking system
                                        </li>
                                        <li>
                                            <i class="bi bi-arrow-right-short"></i>
                                            Admin panel for managing matches and events
                                        </li>
                                    </ul>
                                </div>

                                <div class="mt-4">
                                    <h5 class="text-dark">Technology Stack</h5>
                                    <ul class="list-unstyled">
                                        <li>
                                            <i class="bi bi-window-stack"></i><strong>Frontend: </strong> <span
                                                class="ml-3"> Mobile Application.
                                            </span>
                                        </li>
                                        <li>
                                            <i class="bi bi-code-slash"></i><strong>Backend: </strong> <span class="ml-3">
                                                Admin panel built using PHP, Laravel, and MySQL.
                                            </span>
                                        </li>
                                    </ul>
                                </div>

                                <div class="mt-4">
                                    <h5 class="text-dark">My Role in the Project</h5>

                                    <ul class="list-unstyled">
                                        <li><i class="bi bi-arrow-right-square"></i> Created RESTful APIs for mobile applications
                                            to facilitate real-time updates.
                                        </li>
                                        <li><i class="bi bi-arrow-right-square"></i> Built an intuitive admin panel to manage
                                            match entries, schedules, and ticket sales.
                                        </li>
                                        <li><i class="bi bi-arrow-right-square"></i> Optimized database queries for
                                            high-performance data retrieval and improved response times:</li>
                                        <li><i class="bi bi-arrow-right-square"></i> Enhanced security measures to protect user
                                            data and prevent unauthorized access.
                                        </li>
                                    </ul>
                                </div>

                                <!-- Skills Used -->
                                <div class="mt-4 p-3 bg-light rounded shadow-sm">
                                    <h5 class="text-dark">Skills Used:</h5>
                                    <div class="d-flex flex-wrap gap-2 mt-2">
                                        <span class="badge bg-primary d-flex align-items-center">
                                            <i class="bi bi-code-slash me-1"></i> PHP
                                        </span>
                                        <span class="badge bg-danger d-flex align-items-center">
                                            <i class="bi bi-layers me-1"></i> Laravel
                                        </span>
                                        <span class="badge bg-warning text-dark d-flex align-items-center">
                                            <i class="bi bi-filetype-js me-1"></i> JavaScript
                                        </span>
                                        <span class="badge bg-info text-dark d-flex align-items-center">
                                            <i class="bi bi-lightbulb me-1"></i> jQuery
                                        </span>
                                        <span class="badge bg-success d-flex align-items-center">
                                            <i class="bi bi-lightning me-1"></i> Ajax
                                        </span>
                                        <span class="badge bg-primary d-flex align-items-center">
                                            <i class="bi bi-database me-1"></i> MySQL
                                        </span>
                                        <span class="badge bg-secondary d-flex align-items-center">
                                            <i class="bi bi-code me-1"></i> HTML/CSS
                                        </span>
                                        <span class="badge bg-primary d-flex align-items-center">
                                            <i class="bi bi-grid me-1"></i> Bootstrap
                                        </span>
                                        <span class="badge bg-dark d-flex align-items-center">
                                            <i class="bi bi-git me-1"></i> GIT
                                        </span>
                                        <span class="badge bg-info text-dark d-flex align-items-center">
                                            <i class="bi bi-plug me-1"></i> REST APIs
                                        </span>
                                        <span class="badge bg-success d-flex align-items-center">
                                            <i class="bi bi-shield-lock me-1"></i> API Development
                                        </span>
                                    </div>
                                </div>

                                <div class="mt-4">
                                    <h5 class="text-dark">How My Work Has Helped the Site</h5>
                                    <ul class="list-unstyled">
                                        <li><i class="bi bi-check-circle"></i> Optimized backend efficiency, allowing for
                                            faster response times and seamless user interactions.</li>
                                        <li><i class="bi bi-check-circle"></i> Enhanced security to protect transactions and
                                            user data, ensuring trust and reliability.</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Project 2 -->
                            <div class="tab-pane fad" id="project2">
                                <h3>Taco SUR</h3>
                                <p>
                                    Taco SUR is a specialized food delivery platform catering to taco lovers, offering a
                                    seamless experience for ordering tacos, burritos, chips & dips, group orders, and
                                    catering services. The platform ensures a smooth and enjoyable ordering process with a
                                    focus on user convenience and efficiency.
                                </p>

                                <div class="mt-1">
                                    <h6 class="text-dark">Key Features</h6>
                                    <ul class="list-unstyled">
                                        <li>
                                            <i class="bi bi-arrow-right-short"></i>
                                            Food Ordering System – Order tacos, burritos, and more with ease.
                                        </li>
                                        <li>
                                            <i class="bi bi-arrow-right-short"></i>
                                            Group Orders – Users can place large group orders effortlessly.
                                        </li>
                                        <li>
                                            <i class="bi bi-arrow-right-short"></i>
                                            Catering Services – Book catering for events and parties.
                                        </li>
                                        <li>
                                            <i class="bi bi-arrow-right-short"></i>
                                            Dynamic Homepage – Personalized offers and promotions.
                                        </li>
                                    </ul>
                                </div>

                                <div class="mt-4">
                                    <h5 class="text-dark">Technology Stack</h5>
                                    <ul class="list-unstyled">
                                        <li>
                                            <i class="bi bi-code-slash"></i><strong>Backend: </strong> <span
                                                class="ml-3"> Powered by PHP-Laravel & MySQL</span>
                                        </li>
                                    </ul>
                                </div>

                                <div class="mt-4">
                                    <h5 class="text-dark">My Role in the Project</h5>
                                    <ul class="list-unstyled">
                                        <li><i class="bi bi-arrow-right-square"></i> Designed and implemented a seamless
                                            order management system to handle individual and bulk orders efficiently.</li>
                                        <li><i class="bi bi-arrow-right-square"></i> Developed a dynamic homepage to enhance user
                                            engagement with personalized recommendations.</li>
                                        <li><i class="bi bi-arrow-right-square"></i> Built a robust cart system for a smooth and
                                            hassle-free checkout process.</li>
                                        <li><i class="bi bi-arrow-right-square"></i> Optimized database performance to improve
                                            speed and reliability.</li>
                                        <li><i class="bi bi-arrow-right-square"></i> Ensured backend scalability and efficiency,
                                            allowing the platform to handle high order volumes without performance issues
                                        </li>
                                    </ul>
                                </div>

                                <!-- Skills Used -->
                                <div class="mt-4 p-3 bg-light rounded shadow-sm">
                                    <h5 class="text-dark">Skills Used:</h5>
                                    <div class="d-flex flex-wrap gap-2 mt-2">
                                        <span class="badge bg-primary d-flex align-items-center">
                                            <i class="bi bi-code-slash me-1"></i> PHP
                                        </span>
                                        <span class="badge bg-danger d-flex align-items-center">
                                            <i class="bi bi-layers me-1"></i> Laravel
                                        </span>
                                        <span class="badge bg-warning text-dark d-flex align-items-center">
                                            <i class="bi bi-filetype-js me-1"></i> JavaScript
                                        </span>
                                        <span class="badge bg-info text-dark d-flex align-items-center">
                                            <i class="bi bi-lightbulb me-1"></i> jQuery
                                        </span>
                                        <span class="badge bg-success d-flex align-items-center">
                                            <i class="bi bi-lightning me-1"></i> Ajax
                                        </span>
                                        <span class="badge bg-primary d-flex align-items-center">
                                            <i class="bi bi-database me-1"></i> MySQL
                                        </span>
                                        <span class="badge bg-secondary d-flex align-items-center">
                                            <i class="bi bi-code me-1"></i> HTML/CSS
                                        </span>
                                        <span class="badge bg-primary d-flex align-items-center">
                                            <i class="bi bi-grid me-1"></i> Bootstrap
                                        </span>
                                        <span class="badge bg-dark d-flex align-items-center">
                                            <i class="bi bi-git me-1"></i> GIT
                                        </span>
                                    </div>
                                </div>

                                <div class="mt-4">
                                    <h5 class="text-dark">How My Work Has Helped the Site</h5>
                                    <ul class="list-unstyled">
                                        <li><i class="bi bi-check-circle"></i> Improved order processing speed, ensuring a
                                            smooth experience for customers.</li>
                                        <li><i class="bi bi-check-circle"></i> Enhanced platform scalability, enabling the
                                            system to handle large group orders and catering requests efficiently.</li>
                                        <li><i class="bi bi-check-circle"></i> Boosted user engagement with a dynamic
                                            homepage featuring promotions and personalized food suggestions.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
