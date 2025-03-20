 <section id="skills" class="portfolio section">
     <div class="container section-title" data-aos="fade-up">
         <h2>Professional Skills</h2>
         {{-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
            consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat
            sit
            in iste officiis commodi quidem hic quas.</p> --}}
     </div>

     <div class="container">

         <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
             <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                 <li data-filter="*" class="filter-active">All</li>
                 <li data-filter=".filter-programming">Programming Languages</li>
                 <li data-filter=".filter-frameworks">Frameworks</li>
                 <li data-filter=".filter-databases">Databases</li>
                 <li data-filter=".filter-apis">Third Party APIs</li>
                 <li data-filter=".filter-other">Other</li>
             </ul>

             <div class="row mt-3 gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
                 <div class="col-md-2 text-center portfolio-item isotope-item filter-programming">
                    <img src="{{ asset('assets/img/skills/php.png') }}" height="70" width="70" class="img-fluid"
                        alt="">
                    <h6>PHP</h6>
                 </div>
                 <div class="col-md-2 text-center portfolio-item isotope-item filter-programming">
                     <img src="{{ asset('assets/img/skills/html5.png') }}" height="70" width="70"
                         class="img-fluid" alt="">
                     <h6>HTML</h6>
                 </div>
                 <div class="col-md-2 text-center portfolio-item isotope-item filter-programming">
                     <img src="{{ asset('assets/img/skills/css.png') }}" height="70" width="70"
                         class="img-fluid" alt="">
                     <h6>CSS</h6>
                 </div>
                 <div class="col-md-2 text-center portfolio-item isotope-item filter-programming">
                     <img src="{{ asset('assets/img/skills/js.png') }}" height="70" width="70"
                         class="img-fluid" alt="">
                     <h6>Javascript</h6>
                 </div>
                 <div class="col-md-2 text-center portfolio-item isotope-item filter-frameworks">
                     <img src="{{ asset('assets/img/skills/laravel.png') }}" height="70" width="70"
                         class="img-fluid" alt="">
                     <h6>Laravel</h6>
                 </div>
                 <div class="col-md-2 text-center portfolio-item isotope-item filter-frameworks">
                     <img src="{{ asset('assets/img/skills/codeigniter.png') }}" height="70" width="70"
                         class="img-fluid" alt="">
                     <h6>Codeigniter</h6>
                 </div>
                 <div class="col-md-2 text-center portfolio-item isotope-item filter-frameworks">
                     <img src="{{ asset('assets/img/skills/suitecrm.png') }}" height="70" width="70"
                         class="img-fluid" alt="">
                     <h6>SuiteCRM</h6>
                 </div>
                 <div class="col-md-2 text-center portfolio-item isotope-item filter-frameworks">
                     <img src="{{ asset('assets/img/skills/jquery.png') }}" height="70" width="70"
                         class="img-fluid" alt="">
                     <h6>JQuery</h6>
                 </div>
                 <div class="col-md-2 text-center portfolio-item isotope-item filter-frameworks">
                     <img src="{{ asset('assets/img/skills/ajax.png') }}" height="70" width="70"
                         class="img-fluid" alt="">
                     <h6>Ajax</h6>
                 </div>
                 <div class="col-md-2 text-center portfolio-item isotope-item filter-frameworks">
                     <img src="{{ asset('assets/img/skills/bootstrap.png') }}" height="70" width="70"
                         class="img-fluid" alt="">
                     <h6>Bootstrap</h6>
                 </div>
                 <div class="col-md-2 text-center portfolio-item isotope-item filter-databases">
                     <img src="{{ asset('assets/img/skills/mysql.png') }}" height="70" width="70"
                         class="img-fluid" alt="">
                     <h6>MySQL</h6>
                 </div>
                 <div class="col-md-2 text-center portfolio-item isotope-item filter-databases">
                     <img src="{{ asset('assets/img/skills/mongodb.png') }}" height="70" width="70"
                         class="img-fluid" alt="">
                     <h6>MongoDB</h6>
                 </div>

                 <div class="col-md-2 text-center portfolio-item isotope-item filter-apis">
                     <img src="{{ asset('assets/img/skills/stripe.png') }}" height="70" width="70"
                         class="img-fluid" alt="">
                     <h6>Stripe</h6>
                 </div>
                 <div class="col-md-2 text-center portfolio-item isotope-item filter-apis">
                     <img src="{{ asset('assets/img/skills/razorpay.png') }}" height="70" width="70"
                         class="img-fluid" alt="">
                     <h6>Razorpay</h6>
                 </div>
                 <div class="col-md-2 text-center portfolio-item isotope-item filter-apis">
                     <img src="{{ asset('assets/img/skills/ccavenue.png') }}" height="70" width="70"
                         class="img-fluid" alt="">
                     <h6>CC Avenue</h6>
                 </div>
                 <div class="col-md-2 text-center portfolio-item isotope-item filter-other">
                     <img src="{{ asset('assets/img/skills/shopify.png') }}" height="70" width="70"
                         class="img-fluid" alt="">
                     <h6>Shopify</h6>
                 </div>
                 <div class="col-md-2 text-center portfolio-item isotope-item filter-other">
                     <img src="{{ asset('assets/img/skills/github.png') }}" height="70" width="70"
                         class="img-fluid" alt="">
                     <h6>GitHub</h6>
                 </div>

                 <div class="col-md-2 text-center portfolio-item isotope-item filter-other">
                     <img src="{{ asset('assets/img/skills/gitlab.png') }}" height="70" width="70"
                         class="img-fluid" alt="">
                     <h6>GitLab</h6>
                 </div>

                 <div class="col-md-2 text-center portfolio-item isotope-item filter-apis">
                     <img src="{{ asset('assets/img/skills/moneris.png') }}" height="70" width="70"
                         class="img-fluid" alt="">
                     <h6>Moneris</h6>
                 </div>

                 {{-- <div class="col-md-2 text-center portfolio-item isotope-item filter-apis">
                    <img src="{{ asset('assets/img/skills/auspost.png') }}" height="120px" width="120px" class="img-fluid"
                        alt="">
                        <h6>CSS</h6>
                </div> --}}

                 {{-- <div class="col-md-2 text-center portfolio-item isotope-item filter-apis">
                    <img src="{{ asset('assets/img/skills/ups.png') }}" height="175px" width="175px" class="img-fluid mt-4"
                        alt="">
                        <h6>CSS</h6>
                </div> --}}
                 {{-- <div class="col-md-2 text-center portfolio-item isotope-item filter-apis">
                    <img src="{{ asset('assets/img/skills/usps.png') }}" height="125px" width="125px" class="img-fluid mt-3"
                        alt="">
                        <h6>CSS</h6>
                </div> --}}
                 <div class="col-md-2 text-center portfolio-item isotope-item filter-apis">
                     <img src="{{ asset('assets/img/skills/bitgo.png') }}" height="70" width="70"
                         class="img-fluid" alt="">
                     <h6>Bitgo</h6>
                 </div>
                 <div class="col-md-2 text-center portfolio-item isotope-item filter-apis">
                     <img src="{{ asset('assets/img/skills/onmeta.png') }}" height="70" width="70"
                         class="img-fluid" alt="">
                     <h6>Onmeta</h6>
                 </div>
                 <div class="col-md-2 text-center portfolio-item isotope-item filter-other">
                     <img src="{{ asset('assets/img/skills/linux.png') }}" height="70" width="70"
                         class="img-fluid" alt="">
                     <h6>Linux</h6>
                 </div>
                 <div class="col-md-2 text-center portfolio-item isotope-item filter-apis">
                     <img src="{{ asset('assets/img/skills/shiprocket.png') }}" height="70" width="70"
                         class="img-fluid" alt="">
                     <h6>Shiprocket</h6>
                 </div>
                 <div class="col-md-2 text-center portfolio-item isotope-item filter-apis">
                     <img src="{{ asset('assets/img/skills/easypost.png') }}" height="70" width="70"
                         class="img-fluid" alt="">
                     <h6>Easypost</h6>
                 </div>
                 {{-- <div class="col-md-2 text-center portfolio-item isotope-item filter-other">
                    <img src="{{ asset('assets/img/skills/windows.png') }}" height="70" width="70" class="img-fluid mt-3"
                        alt="">
                        <h6>CSS</h6>
                </div>
                <div class="col-md-2 text-center portfolio-item isotope-item filter-other">
                    <img src="{{ asset('assets/img/skills/vscode.png') }}" height="70" width="70" class="img-fluid mt-3"
                        alt="">
                        <h6>CSS</h6>
                </div> --}}
             </div>
         </div>
     </div>
 </section>
