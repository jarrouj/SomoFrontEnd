<div class="blog__posts">

    @foreach ($blogs as $blog)
    @if ($loop->iteration % 2 == 1)
        <!-- First Style: Odd iterations -->
        <div class="post">
            <div class="post__content">
                <div class="post__image">
                    <img src="{{ env('API_URL') }}/blog/{{ $blog['img'] }}" alt="somo restaurant">
                </div>
                <div class="post__info">
                    <div class="post__info-text">
                        <h2 class="post__info-title">
                            {!! $blog['title'] !!}
                        </h2>
                        <h4 class="post__author">
                           {!! $blog['subtitle'] !!}
                        </h4>
                        <div class="post__info-excerpt">
                            <p>{!! $blog['text'] !!}</p>
                        </div>
                    </div>
                    <div class="post__footer">
                        <a href="{!! $blog['link'] !!}" class="btn btn__link">Read more</a>
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
                </div>
            </div>
        </div>
    @else
        <div class="post">
            <div class="post__content">
                <div class="post__image">
                    <img src="{{ env('API_URL') }}/blog/{{ $blog['img'] }}" alt="somo restaurant">
                </div>
                <div class="post__info">

                    <div class="post__info-text">

                        <h2 class="post__info-title">
                            {!! $blog['title'] !!}

                        </h2>
                        <h4 class="post__author">
                            {!! $blog['subtitle'] !!}

                        </h4>
                        <div class="post__info-excerpt">
                            <p>{!! $blog['text'] !!}</p>
                        </div>
                    </div>
                    <div class="post__footer">
                        <a href="{!! $blog['link'] !!}" class="btn btn__link">Read more</a>
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
                </div>
            </div>
        </div>
    @endif
@endforeach





</div>
