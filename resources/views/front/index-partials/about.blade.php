<section id="about" class="about section">
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>About</h2>
        <p>
            Experienced Web Developer with over 4 years in PHP, Laravel, CodeIgniter, JavaScript/jQuery, and MySQL.
            Specializing in e-commerce and fintech solutions, I lead projects, manage teams, and deliver
            performance-driven applications on time. Focused on performance optimization, secure coding, and enhancing
            user experience, I create scalable, robust web solutions and stay ahead of industry trends.
        </p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4 justify-content-center">
            <div class="col-lg-4">
                <img src="assets/img/profile-img3.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-lg-8 content">
                <h2>Raj Rudani - Web Developer | PHP Developer</h2>
                 
                <div class="row mt-4">
                    <div class="col-lg-6">
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <strong>Birthdate:</strong> <span>{{ $personalData['birthdate'] }}</span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>LinkedIn:</strong> <span><a
                                        href="{{ $socialMedia['linkedin'] }}" target="_blank">{{ $personalData['name'] }} -
                                        Profile</a></span>
                            </li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>{{ $personalData['phone'] }}</span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Location:</strong> <span>{{ $personalData['location'] }}</span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Total Experiance:</strong> <span>4 Years</span></li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <strong>Nationality:</strong> <span>{{ $personalData['nationality'] }}</span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>{{ $personalData['degree'] }}</span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong>
                                <span>rajrudani1234@gmail.com</span>
                            </li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Languages:</strong> <span>English, Hindi, Gujarati</span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong>
                                <span>Available</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <p class="py-3">
                    I am a Web Developer with over four years of experience in building dynamic, responsive, and
                    scalable web applications using PHP, Laravel, JavaScript, and modern front-end frameworks.
                    Specializing in e-commerce and fintech solutions, I have led projects, managed teams, and delivered
                    high-performance applications. My expertise includes database management (MySQL, MongoDB), version
                    control (GitHub), and CRM solutions like SugarCRM.

                    Skilled in working across Linux, Windows, and macOS, I focus on performance optimization, secure
                    coding, and enhancing user experience. I am dedicated to providing efficient, scalable solutions and
                    staying ahead of industry trends.
                </p>
            </div>
        </div>
    </div>
</section>
