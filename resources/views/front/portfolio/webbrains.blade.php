@extends('front.layout')

@section('content')
    <header id="header" class="header d-flex flex-column justify-content-center">
        <i class="header-toggle d-xl-none bi bi-list"></i>
        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="{{ route('index') }}#hero" class="active"><i class="bi bi-house navicon"></i><span>Home</span></a>
                </li>
                <li><a href="{{ route('index') }}#about"><i class="bi bi-person navicon"></i><span>About</span></a></li>
                <li><a href="{{ route('index') }}#skills"><i
                            class="bi bi-graph-up-arrow navicon"></i><span>Skills</span></a></li>
                <li><a href="{{ route('index') }}#resume"><i
                            class="bi bi-file-earmark-text navicon"></i><span>Resume</span></a></li>
                <li><a href="{{ route('index') }}#portfolio"><i
                            class="bi bi-hdd-stack navicon"></i><span>Portfolio</span></a></li>
                <li><a href="{{ route('index') }}#contact"><i class="bi bi-envelope navicon"></i><span>Contact</span></a>
                </li>
            </ul>
        </nav>
    </header>

    <main class="main">
        <div class="page-title" data-aos="fade">
            <div class="container">
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="{{ route('index') }}">Home</a></li>
                        <li class="current">Webbrains Technologies</li>
                    </ol>
                </nav>
                <h1>Webbrains Technologies</h1>
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
                                        <i class="bi bi-arrow-right-circle"></i> <span>Mymofosmile</span>
                                    </a>
                                    <a class="nav-link" data-bs-toggle="pill" href="#project2">
                                        <i class="bi bi-arrow-right-circle"></i> <span>CryptoPe App</span>
                                    </a>
                                    <a class="nav-link" data-bs-toggle="pill" href="#project3">
                                        <i class="bi bi-arrow-right-circle"></i> <span>We Supply</span>
                                    </a>
                                    <a class="nav-link" data-bs-toggle="pill" href="#project4">
                                        <i class="bi bi-arrow-right-circle"></i> <span>Santani Steels </span>
                                    </a>
                                </ul>
                            </div>
                        </div>

                        <div class="service-box">
                            <h4>Portfolios</h4>
                            <div class="download-catalog">
                                <a href="#"><i class="bi bi-arrow-up-right-circle"></i><span>Freelance
                                        Projects</span></a>
                                <a href="#"><i class="bi bi-arrow-up-right-circle"></i><span class="mr-2">Svaapta IT
                                        ALLY Solutions</span></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8 ps-lg-5" data-aos="fade-up" data-aos-delay="200">
                        <div class="tab-content">
                            <!-- Project 1 -->
                            <div class="tab-pane fade show active" id="project1">
                                <h3>MyMofoSmile <a href="https://au.mymofosmile.com" target="_blank" class="text-primary"><i
                                            class="bi bi-box-arrow-up-right"></i></a></h3>
                                <p>
                                    MyMofoSmile is an Australia-based company that also operates in the USA. The company
                                    specializes in
                                    creating custom night guards and offering dentist-grade dental appliances at a fraction
                                    of the cost.
                                    Their goal is to provide high-quality, affordable solutions for customers seeking
                                    professional dental protection.
                                </p>

                                <div class="mt-4">
                                    <h5 class="text-dark">Technology Stack</h5>
                                    <ul class="list-unstyled">
                                        <li>
                                            <i class="bi bi-check-circle"></i><strong>Frontend: </strong> <span
                                                class="ml-3"> Managed by WooCommerce & Shopify</span>
                                        </li>
                                        <li>
                                            <i class="bi bi-check-circle"></i><strong>Backend: </strong> <span
                                                class="ml-3"> Powered by PHP-Laravel</span>
                                        </li>
                                    </ul>
                                </div>

                                <div class="mt-4">
                                    <h5 class="text-dark">My Role in the Project</h5>
                                    <ul class="list-unstyled">
                                        <li><i class="bi bi-check-circle"></i> Designed and implemented a robust backend
                                            system using Laravel.</li>
                                        <li><i class="bi bi-check-circle"></i> Architected an optimized database structure
                                            for scalability.</li>
                                        <li><i class="bi bi-check-circle"></i> Developed a dedicated partner sales
                                            functionality for pharmacies.</li>
                                        <li><i class="bi bi-check-circle"></i> Integrated a POS system for partners.</li>
                                        <li><i class="bi bi-check-circle"></i> Implemented shipment carrier integrations:
                                        </li>
                                        <ul class="ps-4">
                                            <li><i class="bi bi-arrow-right"></i> Australia: Australia Post</li>
                                            <li><i class="bi bi-arrow-right"></i> USA: EasyPost</li>
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
                                        <span class="badge bg-dark d-flex align-items-center">
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
                                        <span class="badge bg-secondary d-flex align-items-center">
                                            <i class="bi bi-journal-code me-1"></i> ProofHub
                                        </span>
                                        <span class="badge bg-info text-dark d-flex align-items-center">
                                            <i class="bi bi-plug me-1"></i> REST APIs
                                        </span>
                                        <span class="badge bg-success d-flex align-items-center">
                                            <i class="bi bi-shield-lock me-1"></i> API Development
                                        </span>
                                        <span class="badge bg-dark d-flex align-items-center">
                                            <i class="bi bi-credit-card me-1"></i> Stripe
                                        </span>
                                        <span class="badge bg-info text-dark d-flex align-items-center">
                                            <i class="bi bi-cart-check me-1"></i> WooCommerce
                                        </span>
                                        <span class="badge bg-success d-flex align-items-center">
                                            <i class="bi bi-shop me-1"></i> Shopify
                                        </span>
                                        <span class="badge bg-danger d-flex align-items-center">
                                            <i class="bi bi-truck me-1"></i> Australia Post
                                        </span>
                                        <span class="badge bg-primary d-flex align-items-center">
                                            <i class="bi bi-truck me-1"></i> EasyPost
                                        </span>

                                    </div>
                                </div>

                                <div class="mt-4">
                                    <h5 class="text-dark">How My Work Has Helped the Site</h5>
                                    <ul class="list-unstyled">
                                        <li><i class="bi bi-check-circle"></i> Streamlined order processing with structured
                                            backend and POS integration.</li>
                                        <li><i class="bi bi-check-circle"></i> Improved partner management with a dedicated
                                            sales system.</li>
                                        <li><i class="bi bi-check-circle"></i> Optimized shipping workflow through seamless
                                            carrier integration.</li>
                                        <li><i class="bi bi-check-circle"></i> Enhanced scalability and performance with an
                                            efficient Laravel-based backend.</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Project 2 -->
                            <div class="tab-pane fade" id="project2">
                                <h3>Project 2: Fintech Application</h3>
                                <p>
                                    Developed a secure fintech application with real-time transaction processing,
                                    multi-layered security, and an analytics dashboard.
                                </p>
                                <ul>
                                    <li><i class="bi bi-check-circle"></i> Real-time transaction tracking</li>
                                    <li><i class="bi bi-check-circle"></i> Robust security & encryption</li>
                                    <li><i class="bi bi-check-circle"></i> Custom user reports & analytics</li>
                                </ul>

                                <!-- Skills Used -->
                                <div class="mt-4 p-3 bg-light rounded shadow-sm">
                                    <h5 class="text-dark">Skills Used:</h5>
                                    <div class="d-flex flex-wrap gap-2 mt-2">
                                        <span class="badge bg-primary d-flex align-items-center"><i
                                                class="bi bi-code-slash me-1"></i> PHP</span>
                                        <span class="badge bg-danger d-flex align-items-center"><i
                                                class="bi bi-layers me-1"></i> Laravel</span>
                                        <span class="badge bg-warning text-dark d-flex align-items-center"><i
                                                class="bi bi-stack me-1"></i> CodeIgniter</span>
                                        <span class="badge bg-dark d-flex align-items-center"><i
                                                class="bi bi-filetype-js me-1"></i> JavaScript</span>
                                        <span class="badge bg-info text-dark d-flex align-items-center"><i
                                                class="bi bi-lightbulb me-1"></i> jQuery</span>
                                        <span class="badge bg-success d-flex align-items-center"><i
                                                class="bi bi-lightning me-1"></i> Ajax</span>
                                        <span class="badge bg-primary d-flex align-items-center"><i
                                                class="bi bi-database me-1"></i> MySQL</span>
                                        <span class="badge bg-secondary d-flex align-items-center"><i
                                                class="bi bi-code me-1"></i> HTML/CSS</span>
                                        <span class="badge bg-primary d-flex align-items-center"><i
                                                class="bi bi-grid me-1"></i> Bootstrap</span>
                                        <span class="badge bg-dark d-flex align-items-center"><i
                                                class="bi bi-git me-1"></i> GIT</span>
                                        <span class="badge bg-danger d-flex align-items-center"><i
                                                class="bi bi-kanban me-1"></i> JIRA</span>
                                        <span class="badge bg-secondary d-flex align-items-center"><i
                                                class="bi bi-journal-code me-1"></i> ProofHub</span>
                                        <span class="badge bg-info text-dark d-flex align-items-center"><i
                                                class="bi bi-plug me-1"></i> REST APIs</span>
                                        <span class="badge bg-success d-flex align-items-center"><i
                                                class="bi bi-shield-lock me-1"></i> API Development</span>
                                        <span class="badge bg-warning text-dark d-flex align-items-center"><i
                                                class="bi bi-currency-bitcoin me-1"></i> CryptoAPI</span>
                                        <span class="badge bg-dark d-flex align-items-center"><i
                                                class="bi bi-credit-card me-1"></i> Stripe</span>
                                        <span class="badge bg-danger d-flex align-items-center"><i
                                                class="bi bi-credit-card-2-back me-1"></i> Moneris</span>
                                        <span class="badge bg-primary d-flex align-items-center"><i
                                                class="bi bi-wallet me-1"></i> Razorpay</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Project 3 -->
                            <div class="tab-pane fade" id="project3">
                                <h3>Project 3: Custom CMS Development</h3>
                                <p>
                                    Built a flexible and modular CMS tailored for businesses to manage content dynamically
                                    with
                                    role-based access control.
                                </p>
                                <ul>
                                    <li><i class="bi bi-check-circle"></i> Drag-and-drop content management</li>
                                    <li><i class="bi bi-check-circle"></i> Role-based user access</li>
                                    <li><i class="bi bi-check-circle"></i> SEO-friendly structure</li>
                                </ul>

                                <!-- Skills Used -->
                                <div class="mt-4 p-3 bg-light rounded shadow-sm">
                                    <h5 class="text-dark">Skills Used:</h5>
                                    <div class="d-flex flex-wrap gap-2 mt-2">
                                        <span class="badge bg-primary d-flex align-items-center"><i
                                                class="bi bi-code-slash me-1"></i> PHP</span>
                                        <span class="badge bg-danger d-flex align-items-center"><i
                                                class="bi bi-layers me-1"></i> Laravel</span>
                                        <span class="badge bg-warning text-dark d-flex align-items-center"><i
                                                class="bi bi-stack me-1"></i> CodeIgniter</span>
                                        <span class="badge bg-dark d-flex align-items-center"><i
                                                class="bi bi-filetype-js me-1"></i> JavaScript</span>
                                        <span class="badge bg-info text-dark d-flex align-items-center"><i
                                                class="bi bi-lightbulb me-1"></i> jQuery</span>
                                        <span class="badge bg-success d-flex align-items-center"><i
                                                class="bi bi-lightning me-1"></i> Ajax</span>
                                        <span class="badge bg-primary d-flex align-items-center"><i
                                                class="bi bi-database me-1"></i> MySQL</span>
                                        <span class="badge bg-secondary d-flex align-items-center"><i
                                                class="bi bi-code me-1"></i> HTML/CSS</span>
                                        <span class="badge bg-primary d-flex align-items-center"><i
                                                class="bi bi-grid me-1"></i> Bootstrap</span>
                                        <span class="badge bg-dark d-flex align-items-center"><i
                                                class="bi bi-git me-1"></i> GIT</span>
                                        <span class="badge bg-danger d-flex align-items-center"><i
                                                class="bi bi-kanban me-1"></i> JIRA</span>
                                        <span class="badge bg-secondary d-flex align-items-center"><i
                                                class="bi bi-journal-code me-1"></i> ProofHub</span>
                                        <span class="badge bg-info text-dark d-flex align-items-center"><i
                                                class="bi bi-plug me-1"></i> REST APIs</span>
                                        <span class="badge bg-success d-flex align-items-center"><i
                                                class="bi bi-shield-lock me-1"></i> API Development</span>
                                        <span class="badge bg-warning text-dark d-flex align-items-center"><i
                                                class="bi bi-currency-bitcoin me-1"></i> CryptoAPI</span>
                                        <span class="badge bg-dark d-flex align-items-center"><i
                                                class="bi bi-credit-card me-1"></i> Stripe</span>
                                        <span class="badge bg-danger d-flex align-items-center"><i
                                                class="bi bi-credit-card-2-back me-1"></i> Moneris</span>
                                        <span class="badge bg-primary d-flex align-items-center"><i
                                                class="bi bi-wallet me-1"></i> Razorpay</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
