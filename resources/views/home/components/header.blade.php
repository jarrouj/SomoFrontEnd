<header id="header" class="header">
    <div class="header__content">
        <!-- Logo -->
        <div class="header__logo">
            <a aria-current="page" class="active" href="{{ url('/') }}">
                <img src="images/somo.png" alt="Somo Restaurant" width="300" />
            </a>
        </div>
        <!--/ Logo -->
        <!-- Nav -->
        <div class="header__nav" role="navigation">
            <!-- Menu -->
            <nav class="header__menu">
                <ul class="header__menu-list">
                    <li>
                        <a aria-current="page" class="active" href="{{ url('/') }}" aria-label="Home">Home</a>

                    </li>
                    @if ($show['about_sh'] == 1)
                        <li>
                            <a aria-current="page" class="active" href="{{ url('/about-us') }}"
                                aria-label="About Us">About Us</a>

                        </li>
                    @endif

                    @if ($show['menu_sh'] == 1 || $show['retail_menu_sh'] == 1)

                        <li class="dropdown simple-dropdown">
                            <a aria-current="page" class="active" aria-label="Pages">Menus</a>
                            <!-- Sub menu -->
                            <ul class="dropdown-menu">
                                @if ($show['menu_sh'] == 1)
                                <li class="dropdown">
                                    <a class="dropdown" data-bs-toggle="dropdown" href="{{ url('/restaurant-menu') }}"
                                        aria-label="restaurant">Restaurant</a>
                                </li>
                                @endif
                                @if ($show['retail_menu_sh'] == 1)

                                <li class="dropdown">
                                    <a class="dropdown" data-bs-toggle="dropdown" href="{{ url('/retail-menu') }}"
                                        aria-label="Retail Menu">Retail Menu</a>
                                </li>
                               @endif
                            </ul>
                            <!--/ Sub menu -->
                        </li>
                        @endif

                    @if ($show['blog_sh'] == 1)
                        <li>
                            <a aria-current="page" class="active" href="{{ url('/blog') }}" aria-label="Blog">Blog</a>

                        </li>
                    @endif
                    <li>
                        <a class="" href="{{ url('/book-now') }}" aria-label="Book Now">Book Now</a>
                    </li>

                    <li>
                        <a class="" href="{{ url('/franchise') }}" aria-label="Franchise">Franchise</a>
                    </li>

                </ul>
            </nav>
            <!--/ Menu -->
            <!-- Mobile -->
            <div class="header__mobile">
                <a href="#menu" is="m-burger" aria-label="Open menu">
                    <i class="fa-solid fa-bars"></i>
                </a>
            </div>
            <!--/ Mobile -->
            <!-- Social -->
            <div class="header__social">
                <ul class="social_icons">
                    @if ($socials['facebook_sh'] == 1)
                        <li>
                            <a href="{!! $socials['facebook'] !!}" target="_blank" aria-label="Facebook">
                                <i class="fa-brands fa-facebook-f" aria-hidden="true"></i>
                            </a>
                        </li>
                    @endif

                    @if ($socials['twitter_sh'] == 1)
                        <li>
                            <a href="{!! $socials['twitter'] !!}" target="_blank" aria-label="Twitter">
                                <i class="fa-brands fa-x-twitter" aria-hidden="true"></i>
                            </a>
                        </li>
                    @endif

                    @if ($socials['instagram_sh'] == 1)
                        <li>
                            <a href="{!! $socials['instagram'] !!}" target="_blank" aria-label="Instagram">
                                <i class="fa-brands fa-instagram" aria-hidden="true"></i>
                            </a>
                        </li>
                    @endif

                    @if ($socials['tiktok_sh'] == 1)
                        <li>
                            <a href="{!! $socials['tiktok'] !!}" target="_blank" aria-label="TikTok">
                                <i class="fa-brands fa-tiktok" aria-hidden="true"></i>
                            </a>
                        </li>
                    @endif

                    @if ($socials['youtube_sh'] == 1)
                        <li>
                            <a href="{!! $socials['youtube'] !!}" target="_blank" aria-label="YouTube">
                                <i class="fa-brands fa-youtube" aria-hidden="true"></i>
                            </a>
                        </li>
                    @endif

                    @if ($socials['dribble_sh'] == 1)
                        <li>
                            <a href="{!! $socials['dribble'] !!}" target="_blank" aria-label="Dribbble">
                                <i class="fa-brands fa-dribbble" aria-hidden="true"></i>
                            </a>
                        </li>
                    @endif

                    @if ($socials['medium_sh'] == 1)
                        <li>
                            <a href="{!! $socials['medium'] !!}" target="_blank" aria-label="Medium">
                                <i class="fa-brands fa-medium" aria-hidden="true"></i>
                            </a>
                        </li>
                    @endif

                    @if ($socials['behance_sh'] == 1)
                        <li>
                            <a href="{!! $socials['behance'] !!}" target="_blank" aria-label="Behance">
                                <i class="fa-brands fa-behance" aria-hidden="true"></i>
                            </a>
                        </li>
                    @endif

                    @if ($socials['discord_sh'] == 1)
                        <li>
                            <a href="{!! $socials['discord'] !!}" target="_blank" aria-label="Discord">
                                <i class="fa-brands fa-discord" aria-hidden="true"></i>
                            </a>
                        </li>
                    @endif

                    @if ($socials['threads_sh'] == 1)
                        <li>
                            <a href="{!! $socials['threads'] !!}" target="_blank" aria-label="Threads">
                                <i class="fa-brands fa-threads" aria-hidden="true"></i>
                            </a>
                        </li>
                    @endif


                    @if ($socials['snapchat_sh'] == 1)
                        <li>
                            <a href="{!! $socials['snapchat'] !!}" target="_blank" aria-label="Snapchat">
                                <i class="fa-brands fa-snapchat" aria-hidden="true"></i>
                            </a>
                        </li>
                    @endif

                    @if ($socials['linkedin_sh'] == 1)
                        <li>
                            <a href="{!! $socials['linkedin'] !!}" target="_blank" aria-label="LinkedIn">
                                <i class="fa-brands fa-linkedin" aria-hidden="true"></i>
                            </a>
                        </li>
                    @endif


                    @if ($socials['whatsapp_sh'] == 1)
                        <li>
                            <a href="{!! $socials['whatsapp'] !!}" target="_blank" aria-label="WhatsApp">
                                <i class="fa-brands fa-whatsapp" aria-hidden="true"></i>
                            </a>
                        </li>
                    @endif


                </ul>
            </div>
            <!--/ Social -->
        </div>
        <!--/ Nav -->
    </div>
</header>
