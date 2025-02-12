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
            @include('home.retail-menu.hero')
            <!-- Hero inner -->

            <!-- Menu block-->
            @include('home.retail-menu.retail-menu')
            <!-- /Menu block-->



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
            var activeCategoryId = $('.category__link.active').data('tab');
            getMenuItems(activeCategoryId);

            // Attach event listener to the category buttons
            $('.category__link').on('click', function() {
                $('.category__link').removeClass('active');
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
                url: '/retail-menu/' + categoryId,
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
        var locationButtons = document.querySelectorAll('.locations-tab');
        var locationForm = document.getElementById('locationForm');

        locationButtons.forEach(function(button) {
            button.addEventListener('click', function(event) {
                event.preventDefault();

                // Get the selected location ID from the data attribute
                var selectedLocationId = button.getAttribute('data-tab');

                // Create a hidden input element to store the selected location ID
                var locationIdInput = document.createElement('input');
                locationIdInput.type = 'hidden';
                locationIdInput.name = 'location_id';
                locationIdInput.value = selectedLocationId;

                // Append the hidden input to the form
                locationForm.appendChild(locationIdInput);

                // Submit the form
                locationForm.submit();
            });
        });
    });
</script>

</body>

</html>
