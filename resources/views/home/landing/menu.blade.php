<div class="menu-block">

    <div class="menu-block__overlayer"></div>
    <div class="menu-block__container">
        <!-- Section title -->
        <div class="section-title section-title__no-divider section-title__center">
            <p class="section-title__subtitle">This week's specials</p>
            <h2 class="section-title__title">from our Menu</h2>
            {{-- <p>The first restaurant proprietor is believed to have been one A. Boulanger, a soup vendor, who
                opened his business in 1765.</p> --}}
        </div>
        <!--/ Section title -->
        <!-- Divider -->
        <div class="divider div-transparent div-arrow-down wow animate__fadeInUp" data-wow-delay="0.7s">
        </div>
        <!-- /Divider -->

        @php
        $selectedLocationId = session('selected_location_id', '');
        if (empty($selectedLocationId)) {
            foreach ($locations as $location) {
                if ($location['country'] === 'Lebanon') {
                    $selectedLocationId = $location['id'];
                    break;
                }
            }
        }

        $firstActiveCategoryId = null;
        foreach ($categories as $category) {
            foreach ($catLoc as $data) {
                if ($data['category_id'] == $category['id'] && $data['location_id'] == $selectedLocationId) {
                    $firstActiveCategoryId = $category['id'];
                    break 2;
                }
            }
        }
    @endphp

<div class="tabs">
    <form action="/save-location" method="POST" id="locationForm">
        @csrf
        @foreach ($locations as $location)
            <button class="location__link {{ $selectedLocationId == $location['id'] ? 'active' : '' }} locations-tab" data-tab="{{ $location['id'] }}">
                {{ $location['country'] }}
            </button>
        @endforeach
    </form>
</div>


        <!-- tabs -->
        <div class="tabs">
            @foreach ($categories as $category)
                @foreach ($catLoc as $data)
                    @if ($data['category_id'] == $category['id'] && $data['location_id'] == $selectedLocationId)
                        <button class="tabs__link {{ $firstActiveCategoryId == $category['id'] ? 'active' : '' }} category__link" data-tab="{{ $category['id'] }}">
                            {!! $category['name'] !!}
                        </button>
                    @endif
                @endforeach
            @endforeach
        </div>

        <!--/ tabs -->

        <!-- Menu block -->
        <div class="menu-block__dishes">
            <!-- Dishes list -->
            <div class="dishes__list dishes__list--col">

            </div>
            <!--/ First Column of Dishes -->



            <!--/ Dishes list -->
        </div>
        <!--/ Menu block -->
        <a class="btn btn__default" href="{{ url('/restaurant-menu') }}">View Our Menu</a>
    </div>
</div>
