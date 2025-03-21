@extends('front.layout')

@section('content')
    @include('front.portfolio.header')

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
                                        <i class="bi bi-arrow-right-circle"></i> <span> CryptoPe (Fintech)</span>
                                    </a>
                                    <a class="nav-link" data-bs-toggle="pill" href="#project2">
                                        <i class="bi bi-arrow-right-circle"></i> <span>MyMofoSmile (E-commerce)</span>
                                    </a>
                                    <a class="nav-link" data-bs-toggle="pill" href="#project3">
                                        <i class="bi bi-arrow-right-circle"></i> <span>Saveon Supplies | We Supply (E-commerce)</span>
                                    </a>
                                    <a class="nav-link" data-bs-toggle="pill" href="#project4">
                                        <i class="bi bi-arrow-right-circle"></i> <span>Santani Steels (CRM)</span>
                                    </a>
                                </ul>
                            </div>
                        </div>

                        <div class="service-box">
                            <h4>Portfolios</h4>
                            <div class="download-catalog">
                                <a href="{{ route('view-portfolio', 'freelance') }}"><i class="bi bi-arrow-up-right-circle"></i><span>Freelance
                                        Projects</span></a>
                                <a href="{{ route('view-portfolio', 'svaapta') }}"><i class="bi bi-arrow-up-right-circle"></i><span class="mr-2">Svaapta IT
                                        ALLY Solutions</span></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8 ps-lg-5" data-aos="fade-up" data-aos-delay="200">
                        <div class="tab-content">
                            <!-- Project 1 -->
                            <div class="tab-pane fade show active" id="project1">
                                <h3>CryptoPe</h3>
                                <p>
                                    CryptoPe is an app designed to facilitate seamless crypto transactions, including both
                                    onramp and offramp services. The app allows users to make transactions using QR codes
                                    and supports crypto buy/sell operations. It features two mobile applications—one for
                                    regular users and the other for merchants—along with a web application for guest users.
                                </p>

                                <div class="mt-1">
                                    <h6 class="text-dark">Core Features</h6>
                                    <ul class="list-unstyled">
                                        <li>
                                            <b>Crypto Buy/Sell: </b> <span class="ml-3"> Users can purchase or
                                                sell cryptocurrencies directly through the app.
                                            </span>
                                        </li>
                                        <li>
                                            <strong>Scan & Pay using Cryptos: </strong> <span class="ml-3"> Users can pay
                                                merchants by scanning a QR code for easy transactions.
                                            </span>
                                        </li>
                                        <li>
                                            <strong>Crypto Deposit and Withdraw: </strong> <span class="ml-3"> Users can
                                                deposit and withdraw their cryptocurrency holdings.
                                            </span>
                                        </li>
                                    </ul>
                                </div>

                                <div class="mt-4">
                                    <h5 class="text-dark">Technology Stack</h5>
                                    <ul class="list-unstyled">
                                        <li>
                                            <i class="bi bi-check-circle"></i><strong>Frontend: </strong> <span
                                                class="ml-3"> Two mobile apps (for users and merchants) and a web app for
                                                guest users.
                                            </span>
                                        </li>
                                        <li>
                                            <i class="bi bi-check-circle"></i><strong>Backend: </strong> <span
                                                class="ml-3"> Admin panel built using PHP, Laravel, and MySQL.
                                            </span>
                                        </li>
                                    </ul>
                                </div>

                                <div class="mt-4">
                                    <h5 class="text-dark">My Role in the Project</h5>
                                    <p>
                                        As the backend developer for CryptoPe, I contributed significantly to both the
                                        frontend and backend architecture. Here’s a breakdown of my contributions:
                                    </p>
                                    <ul class="list-unstyled">
                                        <li><i class="bi bi-check-circle"></i> Created and optimized APIs for mobile apps
                                            to manage core features, including crypto transactions, user authentication, and
                                            payments.</li>
                                        <li><i class="bi bi-check-circle"></i> Worked to optimize the speed and reliability
                                            of crypto transactions, improving overall app performance.
                                        </li>
                                        <li><i class="bi bi-check-circle"></i> Integrated the following third-party
                                            platforms to manage core functionalities:</li>
                                        <ul class="ps-4">
                                            <li><i class="bi bi-arrow-right"></i> BitGo: Secure wallet management, enabling
                                                users to store, buy, and sell cryptocurrencies.</li>
                                            <li><i class="bi bi-arrow-right"></i> OnMeta: KYC (Know Your Customer)
                                                processes, including generating quotes and managing on-ramp and off-ramp
                                                transactions.</li>
                                            <li><i class="bi bi-arrow-right"></i> Signzy: Handling KYC verification for
                                                merchants and guest users.</li>
                                            <li><i class="bi bi-arrow-right"></i> Razorpay: Providing seamless and secure
                                                payment options for crypto transactions.</li>
                                        </ul>
                                        <li><i class="bi bi-check-circle"></i> Developed an admin panel using PHP Laravel
                                            to manage and oversee all functionalities within the platform.
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
                                            <i class="bi bi-credit-card me-1"></i> Razorpay
                                        </span>
                                        <span class="badge bg-info text-dark d-flex align-items-center">
                                            <i class="bi bi-shield-lock me-1"></i> BitGo
                                        </span>
                                        <span class="badge bg-success d-flex align-items-center">
                                            <i class="bi bi-person-check me-1"></i> Onmeta
                                        </span>
                                        <span class="badge bg-danger d-flex align-items-center">
                                            <i class="bi bi-card-checklist me-1"></i> Signzy
                                        </span>
                                    </div>
                                </div>

                                <div class="mt-4">
                                    <h5 class="text-dark">How My Work Has Helped the Site</h5>
                                    <ul class="list-unstyled">
                                        <li><i class="bi bi-check-circle"></i> By implementing easy-to-use APIs and
                                            integrating BitGo and Razorpay, I ensured that the platform provides a smooth
                                            and reliable experience for both regular users and merchants. Users can now
                                            perform crypto transactions securely and efficiently with minimal steps.</li>
                                        <li><i class="bi bi-check-circle"></i> The integration of BitGo for wallet
                                            management and OnMeta for KYC has greatly improved the security of transactions
                                            on the platform, safeguarding user assets and ensuring compliance with
                                            regulations.

                                        </li>
                                        <li><i class="bi bi-check-circle"></i> By implementing the QR-based payment system
                                            and streamlining KYC for merchants, the app has made it easy for businesses to
                                            accept crypto payments quickly and securely, improving their operational
                                            efficiency.</li>
                                        <li><i class="bi bi-check-circle"></i> I optimized the backend using PHP Laravel
                                            and MySQL, allowing the platform to handle large numbers of transactions and
                                            user requests while maintaining high performance and scalability.</li>
                                        <li><i class="bi bi-check-circle"></i> The admin panel allows administrators to
                                            monitor user activity, manage crypto transactions, and oversee the KYC process,
                                            enhancing the overall control and management of the platform.</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Project 2 -->
                            <div class="tab-pane fad" id="project2">
                                <h3>MyMofoSmile <a href="https://au.mymofosmile.com" target="_blank"
                                        class="text-primary"><i class="bi bi-box-arrow-up-right"></i></a></h3>
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
                                                class="ml-3"> Powered by PHP-Laravel & MySQL</span>
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

                            <!-- Project 3 -->
                            <div class="tab-pane fad" id="project3">
                                <h3>Saveon Supplies | We Supply <a href="https://saveon.supplies" target="_blank"
                                        class="text-primary"><i class="bi bi-box-arrow-up-right"></i></a></h3>
                                <p>
                                    Saveon Supplies or WeSupply is an e-commerce platform operating in the US and Canada,
                                    specializing in
                                    pharmacy supplies, healthcare, beauty, and dentistry products. The platform caters to
                                    both regular consumers and retailers such as pharmacists, dentists, and clinics.
                                </p>

                                <div class="mt-4">
                                    <h5 class="text-dark">Technology Stack</h5>
                                    <ul class="list-unstyled">
                                        <li>
                                            <i class="bi bi-check-circle"></i><strong>Frontend: </strong> <span
                                                class="ml-3"> Ecommerce site created using Html/Css & Bootstrap</span>
                                        </li>
                                        <li>
                                            <i class="bi bi-check-circle"></i><strong>Backend: </strong> <span
                                                class="ml-3"> Powered by PHP-Laravel & MySQL</span>
                                        </li>
                                    </ul>
                                </div>

                                <div class="mt-4">
                                    <h5 class="text-dark">My Role in the Project</h5>
                                    <ul class="list-unstyled">
                                        <li><i class="bi bi-check-circle"></i> Built and optimized the backend panel for
                                            managing users, orders, and inventory.
                                        </li>
                                        <li><i class="bi bi-check-circle"></i> Designed and implemented a robust inventory
                                            systems.</li>
                                        <li><i class="bi bi-check-circle"></i> Handled purchase orders, sales orders, and
                                            their complete lifecycle.</li>
                                        <li><i class="bi bi-check-circle"></i> Implemented Moneris Payment Gateway for
                                            seamless transactions.</li>
                                        <li><i class="bi bi-check-circle"></i> Improved SQL queries and database
                                            performance to support high traffic loads efficiently.
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
                                        <span class="badge bg-secondary d-flex align-items-center">
                                            <i class="bi bi-journal-code me-1"></i> ProofHub
                                        </span>
                                        <span class="badge bg-dark d-flex align-items-center">
                                            <i class="bi bi-credit-card me-1"></i> Moneris Payments
                                        </span>
                                    </div>
                                </div>

                                <div class="mt-4">
                                    <h5 class="text-dark">How My Work Has Helped the Site</h5>
                                    <ul class="list-unstyled">
                                        <li><i class="bi bi-check-circle"></i> Optimized database queries, reducing order
                                            processing time significantly.</li>
                                        <li><i class="bi bi-check-circle"></i> Designed a real-time stock update system,
                                            minimizing inventory errors.
                                        </li>
                                        <li><i class="bi bi-check-circle"></i> Integrated Moneris Payment Gateway, ensuring
                                            secure transactions.</li>
                                        <li><i class="bi bi-check-circle"></i> Streamlined the admin panel, making order
                                            and inventory management seamless for business owners.</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Project 3 -->
                            <div class="tab-pane fad" id="project4">
                                <h3>Santani Steels – CRM for Steel Business</h3>
                                <p>
                                    Santani Steels is a custom-built CRM designed specifically for the steel industry. The system streamlines operations by managing inventory, purchases, sales, employees, and other CRM-related modules. It features multiple access levels for different roles, ensuring smooth workflow management.
                                </p>

                                <div class="mt-4">
                                    <h5 class="text-dark">Technology Stack</h5>
                                    <ul class="list-unstyled">
                                        <li>
                                            <i class="bi bi-check-circle"></i><strong>Backend: </strong> <span
                                                class="ml-3"> Powered by PHP-Codeigniter & MySQL</span>
                                        </li>
                                    </ul>
                                </div>

                                <div class="mt-4">
                                    <h5 class="text-dark">My Role in the Project</h5>
                                    <ul class="list-unstyled">
                                        <li><i class="bi bi-check-circle"></i> Designed a system to generate, track, and manage sales and purchase invoices efficiently.
                                        </li>
                                        <li><i class="bi bi-check-circle"></i> Enabled real-time tracking of sales and customer interactions.</li>
                                        <li><i class="bi bi-check-circle"></i> Improved performance and usability of the purchase workflow.</li>
                                        <li><i class="bi bi-check-circle"></i> Implemented Moneris Payment Gateway for
                                            seamless transactions.</li>
                                        <li><i class="bi bi-check-circle"></i> Created detailed reports for sales, inventory, and business analyticss.
                                        </li>
                                        <li><i class="bi bi-check-circle"></i> Refactored SQL queries for faster data retrieval and improved system performance.
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
                                            <i class="bi bi-layers me-1"></i> Codeigniter
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
                                        <span class="badge bg-dark d-flex align-items-center">
                                            <i class="bi bi-git me-1"></i> GIT
                                        </span>
                                        <span class="badge bg-secondary d-flex align-items-center">
                                            <i class="bi bi-journal-code me-1"></i> ProofHub
                                        </span>
                                    </div>
                                </div>

                                <div class="mt-4">
                                    <h5 class="text-dark">How My Work Has Helped the Site</h5>
                                    <ul class="list-unstyled">
                                        <li><i class="bi bi-check-circle"></i> Automated calculations, reducing manual effort and improving response time.</li>
                                        <li><i class="bi bi-check-circle"></i> Optimized workflows, preventing stock issues and delays.
                                        </li>
                                        <li><i class="bi bi-check-circle"></i> Optimized SQL queries and code, reducing page load times and improving system reliability.</li>
                                        <li><i class="bi bi-check-circle"></i> Enhanced reporting features helped the management make data-driven decisions.</li>
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
