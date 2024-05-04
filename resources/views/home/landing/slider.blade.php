<!-- Item slider -->
@foreach ($landings as $landing)
    <div class="slider-hero__item">
        <img src="{{ env('API_URL') }}/landing/{{ $landing['img'] }}" async alt="somo restaurant" width="1920"
            height="1080" />
        <div class="slider-hero__item-content">
            <div class="slider-hero__item-info">
                <h1 class="title">{!! $landing['title'] !!}</h1>
                <p>{!! $landing['text'] !!}</p>
                <a class="btn btn__default" href="{{ url('/restaurant-menu') }}">See Our Menu</a>
            </div>
        </div>
    </div>
@endforeach

<!--/ Item slider -->

</div>
<!--/ Slider list -->

<!-- Thumbnail list -->
<div class="thumbnail">
    <!-- Slider thumbnail -->
    <div class="slider-thumbnail">
        <!-- Item slider -->
        @foreach ($landings as $landing)
            <div class="slider-thumbnail__item">
                <div class="slider-thumbnail__item-image">
                    <img src="{{ env('API_URL') }}/landing/{{ $landing['img'] }}" async alt="somo restaurant"
                        width="151" height="200" />
                </div>
            </div>
        @endforeach
        <!--/ Item slider -->



    </div>
    <!--/ Slider thumbnail -->
</div>
<!--/ Thumbnail list -->
