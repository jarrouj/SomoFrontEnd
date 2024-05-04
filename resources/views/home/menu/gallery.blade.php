<div class="gallery-block">
    <!-- Gallery list -->
    <div class="gallery-block__list">
        <!-- Gallery item -->
        @foreach ($galleries as $gallery)
        <div class="gallery-block__item" data-lightbox>
            <div class="gallery-block__item-image">
                <img src="{{ env('API_URL') }}/gallery/{{ $gallery['img'] }}" alt="somo restaurant" >
                <div class="gallery-block__item-icon">
                    <i class="fa-solid fa-plus" aria-hidden="true"></i>
                </div>
            </div>
        </div>
        @endforeach
        <!--/ Gallery item -->
    </div>
    <!--/ Gallery list -->
</div>
<!--/ Gallery block -->
<!-- Lightbox -->
@foreach ($galleries as $gallery)

<div class="lightbox">
    <div class="lightbox-wrapper">
        <div class="lightbox-content">
            <div class="lightbox-close">&times;</div>
            <img src="{{ env('API_URL') }}/gallery/{{ $gallery['img'] }}" class="lightbox-img" alt="somo restaurant"
                onclick="nextItem()" style="height:500px">
            <div class="lightbox-caption">
                <div class="caption-counter">1 of 6</div>
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
