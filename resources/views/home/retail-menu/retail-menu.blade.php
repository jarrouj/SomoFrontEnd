{{-- <div class="menu">
    <div class="menu__container">

        <!-- tabs -->
        <div class="tabs">
            @foreach ($categories as $category)
            <button class="tabs__link @if ($loop->first) active @endif" data-tab="{{$category['id']}}">
                {!! $category['name'] !!}
            </button>
            @endforeach
        </div> --}}
        <!--/ tabs -->

        <!-- tab panel's -->
        {{-- <div class="tabs-content">
            <div id="tab-content" class="tabs-content__item active">
                <!-- Dishes list -->
                <div class="dishes__list dishes__list--col">
                    <!-- Item dish -->
                    <!-- The menu items will be dynamically loaded here -->
                </div>
                <!--/ Dishes list -->
            </div>
            <!--/ tab panel -->
        </div> --}}
        <!--/ tab panel's -->
        {{-- <div id="menu"></div>

    </div>
</div> --}}
<div class="menu">
    <div class="menu__container">
        @php
        $selectedLocationId = session('selected_location_id', '');
        $firstActiveCategoryId = null;
        foreach ($categories as $category) {
            foreach ($catLoc as $data) {
                if ($data['category_id'] == $category['id'] && $data['location_id'] == $selectedLocationId) {
                    $firstActiveCategoryId = $category['id'];
                    break 2; // Stop both loops once the first matching category is found
                }
            }
        }
    @endphp


<div class="page-wrapper">
    <div class="form-wrapper">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="mb-3 text-center">
                        <form action="/save-location" method="POST" id="locationForm">
                            @csrf
                            {{-- <label for="location" class="form-label">Select Location</label> --}}
                            <select name="location_id" id="locationSelect" class="form-select rounded-pill custom-select-style" required>
                                <option selected disabled>Select Location</option>
                                @foreach ($locations as $location)
                                    <option value="{{ $location['id'] }}" {{ $selectedLocationId == $location['id'] ? 'selected' : '' }}>
                                        {{ $location['country'] }}
                                    </option>
                                @endforeach
                            </select>
                            {{-- <button type="submit">Submit</button> --}}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


        <!-- tabs -->
        <div class="tabs">
            @foreach ($categories as $category)
                @foreach ($catLoc as $data)
                    @if ($data['category_id'] == $category['id'] && $data['location_id'] == $selectedLocationId)
                        <button class="tabs__link {{ $firstActiveCategoryId == $category['id'] ? 'active' : '' }}" data-tab="{{ $category['id'] }}">
                            {!! $category['name'] !!}
                        </button>
                    @endif
                @endforeach
            @endforeach
        </div>

        <!--/ tabs -->

        <div class="menu-block__dishes" style="display: flex;">
            <!-- First column -->
            <div id="menu-items-column-1" class="dishes__list dishes__list--col" style="flex: 1; padding: 0 10px;">
                <!-- Menu items will be dynamically loaded here -->
            </div>
            <!--/ First column -->
        </div>
    </div>
</div>
