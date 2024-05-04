<nav id="menu">
    <ul>
        <li class="active">
            <a href="{{ url('/') }}">Home</a>
        </li>

        @if ($show['about_sh'] == 1)
        <li>
            <a href="{{ url('/about-us') }}">About Us</a>
        </li>
        @endif


        @if($show['menu_sh'] == 1)
        <li class="active">
            <span>Menu</span>
            <!-- Sub menu -->
            <ul>
                <li>
                    <a href="{{ url('/restaurant-menu') }}">Restaurant Menu</a>
                </li>
                <li>
                    <a href="{{ url('/retail-menu') }}">Retail Menu</a>
                </li>

            </ul>
            <!--/ Sub menu -->
            @endif
        </li>

        @if ($show['blog_sh'] == 1)
        <li>
            <a href="{{ url('/blog') }}">Blog</a>
        </li>
        @endif

        <li>
            <a href="{{ url('/book-now') }}">Book Now</a>
        </li>

        <li>
            <a href="{{ url('/franchise') }}">Franchise</a>
        </li>

    </ul>
</nav>
