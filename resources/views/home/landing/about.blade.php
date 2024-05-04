<div class="about__image-info">
    <div class="about-content">
        <!-- About image -->
        <div class="about-content__image">
            <img src="{{ env('API_URL') }}/about/{{ $about['img'] }}" async alt="somo restaurant" width="809"
                height="1011" />
        </div>
        <!--/ About image -->
        <!-- About info -->
        <div class="about-content__info">
            <!-- Info title -->
            <div class="section-title">
                <p class="section-title__subtitle">About Us</p>
                <h2 class="section-title__title">{!! $about['title'] !!}</h2>
            </div>
            <!--/ Info title -->
            <!-- Info description-->
            <div class="about-content__description ">
                <p>{!! $about['text'] !!}</p>
                <p>{!! $about['whyus'] !!}</p>
            </div>
            <!--/ Info description-->
            @if ($show['opening_sh'])
                <!-- Opening hours -->
                <div class="opening-hours ">
                    <div class="opening-hours__header">
                        <h3>Opening Hours</h3>
                    </div>
                    <div class="opening-hours__body">
                        @foreach ($openings as $opening)
                            <div class="opening-hours__item">
                                <div class="opening-hours__item-day">{!! $opening['days'] !!}</div>
                                <div class="opening-hours__item-time">{!! $opening['time'] !!}</div>
                            </div>
                        @endforeach

                    </div>
                </div>
                <!--/ Opening hours -->
            @endif
        </div>
        <!--/ About info -->
    </div>
</div>
