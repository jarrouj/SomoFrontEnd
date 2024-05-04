<div class="about-s2">
    <div class="about-s2__container-fluid">
        <div class="about-s2__content">
            <!-- Image -->
            <div class="about-s2__image">
                <img src="{{ env('API_URL') }}/about/{{ $about['img'] }}" async alt="somo restaurant" width="568"
                    height="880" />
            </div>
            <!--/ Image -->
            <!-- Text -->
            <div class="about-s2__text">
                <!-- Section title -->
                <div class="section-title">
                    <p class="section-title__subtitle">About Us</p>
                    <h2 class="section-title__title">{!! $about['title'] !!}</h2>
                    {{-- <p>The first restaurant proprietor is believed to have been one A. Boulanger, a soup
                        vendor, who opened his business in 1765.</p> --}}
                </div>
                <!--/ Section title -->
                <!-- Divider -->
                <div class="divider div-transparent div-arrow-down wow animate__fadeInUp"></div>
                <!--/ Divider -->
                <!-- Content -->
                <div class="about-content__description">
                    <p>{!! $about['text'] !!}</p>
                    <p>{!! $about['whyus'] !!}</p>
                </div>
                <!--/ Content -->
                @if ($show['menu_sh'] == 1)
                    <a class="btn btn__link" href="{{ url('/restaurant-menu') }}">Our Menu</a>
                @endif
            </div>
            <!--/ Text -->
            <!-- Image -->
            <div class="about-s2__image">
                <img src="{{ env('API_URL') }}/about/{{ $about['img'] }}" alt="somo restaurant" width="568"
                    height="880" />
            </div>
            <!--/ Image -->
        </div>
    </div>
</div>
