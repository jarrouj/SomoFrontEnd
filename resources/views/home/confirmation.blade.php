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
    <main class="confirmation-page">

      <!-- Hero inner -->
      <div class="confirmation">
        <!-- Background -->
        <div class="confirmation__background">
          <img src="./images/bg/bg-cta.jpg" alt="image hero" width="1620" height="560">
        </div>
        <!--/ Background -->
        <!-- Content -->
        <div class="confirmation__container">
          <div class="confirmation__content">
            <h1 class="confirmation__title">Thank you!</h1>
            <p>The page you are looking for has not been found.</p>
            <a href="{{ url('/') }}" class="btn btn__default">Go to home</a>
          </div>
        </div>
        <!--/ Content -->
      </div>
      <!-- Hero inner -->

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
