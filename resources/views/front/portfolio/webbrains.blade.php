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
                                <a href="#"><i class="bi bi-arrow-up-right-circle"></i><span>Freelance Projects</span></a>
                                <a href="#"><i class="bi bi-arrow-up-right-circle"></i><span class="mr-2">Svaapta IT ALLY Solutions</span></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8 ps-lg-5" data-aos="fade-up" data-aos-delay="200">
                        <div class="tab-content">
                            <!-- Project 1 -->
                            <div class="tab-pane fade show active" id="project1">
                                <h3>Mymofosmile (Framework: Laravel)</h3>
                                {{-- <ul>
                                    <li><i class="bi bi-check-circle"></i> Secure and scalable architecture</li>
                                    <li><i class="bi bi-check-circle"></i> Optimized for high traffic loads</li>
                                    <li><i class="bi bi-check-circle"></i> Seamless user experience</li>
                                </ul> --}}
                                <div class="mt-4">
                                    {{-- <h5 class="text-dark">Key Features:</h5> --}}
                                    <ul class="list-unstyled">
                                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> Developed and upheld an eCommerce platform using PHP, Laravel, WooCommerce, 
                                            and Shopify, integrating EasyPost and Australia Post for seamless shipping, Stripe for 
                                            secure payments, and a POS system for partner transactions.</li>
                                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> Built APIs to support mobile applications, ensuring efficient backend communication.</li>
                                    </ul>
                                </div>
                        
                                <!-- Skills Used -->
                                <div class="mt-4 p-3 bg-light rounded shadow-sm">
                                    <h5 class="text-dark">Skills Used:</h5>
                                    <div class="d-flex flex-wrap gap-2 mt-2">
                                        <span class="badge bg-primary d-flex align-items-center"><i class="bi bi-code-slash me-1"></i> PHP</span>
                                        <span class="badge bg-danger d-flex align-items-center"><i class="bi bi-layers me-1"></i> Laravel</span>
                                        <span class="badge bg-warning text-dark d-flex align-items-center"><i class="bi bi-stack me-1"></i> CodeIgniter</span>
                                        <span class="badge bg-dark d-flex align-items-center"><i class="bi bi-filetype-js me-1"></i> JavaScript</span>
                                        <span class="badge bg-info text-dark d-flex align-items-center"><i class="bi bi-lightbulb me-1"></i> jQuery</span>
                                        <span class="badge bg-success d-flex align-items-center"><i class="bi bi-lightning me-1"></i> Ajax</span>
                                        <span class="badge bg-primary d-flex align-items-center"><i class="bi bi-database me-1"></i> MySQL</span>
                                        <span class="badge bg-secondary d-flex align-items-center"><i class="bi bi-code me-1"></i> HTML/CSS</span>
                                        <span class="badge bg-primary d-flex align-items-center"><i class="bi bi-grid me-1"></i> Bootstrap</span>
                                        <span class="badge bg-dark d-flex align-items-center"><i class="bi bi-git me-1"></i> GIT</span>
                                        <span class="badge bg-danger d-flex align-items-center"><i class="bi bi-kanban me-1"></i> JIRA</span>
                                        <span class="badge bg-secondary d-flex align-items-center"><i class="bi bi-journal-code me-1"></i> ProofHub</span>
                                        <span class="badge bg-info text-dark d-flex align-items-center"><i class="bi bi-plug me-1"></i> REST APIs</span>
                                        <span class="badge bg-success d-flex align-items-center"><i class="bi bi-shield-lock me-1"></i> API Development</span>
                                        <span class="badge bg-warning text-dark d-flex align-items-center"><i class="bi bi-currency-bitcoin me-1"></i> CryptoAPI</span>
                                        <span class="badge bg-dark d-flex align-items-center"><i class="bi bi-credit-card me-1"></i> Stripe</span>
                                        <span class="badge bg-danger d-flex align-items-center"><i class="bi bi-credit-card-2-back me-1"></i> Moneris</span>
                                        <span class="badge bg-primary d-flex align-items-center"><i class="bi bi-wallet me-1"></i> Razorpay</span>
                                    </div>
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
                                <div class="skills-section mt-4">
                                    <h4>Skills Used:</h4>
                                    <div class="d-flex flex-wrap gap-2">
                                        <span class="badge bg-primary">Laravel</span>
                                        <span class="badge bg-danger">React.js</span>
                                        <span class="badge bg-dark">Payment Integration</span>
                                        <span class="badge bg-success">Security & Encryption</span>
                                        <span class="badge bg-info">Data Analytics</span>
                                    </div>
                                </div>
                            </div>
                        
                            <!-- Project 3 -->
                            <div class="tab-pane fade" id="project3">
                                <h3>Project 3: Custom CMS Development</h3>
                                <p>
                                    Built a flexible and modular CMS tailored for businesses to manage content dynamically with
                                    role-based access control.
                                </p>
                                <ul>
                                    <li><i class="bi bi-check-circle"></i> Drag-and-drop content management</li>
                                    <li><i class="bi bi-check-circle"></i> Role-based user access</li>
                                    <li><i class="bi bi-check-circle"></i> SEO-friendly structure</li>
                                </ul>
                        
                                <!-- Skills Used -->
                                <div class="skills-section mt-4">
                                    <h4>Skills Used:</h4>
                                    <div class="d-flex flex-wrap gap-2">
                                        <span class="badge bg-secondary">PHP</span>
                                        <span class="badge bg-warning text-dark">JavaScript</span>
                                        <span class="badge bg-dark">SEO Optimization</span>
                                        <span class="badge bg-primary">Content Management</span>
                                        <span class="badge bg-info">Database Design</span>
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
