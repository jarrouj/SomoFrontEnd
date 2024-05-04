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
        <main class="about-page">

            <!-- Hero inner -->
          @include('home.about.hero')
            <!-- Hero inner -->

            <!-- About Us block / Style-2 -->
            @include('home.about.about')
            <!-- /About Us block / Style-2 -->

            <!-- Text-cols block -->
            {{-- <div class="text-cols bg-coarseWool-800">
                <div class="text-cols__container">
                    <div class="text-cols__content">
                        <!-- Text -->
                        <div class="text-cols__col">
                            <p><strong>Beef</strong> Restourant Contrary to popular belief, Lorem Ipsum is not simply
                                random
                                text. It has roots in a piece of classical Latin literature from 45 BC, making it over
                                2000
                                years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia,
                                looked up one of the more obscure Latin words.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias voluptatum, at est
                                quis
                                debitis corrupti aut repellendus, excepturi culpa perspiciatis soluta delectus numquam
                                praesentium nesciunt a molestiae totam dignissimos. Error!</p>
                        </div>
                        <!--/ Text -->
                        <!-- Text -->
                        <div class="text-cols__col">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias voluptatum, at est
                                quis
                                debitis corrupti aut repellendus, excepturi culpa perspiciatis soluta delectus numquam
                                praesentium nesciunt a molestiae totam dignissimos. Error!</p>
                            <p>It has roots in a piece of classical Latin literature from 45 BC, making it over 2000
                                years
                                old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked
                                up
                                one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going
                                through the cites of the word in classical literature.</p>
                        </div>
                        <!--/ Text -->
                    </div>
                </div>
            </div> --}}
            <!-- /Text-cols block -->

            <!-- Testimonials block -->
            {{-- <div class="testimonials">
                <div class="testimonials__container">
                    <!-- Badges block-->
                    <div class="badges">
                        <!-- Badges list -->
                        <div class="badges__list">
                            <!-- Badges -->
                            <div class="badges__item">
                                <img src="images/badges/badges-1.png" alt="badge" width="220" height="114"/>
                            </div>
                            <!--/ Badges -->
                            <!-- Badges -->
                            <div class="badges__item">
                                <img src="images/badges/badges-2.png" alt="badge" width="220" height="114"/>
                            </div>
                            <!--/ Badges -->
                            <!-- Badges -->
                            <div class="badges__item">
                                <img src="images/badges/badges-3.png" alt="badge" width="220" height="114"/>
                            </div>
                            <!--/ Badges -->
                            <!-- Badges -->
                            <div class="badges__item">
                                <img src="images/badges/badges-4.png" alt="badge" width="220" height="114"/>
                            </div>
                            <!--/ Badges -->
                            <!-- Badges -->
                            <div class="badges__item">
                                <img src="images/badges/badges-5.png" alt="badge" width="220" height="114"/>
                            </div>
                            <!--/ Badges -->
                        </div>
                        <!--/ Badges list -->
                    </div>
                    <!-- / Badges block-->
                    <!-- Testimonials -->
                    <div class="testimonials__slider__container">
                        <!-- Slider testimonials -->
                        <div class="testimonials__slider">
                            <!-- Item testimonials -->
                            <div class="testimonials__slider__item">
                                <div class="testimonials__slider__item-comment">
                                    “Because a restaurant’s story is never complete, there is always something new and
                                    wonderful to discover. An evening spent at Benoit is like boarding a golden ship
                                    sailing
                                    through a Parisian night.”
                                </div>
                                <div class="testimonials__slider__item-author">
                                    <h5>Dominicana Rodriguez</h5>
                                    <p>Client of Restaurant</p>
                                </div>
                            </div>
                            <!--/ Item testimonials -->
                            <!-- Item testimonials -->
                            <div class="testimonials__slider__item">
                                <div class="testimonials__slider__item-comment">
                                    “Because a restaurant’s story is never complete, there is always something new and
                                    wonderful to discover. An evening spent at Benoit is like boarding a golden ship
                                    sailing
                                    through a Parisian night.”
                                </div>
                                <div class="testimonials__slider__item-author">
                                    <h5>Jhoe Rodriguez</h5>
                                    <p>Client of Restaurant</p>
                                </div>
                            </div>
                            <!--/ Item testimonials -->
                            <!-- Item testimonials -->
                            <div class="testimonials__slider__item">
                                <div class="testimonials__slider__item-comment">
                                    “Because a restaurant’s story is never complete, there is always something new and
                                    wonderful to discover. An evening spent at Benoit is like boarding a golden ship
                                    sailing
                                    through a Parisian night.”
                                </div>
                                <div class="testimonials__slider__item-author">
                                    <h5>Karina Doe</h5>
                                    <p>Client of Restaurant</p>
                                </div>
                            </div>
                            <!--/ Item testimonials -->
                        </div>
                        <!--/ Slider testimonials -->
                    </div>
                    <!--/ Testimonials -->
                </div>
            </div> --}}
            <!-- /Testimonials block -->

            @if ($show['wwd_sh'] == 1)
                  <!-- Team block style 2 -->
           @include('home.landing.wwd')
           <!-- / Team block style 2 -->
            @endif





            <!-- Contact block -->
         @include('home.components.booking')
            <!--/ Contact block -->

           <!-- Gallery block -->
           @include('home.landing.gallery')

        </main>
        <!--/ Main -->

        <!-- Footer -->
       @include('home.components.footer')
        <!-- /Footer -->

    </div>

    <!-- Menu Mobile -->
   @include('home.components.mobile-menu')
    <!--/ Menu Mobile -->

    <!-- Script -->
    @include('home.components.js')



</body>

</html>
