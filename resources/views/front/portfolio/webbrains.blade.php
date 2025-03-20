@extends('front.layout')

@section('content')
    <header id="header" class="header d-flex flex-column justify-content-center">
        <i class="header-toggle d-xl-none bi bi-list"></i>
        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="{{ route('index') }}#hero" class="active"><i class="bi bi-house navicon"></i><span>Home</span></a></li>
                <li><a href="{{ route('index') }}#about"><i class="bi bi-person navicon"></i><span>About</span></a></li>
                <li><a href="{{ route('index') }}#skills"><i class="bi bi-graph-up-arrow navicon"></i><span> Skills</span></a></li>
                <li><a href="{{ route('index') }}#resume"><i class="bi bi-file-earmark-text navicon"></i><span>Resume</span></a></li>
                <li><a href="{{ route('index') }}#portfolio"><i class="bi bi-hdd-stack navicon"></i><span>Portfolio</span></a></li>
                <li><a href="{{ route('index') }}#contact"><i class="bi bi-envelope navicon"></i><span>Contact</span></a></li>
            </ul>
        </nav>
    </header>

    <main class="main">
        <div class="page-title" data-aos="fade">
            <div class="container">
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li class="current">Webbrains Technologies</li>
                    </ol>
                </nav>
                <h1>Webbrains Technologies</h1>
            </div>
        </div>

        <section id="service-details" class="service-details section">
            <div class="container">
                <div class="row gy-5">
                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-box">
                            <h4>Projects</h4>
                            <div class="services-list">
                                <a href="#" class="active"><i class="bi bi-arrow-right-circle"></i><span>Web
                                        Design</span></a>
                                <a href="#"><i class="bi bi-arrow-right-circle"></i><span>Web Design</span></a>
                                <a href="#"><i class="bi bi-arrow-right-circle"></i><span>Product
                                        Management</span></a>
                                <a href="#"><i class="bi bi-arrow-right-circle"></i><span>Graphic Design</span></a>
                                <a href="#"><i class="bi bi-arrow-right-circle"></i><span>Marketing</span></a>
                            </div>
                        </div><!-- End Services List -->

                        <div class="service-box">
                            <h4>Download Catalog</h4>
                            <div class="download-catalog">
                                <a href="#"><i class="bi bi-filetype-pdf"></i><span>Catalog PDF</span></a>
                                <a href="#"><i class="bi bi-file-earmark-word"></i><span>Catalog DOC</span></a>
                            </div>
                        </div><!-- End Services List -->
                    </div>

                    <div class="col-lg-8 ps-lg-5" data-aos="fade-up" data-aos-delay="200">
                        <img src="assets/img/services.jpg" alt="" class="img-fluid services-img">
                        <h3>Temporibus et in vero dicta aut eius lidero plastis trand lined voluptas dolorem ut voluptas
                        </h3>
                        <p>
                            Blanditiis voluptate odit ex error ea sed officiis deserunt. Cupiditate non consequatur et
                            doloremque consequuntur. Accusantium labore reprehenderit error temporibus saepe perferendis
                            fuga doloribus vero. Qui omnis quo sit. Dolorem architecto eum et quos deleniti officia qui.
                        </p>
                        <ul>
                            <li><i class="bi bi-check-circle"></i> <span>Aut eum totam accusantium voluptatem.</span></li>
                            <li><i class="bi bi-check-circle"></i> <span>Assumenda et porro nisi nihil nesciunt
                                    voluptatibus.</span></li>
                            <li><i class="bi bi-check-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea</span></li>
                        </ul>
                        <p>
                            Est reprehenderit voluptatem necessitatibus asperiores neque sed ea illo. Deleniti quam sequi
                            optio iste veniam repellat odit. Aut pariatur itaque nesciunt fuga.
                        </p>
                        <p>
                            Sunt rem odit accusantium omnis perspiciatis officia. Laboriosam aut consequuntur recusandae
                            mollitia doloremque est architecto cupiditate ullam. Quia est ut occaecati fuga. Distinctio ex
                            repellendus eveniet velit sint quia sapiente cumque. Et ipsa perferendis ut nihil. Laboriosam
                            vel voluptates tenetur nostrum. Eaque iusto cupiditate et totam et quia dolorum in. Sunt
                            molestiae ipsum at consequatur vero. Architecto ut pariatur autem ad non cumque nesciunt qui
                            maxime. Sunt eum quia impedit dolore alias explicabo ea.
                        </p>
                    </div>
                </div>
            </div>
        </section><!-- /Service Details Section -->
    </main>
@endsection
