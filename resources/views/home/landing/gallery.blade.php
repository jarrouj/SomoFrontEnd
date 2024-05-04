<div class="gallery-block">
    <div class="gallery-block__container">
        <!-- Section title -->
        <div class="section-title section-title__no-divider section-title__center">
            <p class="section-title__subtitle">Our Gallery</p>
            <h2 class="section-title__title">Explore The New Tastee</h2>
            {{-- <p>The first restaurant proprietor is believed to have been one A. Boulanger, a soup vendor, who
                opened his business in 1765.</p> --}}
        </div>
        <!--/ Section title -->
    </div>
    <!-- Divider -->
    <div class="divider div-transparent div-arrow-down wow animate__fadeInUp" data-wow-delay="0.7s"></div>
    <!--/ Divider -->
    <div class="gallery-block__list">
        <!-- Gallery item -->
        @foreach ($galleries as $gallery)
            <div class="gallery-block__item" data-lightbox>

                <div class="gallery-block__item-image">
                    <img src="{{ env('API_URL') }}/gallery/{{ $gallery['img'] }}" async alt="somo restaurant"
                        width="382" height="360">
                    <div class="gallery-block__item-icon">
                        <i class="fa-solid fa-plus" aria-hidden="true"></i>
                    </div>
                </div>


            </div>
        @endforeach

        <!--/ Gallery item -->

    </div>
</div>
<!-- Lightbox -->
@foreach ($galleries as $gallery)
    <div class="lightbox">
        <div class="lightbox-wrapper">
            <div class="lightbox-content">
                <div class="lightbox-close">&times;</div>
                <img src="{{ env('API_URL') }}/gallery/{{ $gallery['img'] }}" async class="lightbox-img"
                    alt="Gallery Image" onclick="nextItem()" width="624" height="250">
                <div class="lightbox-caption">
                    <div class="caption-counter">1 of {{ count($galleries) }}</div>
                </div>
            </div>
            <div class="lightbox-controls">
                <div class="lightbox-arrows lightbox-prev" onclick="prevItem()"></div>
                <div class="lightbox-arrows lightbox-next" onclick="nextItem()"></div>
            </div>
        </div>
    </div>
@endforeach



<!-- Lightbox End -->
