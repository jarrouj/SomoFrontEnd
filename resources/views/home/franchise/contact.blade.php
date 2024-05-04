<div class="contact bg-coarseWool-800">
    <div class="contact__container">
      <!-- Contact -->
      <div class="section-title">
        <h2 class="section-title__title">Contact Us</h2>
      </div>
      <!--/ Contact -->
      <!-- Divider -->
      <div class="divider div-transparent div-arrow-down wow animate__fadeInUp"></div>
      <!--/ Divider -->
      <!-- Form -->
      <div class="contact__form">
        <form class="form" action="{{ url('/contact-mail')}}" method="post">
            @csrf
          <div class="form__body">
            <div class="form_field form_field__subject">
              <label for="subject">Subject:</label>
              <input type="text" id="subject" name="subject" placeholder="Subject">
            </div>

              <div class="form_field form_field__title">
                <label for="title">Title:</label>
                <input type="text" id="title" name="title" placeholder="Title">
              </div>

              <div class="form_field form_field__text">
                <label for="text">Text:</label>
                <textarea id="text" name="text" placeholder="Text"></textarea>
              </div>
          </div>
          <div class="form_footer">
            <div class="form_field">
              <button class="btn btn__default" type="submit" value="submit">Submit</button>
            </div>
          </div>
        </form>
      </div>
      <!--/ Form -->
    </div>
  </div>
