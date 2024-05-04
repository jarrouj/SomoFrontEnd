  <!-- Topbar -->
  <div class="topbar">
      <!-- Topbar Left -->
      <div class="topbar__left">
          <!-- Address -->
          <div class="topbar__address">
              <a aria-current="page" class="active" target="_blank" href="{!! $socials['map'] !!}"">
                  <i class="fa-solid fa-location-dot" aria-hidden="true"></i>
                  {!! $socials['location'] !!}
              </a>
          </div>
          <!--/ Address -->
      </div>
      <!--/ Topbar Left -->
      <!-- Topbar Rigth -->
      <div class="topbar__right">
          <!-- Phone -->
          <div class="topbar__phone">
              <a class="" href="tel:+{!! $socials['phone'] !!}">
                  <i class="fa-solid fa-phone" aria-hidden="true"></i>
                  +{!! $socials['phone'] !!}
              </a>
          </div>
          <!--/ Phone -->
          <!-- Email -->
          <div class="topbar__email">
              <a class="" href="mailto:{!! $socials['email'] !!}">
                  <i class="fa-solid fa-envelope" aria-hidden="true"></i>
                  {!! $socials['email'] !!}
              </a>
          </div>
          <!--/ Email -->
      </div>
      <!--/ Topbar Rigth -->
  </div>
  <!--/ Topbar -->
