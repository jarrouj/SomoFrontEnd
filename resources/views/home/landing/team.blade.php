<div class="team-block bg-coarseWool-800">
    <div class="team-block__container">
        <!-- Section title -->
        <div class="section-title section-title__no-divider section-title__center">
            <p class="section-title__subtitle">Team of Restaurant</p>
            <h2 class="section-title__title">Meet Our Professionals</h2>
        </div>
        <!--/ Section title -->
    </div>
    <!-- Divider -->
    <div class="divider div-transparent div-arrow-down wow animate__fadeInUp" data-wow-delay="0.7s"></div>
    <!--/ Divider -->
    <!-- Team grid -->
    <div class="team-block__grid">
        <!-- Item team -->
        <div class="team-block__description bg-coarseWool-900">
            <div class="team-block__icon">
                <img src="{{asset('./images/other/icon-chefs.png')}}" alt="somo restaurant" width="54" height="54">
            </div>
            <div class="team-block__text">
                <p>"Meet the heart and soul behind our culinary magic – our exceptional team! With a blend of passion, creativity, and expertise, they bring flavor to life and ensure every dining experience is unforgettable." </p>
            </div>
        </div>
        <!--/ Item team -->
        <!-- Item team -->
        @foreach ($teams as $team)
        <div class="team-block__team">
            <div class="card-team">
                <div class="card-team__image">
                    <img src="{{ env('API_URL') }}/team/{{ $team['img'] }}" alt="somo restaurant" width="424" height="468">
                </div>
                <div class="card-team__info">
                    <h4 class="card-team__name">{!! $team['name'] !!}</h4>
                    <p class="card-team__position">{!! $team['role'] !!}</p>

                </div>
            </div>
        </div>
        @endforeach

        <!--/ Item team -->
        <!-- Item team -->
        {{-- <div class="team-block__team">
            <div class="card-team">
                <div class="card-team__image">
                    <img src="./images/team/team-2.jpg" alt="team" width="424" height="468">
                </div>
                <div class="card-team__info">
                    <h4 class="card-team__name">Werner Kuchler</h4>
                    <p class="card-team__position">Head Chef</p>
                    <ul class="social_icons">
                        <li>
                            <a href="http://www.facebook.com" target="_blank" aria-label="Facebook">
                                <i class="fa-brands fa-facebook-f" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="http://www.twitter.com" target="_blank" aria-label="Twitter">
                                <i class="fa-brands fa-x-twitter" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="http://www.instagram.com" target="_blank" aria-label="Instagram">
                                <i class="fa-brands fa-instagram" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--/ Item team -->
        <!-- Item team -->
        <div class="team-block__team">
            <div class="card-team">
                <div class="card-team__image">
                    <img src="./images/team/team-3.jpg" alt="team" width="424" height="468">
                </div>
                <div class="card-team__info">
                    <h4 class="card-team__name">Werner Kuchler</h4>
                    <p class="card-team__position">Head Chef</p>
                    <ul class="social_icons">
                        <li>
                            <a href="http://www.facebook.com" target="_blank" aria-label="Facebook">
                                <i class="fa-brands fa-facebook-f" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="http://www.twitter.com" target="_blank" aria-label="Twitter">
                                <i class="fa-brands fa-x-twitter" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="http://www.instagram.com" target="_blank" aria-label="Instagram">
                                <i class="fa-brands fa-instagram" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--/ Item team -->
        <!-- Item team -->
        <div class="team-block__team">
            <div class="card-team">
                <div class="card-team__image">
                    <img src="./images/team/team-4.jpg" alt="team" width="424" height="468">
                </div>
                <div class="card-team__info">
                    <h4 class="card-team__name">Werner Kuchler</h4>
                    <p class="card-team__position">Head Chef</p>
                    <ul class="social_icons">
                        <li>
                            <a href="http://www.facebook.com" target="_blank" aria-label="Facebook">
                                <i class="fa-brands fa-facebook-f" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="http://www.twitter.com" target="_blank" aria-label="Twitter">
                                <i class="fa-brands fa-x-twitter" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="http://www.instagram.com" target="_blank" aria-label="Instagram">
                                <i class="fa-brands fa-instagram" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--/ Item team -->
        <!-- Item team -->
        <div class="team-block__team">
            <div class="card-team">
                <div class="card-team__image">
                    <img src="./images/team/team-5.jpg" alt="team" width="424" height="468">
                </div>
                <div class="card-team__info">
                    <h4 class="card-team__name">Werner Kuchler</h4>
                    <p class="card-team__position">Head Chef</p>
                    <ul class="social_icons">
                        <li>
                            <a href="http://www.facebook.com" target="_blank" aria-label="Facebook">
                                <i class="fa-brands fa-facebook-f" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="http://www.twitter.com" target="_blank" aria-label="Twitter">
                                <i class="fa-brands fa-x-twitter" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="http://www.instagram.com" target="_blank" aria-label="Instagram">
                                <i class="fa-brands fa-instagram" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--/ Item team -->
        <!-- Item team -->
        <div class="team-block__team">
            <div class="card-team">
                <div class="card-team__image">
                    <img src="./images/team/team-6.jpg" alt="Werner Kuchler" width="424" height="468">
                </div>
                <div class="card-team__info">
                    <h4 class="card-team__name">Werner Kuchler</h4>
                    <p class="card-team__position">Head Chef</p>
                    <ul class="social_icons">
                        <li>
                            <a href="http://www.facebook.com" target="_blank" aria-label="Facebook">
                                <i class="fa-brands fa-facebook-f" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="http://www.twitter.com" target="_blank" aria-label="Twitter">
                                <i class="fa-brands fa-x-twitter" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="http://www.instagram.com" target="_blank" aria-label="Instagram">
                                <i class="fa-brands fa-instagram" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--/ Item team --> --}}
    </div>
    <!-- Team grid -->
</div>
