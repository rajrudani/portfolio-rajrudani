@section('style')
    <style>
        .skill-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 15px;
        }

        .skill-card {
            position: relative;
            background: #f8f9fa;
            border-radius: 10px;
            padding: 15px;
            transition: 0.3s ease-in-out;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
            overflow: hidden;
        }

        .skill-card:hover {
            transform: translateY(-5px);
        }

        /* Skill Icon */
        .skill-icon {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100px;
            max-height: 100px;
            transition: 0.3s ease-in-out;
        }

        .skill-icon img {
            width: 100px;
            height: 75px;
            object-fit: contain;
            transition: 0.3s ease-in-out;
        }

        /* Overlay effect */
        .skill-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            color: #fff;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transform: scale(0.9);
            transition: opacity 0.3s ease-in-out, transform 0.3s ease-in-out;
            padding: 10px;
            text-align: center;
        }

        .skill-card:hover .skill-overlay {
            opacity: 1;
            transform: scale(1);
        }

        .skill-name {
            font-weight: bold;
            font-size: 16px;
            color: white;
        }

        .skill-description {
            font-size: 12px;
            margin-top: 5px;
        }
    </style>
@endsection
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
                    <div class="col-md-2 col-sm-4 col-6 text-center portfolio-item isotope-item {{ $skill['filter'] }}">
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
