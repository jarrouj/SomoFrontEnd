
<div class="menu">
    <div class="menu__container">

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

        <div class="menu-block__dishes">
            <!-- First column -->
            {{-- <div id="menu-items-column-1" class="dishes__list dishes__list--col">
                <!-- Menu items will be dynamically loaded here -->
            </div> --}}
            <!--/ First column -->
        </div>
    </div>
</div>


