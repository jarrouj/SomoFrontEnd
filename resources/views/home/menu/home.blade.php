<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    @include('home.components.css')

    <style>
        .custom-select-style {
            background-color: black;
            color: white;
            width: 100%;
            border-radius: 27px;
            margin-bottom: 30px;
        }

        .page-wrapper {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .form-wrapper {
            max-width: 400px;
        }

        /* .form-group {
            text-align: center;
        } */
    </style>

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
        <main class="menu-page">

            <!-- Hero inner -->
            @include('home.menu.hero')
            <!-- Hero inner -->

            <!-- Menu block-->
            @include('home.menu.menu')
            <!-- /Menu block-->

            {{-- <!-- Slider Special Offers block -->
            <div class="special-offers bg-coarseWool-800">
                <div class="special-offers__container">

                    <!-- Title Section -->
                    <div class="section-title section-title__center">
                        <h2 class="section-title__title">Try our Special Offers</h2>
                        <p>The first restaurant proprietor is believed to have been one A. Boulanger, a soup vendor, who
                            opened his business in 1765.</p>
                    </div>
                    <!--/ Title Section -->

                    <!-- Slider Special Offers -->
                    <div class="special-offers__slider">
                        <div class="special-offers__content">
                            <!-- Item slider -->
                            <div>
                                <div class="special-offers__item">
                                    <!-- image -->
                                    <div class="special-offers__item-image">
                                        <img src="images/special-offers/special-offers-1.jpg" alt="special-offers"
                                            width="678" height="426">
                                    </div>
                                    <!--/ image -->
                                    <!-- info -->
                                    <div class="special-offers__item-info">
                                        <h3>Four cheese garlic bread <span>$32.00</span></h3>
                                        <p>Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae
                                            erat
                                            consequat auctor eu in elit. </p>
                                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis
                                            bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.
                                            Duis
                                            sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan
                                            ipsum
                                            velit. </p>
                                        <a class="btn btn__link" href="#">add order</a>
                                    </div>
                                    <!--/ info -->
                                </div>
                            </div>
                            <!--/ Item slider -->
                            <!-- Item slider -->
                            <div>
                                <div class="special-offers__item">
                                    <!-- image -->
                                    <div class="special-offers__item-image">
                                        <img src="images/special-offers/special-offers-2.jpg" alt="special-offers"
                                            width="678" height="426">
                                    </div>
                                    <!--/ image -->
                                    <!-- info -->
                                    <div class="special-offers__item-info">
                                        <h3>Nduja Pork Chicken Terrine <span>$41.00</span></h3>
                                        <p>Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae
                                            erat
                                            consequat auctor eu in elit. </p>
                                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis
                                            bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.
                                            Duis
                                            sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan
                                            ipsum
                                            velit. </p>
                                        <a class="btn btn__link" href="#">add order</a>
                                    </div>
                                    <!--/ info -->
                                </div>
                            </div>
                            <!--/ Item slider -->
                            <!-- Item slider -->
                            <div>
                                <div class="special-offers__item">
                                    <!-- image -->
                                    <div class="special-offers__item-image">
                                        <img src="images/special-offers/special-offers-3.jpg" alt="special-offers"
                                            width="678" height="426">
                                    </div>
                                    <!--/ image -->
                                    <!-- info -->
                                    <div class="special-offers__item-info">
                                        <h3>Crab With Curry Sources <span>$18.00</span></h3>
                                        <p>Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae
                                            erat
                                            consequat auctor eu in elit. </p>
                                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis
                                            bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.
                                            Duis
                                            sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan
                                            ipsum
                                            velit. </p>
                                        <a class="btn btn__link" href="#">add order</a>
                                    </div>
                                    <!--/ info -->
                                </div>
                            </div>
                            <!--/ Item slider -->
                        </div>

                        <!-- Nav slider -->
                        <div class="slider-nav-arrows">
                            <!-- Next -->
                            <a href="javascript:void(0);" aria-label="Next attractions"
                                class="slider-arrow slick-next JS-slick-nextSlider"></a>
                            <!--/ Next -->
                            <!-- Prev -->
                            <a href="javascript:void(0);" aria-label="Prev attractions"
                                class="slider-arrow slick-prev JS-slick-prevSlider"></a>
                            <!--/ Prev -->
                        </div>
                        <!--/ Nav slider -->

                    </div>
                    <!-- Slider Special Offers -->

                </div>
            </div>
            <!--/ Slider Special Offers block -->

            <!-- Cta Block 2 -->
            <div class="cta-2 cta-2__right">
                <div class="cta-2__overlayer"></div>
                <div class="cta-2__container">
                    <div class="cta-2__content">
                        <div class="cta-2__header">
                            <h2>Coffee Products</h2>
                        </div>
                        <!-- Divider -->
                        <div class="divider div-transparent div-stopper wow animate__fadeInUp" data-wow-delay="0.7s">
                        </div>
                        <!--/ Divider -->
                        <div class="cta-2__body">
                            <p>The public dining room that came ultimately to be known as the restaurant originated in
                                France.</p>
                        </div>
                        <div class="cta-2__footer">
                            <a class="btn btn__default" href="#">View More</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Cta Block 2 -->

            <!-- Badges block-->
            <div class="badges ">
                <!-- Badges list -->
                <div class="badges__list">
                    <!-- Badges -->
                    <div class="badges__item">
                        <img src="images/badges/badges-1.png" alt="badge" width="220" height="114" />
                    </div>
                    <!--/ Badges -->
                    <!-- Badges -->
                    <div class="badges__item">
                        <img src="images/badges/badges-2.png" alt="badge" width="220" height="114" />
                    </div>
                    <!--/ Badges -->
                    <!-- Badges -->
                    <div class="badges__item">
                        <img src="images/badges/badges-3.png" alt="badge" width="220" height="114" />
                    </div>
                    <!--/ Badges -->
                    <!-- Badges -->
                    <div class="badges__item">
                        <img src="images/badges/badges-4.png" alt="badge" width="220" height="114" />
                    </div>
                    <!--/ Badges -->
                    <!-- Badges -->
                    <div class="badges__item">
                        <img src="images/badges/badges-5.png" alt="badge" width="220" height="114" />
                    </div>
                    <!--/ Badges -->
                </div>
                <!--/ Badges list -->
            </div>
            <!-- /Badges block--> --}}

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


    <script>
        $(document).ready(function() {
            // Initially load menu for the active category
            var activeCategoryId = $('.tabs__link.active').data('tab');
            getMenuItems(activeCategoryId);

            // Attach event listener to the category buttons
            $('.tabs__link').on('click', function() {
                $('.tabs__link').removeClass('active');
                $(this).addClass('active');
                activeCategoryId = $(this).data('tab');
                getMenuItems(activeCategoryId);
            });

            // Debounce resize function to avoid too many calls during window resizing
            let resizeTimer;
            $(window).resize(function() {
                clearTimeout(resizeTimer);
                resizeTimer = setTimeout(function() {
                    getMenuItems(activeCategoryId);
                }, 250);
            });
        });

        function getMenuItems(categoryId) {
            if (!categoryId) return; // Prevent running if no category ID is available

            $.ajax({
                url: '/menu/' + categoryId,
                method: 'GET',
                success: function(response) {
                    updateMenuDisplay(response);
                },
                error: function(xhr, status, error) {
                    console.error("Error loading menu items: " + error);
                }
            });
        }

        function updateMenuDisplay(response) {
            var columnsContainer = $('.menu-block__dishes');
            columnsContainer.empty();

            var itemCount = response.length;
            var screenWidth = window.innerWidth;
            var columnCount, dishWidth;
            if (screenWidth <= 768) {
                columnCount = 1;
                dishWidth = '100%';
            } else if (screenWidth <= 1045) {
                columnCount = 2;
                dishWidth = '300px';
            } else {
                columnCount = 2;
                dishWidth = '500px';
            }
            var columnWidth = 100 / columnCount;

            for (var i = 0; i < columnCount; i++) {
                var columnHtml = '<div class="dishes__list dishes__list--col" style="width: ' + columnWidth +
                    '%; padding: 0 10px; margin-top: 20px;">';
                var startIndex = i * (Math.ceil(itemCount / columnCount));
                var endIndex = Math.min((i + 1) * (Math.ceil(itemCount / columnCount)), itemCount);

                for (var j = startIndex; j < endIndex; j++) {
                    var menuItem = response[j];
                    columnHtml += constructMenuItem(menuItem, dishWidth);
                }
                columnHtml += '</div>';
                columnsContainer.append(columnHtml);
            }
        }

        function constructMenuItem(menuItem, width) {
            return '<div class="dish" style="width: ' + width + ';">' +
                '<div class="dish__content">' +
                '<h4 class="dish__title">' + menuItem.name + '</h4>' +
                '<span class="dish__price">' + menuItem.price + '</span>' +
                '</div>' +
                '<div class="dish__description">' +
                '<span>' + (menuItem.ingredients === null ? '' : menuItem.ingredients) + '</span>' +
                '</div>' +
                '</div>';
        }
    </script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var locationSelect = document.getElementById('locationSelect');
        var locationForm = document.getElementById('locationForm');

        locationSelect.addEventListener('change', function() {
            locationForm.submit();
        });
    });
</script>

</body>

</html>
