@section('style')
    <style>
        .skill-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 15px;
        }

        .skill-card {
            background: #f8f9fa;
            /* Light background */
            border-radius: 10px;
            padding: 15px;
            transition: 0.3s ease-in-out;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .skill-card:hover {
            background: #e9ecef;
            /* Slightly darker on hover */
            transform: translateY(-5px);
        }

        .skill-icon {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100px;
            max-height: 100px;
        }

        .skill-icon img {
            width: 75px;
            height: 75px;
            object-fit: contain;
        }

        .skill-name {
            margin-top: 10px;
            font-weight: bold;
            color: #333;
            font-size: 14px;
        }
    </style>
@endsection
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

            <div class="row mt-3 gy-4 isotope-container skill-container" data-aos="fade-up" data-aos-delay="200">
                @foreach ($skills as $skill)
                    <div class="col-md-2 col-sm-4 col-6 text-center portfolio-item isotope-item {{ $skill['filter'] }}">
                        <div class="skill-card">
                            <div class="skill-icon">
                                <img src="{{ $skill['image'] }}" class="img-fluid" alt="{{ $skill['name'] }}">
                            </div>
                            <h6 class="skill-name">{{ $skill['name'] }}</h6>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
