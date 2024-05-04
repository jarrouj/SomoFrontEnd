<div class="team-block-2">
    <div class="team-block-2__container">
        <!-- Section title -->
        <div class="section-title">
            <p class="section-title__subtitle">Our Chefs</p>
            <h2 class="section-title__title">We Have The Best</h2>
            {{-- <p>The first restaurant proprietor is believed to have been one A. Boulanger, a soup vendor, who
                opened his business in 1765.</p> --}}
        </div>
        <!--/ Section title -->
        <!-- Divider -->
        <div class="divider div-transparent div-arrow-down wow animate__fadeInUp"></div>
        <!--/ Divider -->
        <!-- Teams -->
        <div class="team-block-2__grid">
            <!-- Item team -->
            @foreach ($wwds as $wwd)
                <div class="team-block-2__team">
                    <div class="card-team-2">
                        <div class="card-team-2__image">
                            <img src="{{ env('API_URL') }}/wwd/{{ $wwd['icon '] }}" async alt="somo restaurant"
                                width="424" height="468">

                        </div>
                        <div class="card-team-2__info">
                            <h4 class="card-team-2__name">{!! $wwd['name'] !!}</h4>
                            <p class="card-team-2__position">{!! $wwd['role'] !!}</p>
                        </div>
                    </div>
                </div>
            @endforeach
            <!--/ Item team -->

        </div>
        <!--/ Teams -->
    </div>
</div>
