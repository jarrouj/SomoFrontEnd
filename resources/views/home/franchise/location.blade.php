<div class="location">
    <div class="location__container">
      <!-- Section title -->
      <div class="section-title section-title__center">
        <h2 class="section-title__title">Our locations</h2>
      </div>
      <!--/ Section title -->
      <!-- Divider -->
      <div class="divider div-transparent div-arrow-down wow animate__fadeInUp"></div>
      <!--/ Divider -->
      <!-- Location list -->

      <div class="location__list">
        <!-- Location item -->
        @foreach ($locations as $location)
        <div class="location__item">
            {{-- <!-- image -->
            <div class="location__item-image">
              <img src="images/locations/location-1.jpg" alt="location" />
            </div>
            <!--/ image --> --}}

            <div class="location__item-content">
              <h3 class="location__item-title">{!! $location['country'] !!}</h3>
              <p>
                {!! $location['address'] !!}
                <a href="tel:{!! $location['phone_number'] !!}">+{!! $location['phone_number'] !!}</a>, <a href="mailto:{!! $location['email'] !!}">{!! $location['email'] !!}</a>              </p>
              <a class="btn btn__link" href="{!! $location['location_link'] !!}">get direction</a>
            </div>
            <!--/ content -->
          </div>
        @endforeach

        <!--/ Location item -->
        <!-- Location item -->
        {{-- <div class="location__item">
          <!-- image -->
          <div class="location__item-image">
            <img src="images/locations/location-2.jpg" alt="location" />
          </div>
          <!--/ image -->
          <!-- content -->
          <div class="location__item-content">
            <h3 class="location__item-title">Queens</h3>
            <p>
              St Jhons PI/Nostrand Av, Brooklyn,<br> NY 11216, USA <br />
              <a href="#">+1 123 456 7890</a>, <a href="#">brooklyn@beef.com</a>
            </p>
            <a class="btn btn__link" href="#">get direction</a>
          </div>
          <!--/ content -->
        </div> --}}
        <!--/ Location item -->
      </div>
      <!--/ Location list -->
    </div>
  </div>
