<section id="skills" class="portfolio section">
    <div class="container section-title" data-aos="fade-up">
        <h2>Professional Skills</h2>
        <p>I specialize in building scalable, high-performance web solutions with expertise in programming languages, frameworks, databases, and APIs. Committed to clean coding, security best practices, and performance optimization, I stay updated with industry trends to deliver efficient and user-friendly applications.</p>
    </div>

    <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
            <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".filter-programming">Coding Languages</li>
                <li data-filter=".filter-frameworks">Frameworks | Libraries</li>
                <li data-filter=".filter-databases">Databases</li>
                <li data-filter=".filter-apis">Third Party APIs</li>
                <li data-filter=".filter-other">Other</li>
            </ul>

            <div class="row mt-3 gy-4 isotope-container skill-container" data-aos="fade-up" data-aos-delay="200">
                @foreach ($skills as $skill)
                    <div class="col-md-2 col-sm-4 col-4 text-center portfolio-item isotope-item {{ $skill['filter'] }}">
                        <div class="skill-card">
                            <div class="skill-icon">
                                <img src="{{ $skill['image'] }}" class="img-fluid" alt="{{ $skill['name'] }}" @isset ($skill['width'])
                                    style="width:{{ $skill['width'] }} !important;"
                                @endisset >
                            </div>
                            {{-- <h6 class="skill-name">{{ $skill['name'] }}</h6> --}}
                            <div class="skill-overlay">
                                <h6 class="skill-name">{{ $skill['name'] }}</h6>
                                <p class="skill-description">{{ $skill['description'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
</section>
