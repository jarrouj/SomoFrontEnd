<footer class="footer">
    <div class="footer__container">
        <div class="footer__content">
            <div class="footer__logo">
                <!-- Logo -->
                <a aria-current="page" class="active" href="{{ url('/') }}">
                    <img src="images/somo.png" alt="Somo Restaurant" width="180" height="77" />
                </a>
                <!--/ Logo -->
            </div>
            <div class="footer__info">
                <!-- Address -->
                <div class="footer__address">
                    <p>{!! $socials['location'] !!}</p>
                </div>
                <div class="footer__info-contact">
                    <a href="tel:+{!! $socials['phone'] !!}">Phone: +{!! $socials['phone'] !!}</a>
                    <a href="mailto:{!! $socials['email'] !!}">Email: {!! $socials['email'] !!}</a>
                </div>
                <!--/ Address -->
            </div>
            <div class="footer__social">
                <!-- social-icons -->
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
                <!--/ Social-icons -->
            </div>
        </div>
    </div>
    <div class="footer__button">
        <!-- Copyright -->
        <div class="footer__copyright">
            <p>
                &copy; {{ Date('Y') }} Somo Restaurant
                <br />
                All Rights Reserved | Powered By
                <a href="https://www.codergize.com" target="_blank">CoderGize</a>
            </p>
        </div>
        <!--/ Copiright -->
        <!-- Links legal -->
        {{-- <div class="footer__legal">
            <ul>
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#"></a>
                </li>
                <li>
                    <a href="#">Terms of Use</a>
                </li>
                <li>
                    <a href="#"></a>
                </li>
            </ul>
        </div> --}}
        <!--/ Links legal -->
    </div>
    <!-- To-top -->
    <button onclick="topFunction()" id="myBtn" class="btn-to-top" title="Go to top">
        <i class="fas fa-angle-double-up"></i>
    </button>
    <!--/ To-top -->
</footer>
