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
    <main class="franchise-page">

      <!-- Hero inner -->
      @include('home.franchise.hero')
      <!-- Hero inner -->

      <!-- Contact block -->
      @include('home.franchise.contact')
      <!--/ Contact block -->

      <!-- Location block -->
      @include('home.franchise.location')
      <!-- Location block -->

      <!-- Gallery block -->
     @include('home.landing.gallery')
      <!-- Lightbox End -->

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
