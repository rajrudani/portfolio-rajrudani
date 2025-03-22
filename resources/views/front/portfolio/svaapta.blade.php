@extends('front.layout')

@section('content')
    @include('front.portfolio.header')

    <main class="main">
        <div class="page-title" data-aos="fade">
            <div class="container">
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="{{ route('index') }}">Home</a></li>
                        <li class="current">Projects @ Svaapta IT-ALLY Solutions</li>
                    </ol>
                </nav>
                <h1>Projects @ Svaapta IT-ALLY Solutions</h1>
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
                                        <i class="bi bi-arrow-right-circle"></i> <span> Tutor Doctor
                                        </span>
                                    </a>
                                </ul>
                            </div>
                        </div>

                        <div class="service-box">
                            <h4>Portfolios</h4>
                            <div class="download-catalog">
                                <a href="{{ route('view-portfolio', 'webbrains') }}"><i
                                        class="bi bi-arrow-up-right-circle"></i><span>Projects at Webbrains Technologies
                                    </span></a>
                                <a href="{{ route('view-portfolio', 'freelance') }}"><i
                                        class="bi bi-arrow-up-right-circle"></i><span class="mr-2">Freelance
                                        Projects</span></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8 ps-lg-5" data-aos="fade-up" data-aos-delay="200">
                        <div class="tab-content">
                            <!-- Project 1 -->
                            <div class="tab-pane fade show active" id="project1">
                                <h3>Tutor Doctor </h3>
                                <p>
                                    Tutor Doctor is a leading personalized tutoring service that offers one-on-one, in-home,
                                    and online tutoring for students of all ages. The platform provides customized learning
                                    plans across various subjects, helping students improve their academic performance
                                    through personalized instruction.
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
                                            <i class="bi bi-code-slash"></i><strong>Backend: </strong> <span class="ml-3">
                                                Admin panel built using PHP, SuiteCRM, and MySQL.
                                            </span>
                                        </li>
                                    </ul>
                                </div>

                                <div class="mt-4">
                                    <h5 class="text-dark">My Role in the Project</h5>
                                    <p>
                                        As a Back-End Developer, I contributed to enhancing the platform's performance,
                                        reliability, and overall functionality. My key responsibilities included:
                                    </p>
                                    <ul class="list-unstyled">
                                        <li><i class="bi bi-arrow-right-square"></i> <b>Complex SQL Query Optimization &
                                                Reporting</b>
                                        </li>
                                        <ul class="ps-4">
                                            <li><i class="bi bi-dot"></i> Developed and optimized complex SQL queries for
                                                generating detailed reports, ensuring efficient data retrieval and analysis.
                                            </li>
                                            <li><i class="bi bi-dot"></i> Implemented customized reporting solutions,
                                                allowing the management team to track student progress, tutor performance,
                                                and financial insights.</li>
                                        </ul>
                                        <li><i class="bi bi-arrow-right-square"></i> <b>Test Case Development & Quality
                                                Assurance</b>
                                        </li>
                                        <ul class="ps-4">
                                            <li><i class="bi bi-dot"></i> Designed and wrote test cases to ensure thorough
                                                testing of new features, reducing post-deployment bugs.
                                            </li>
                                            <li><i class="bi bi-dot"></i> Worked on unit and integration testing, ensuring
                                                that all critical components functioned correctly before release.</li>
                                        </ul>
                                        <li><i class="bi bi-arrow-right-square"></i> <b>Pre-Production Bug Fixing &
                                                Optimization</b>
                                        </li>
                                        <ul class="ps-4">
                                            <li><i class="bi bi-dot"></i> Identified and resolved pre-production bugs,
                                                enhancing overall system stability before deployment.
                                            </li>
                                            <li><i class="bi bi-dot"></i> Worked on performance optimizations to improve
                                                loading times and ensure a seamless user experience.</li>
                                        </ul>
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
                                        <li><i class="bi bi-check-circle"></i> Optimized SQL queries, reducing report
                                            generation time and improving database efficiency, leading to faster data
                                            insights.</li>
                                        <li><i class="bi bi-check-circle"></i> Writing test cases helped catch and prevent
                                            critical bugs, leading to a more reliable platform with fewer unexpected issues
                                            post-release.</li>
                                        <li><i class="bi bi-check-circle"></i> Addressing pre-production issues ensured a
                                            smooth user experience, minimizing disruptions for students, tutors, and
                                            administrators.</li>
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
