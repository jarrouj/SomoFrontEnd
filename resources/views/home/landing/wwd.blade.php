<div class="services-ilustrations">
    <div class="services-ilustrations__container">
        <div class="services-ilustrations__content">
            <!-- wwd Block -->
            @foreach ($wwd as $data)
                <div class="services-ilustrations__card">
                    <div class="services-ilustrations__card-ilustration">
                        <img src="{{ env('API_URL') }}/wwd/{{ $data['icon'] }}" alt="somo restaurant" width="120"
                            height="120">
                        <img class="hover" src="{{ env('API_URL') }}/wwd/{{ $data['icon'] }}" async
                            alt="somo restaurant" width="120" height="120">
                    </div>
                    <div class="services-ilustrations__card-info">
                        <h4>{!! $data['title'] !!}</h4>
                        <p>{!! $data['text'] !!}</p>
                        {{-- <a class="btn btn__link" href="#">read more</a> --}}
                    </div>
                </div>
            @endforeach
            <!--/ wwd Block -->

        </div>
    </div>
</div>
