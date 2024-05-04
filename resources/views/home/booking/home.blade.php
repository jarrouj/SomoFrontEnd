<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
 @include('home.components.css')
</head>

<body>
  <div id="page">

    <!-- Topbar -->
   @include('home.components.topbar')
    <!--/ Topbar -->

        <!-- Header -->
        @include('home.components.header')
      <!--/ Header -->

    <!-- Main -->
    <main class="booking-page">

      <!-- Hero inner -->
    @include('home.booking.hero')
      <!-- Hero inner -->

      <!-- booking  -->
      @include('home.about.booking')
      <!--/ booking  -->



    </main>
    <!--/ Main -->

    <!-- Footer -->
  @include('home.components.footer')
    <!--/ Footer -->

  </div>

    <!-- Menu Mobile -->
  @include('home.components.mobile-menu')
  <!--/ Menu Mobile -->

  <!-- Script -->
@include('home.components.js')


</body>

</html>
