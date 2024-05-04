<div class="contact bg-coarseWool-800">
    <div class="contact__container">
        <!-- Contact -->
        <div class="section-title">
            <p class="section-title__subtitle">Reservation</p>
            <h2 class="section-title__title">Book a Table on Time</h2>
            {{-- <p>The first restaurant proprietor is believed to have been one A. Boulanger, a soup vendor, who
                opened his business in 1765.</p> --}}
        </div>
        <!--/ Contact -->
        <!-- Divider -->
        <div class="divider div-transparent div-arrow-down wow animate__fadeInUp"></div>
        <!--/ Divider -->
        <!-- Form -->
        <div class="contact__form">
            <form class="form" action="{{ env('API_URL') }}/api/add_reservation" method="post">
                <div class="form__body">
                    <div class="form_row">
                        <div class="form_field form_field__name">
                            <label for="name">Name:</label>
                            <input type="text" id="name" name="name" placeholder="Name">
                        </div>
                        <div class="form_field form_field__phone">
                            <label for="phone">Phone:</label>
                            <input type="tel" id="phone" name="phone" placeholder="Phone">
                        </div>
                    </div>
                    <div class="form_row">
                        <div class="form_field form_field__email">
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" placeholder="Email">
                        </div>
                        <div class="form_field form_field__person">
                            <label for="person">Persons:</label>
                            <input type="number" id="person" name="number_of_person" placeholder="0">
                        </div>
                        <div class="form_field form_field__date">
                            <label for="birthdate">Date:</label>
                            <input type="date" id="birthdate" name="reservation_day">
                        </div>
                        <div class="form_field form_field__hours">
                            <label for="time">Hours:</label>
                            <input type="time" id="time" name="time">
                        </div>
                    </div>
                    <div class="form_row">
                        <div class="form_field form_field__message">
                            <label for="message">Message:</label>
                            <textarea id="message" name="message" placeholder="Comments"></textarea>
                        </div>
                    </div>
                </div>
                <div class="form_footer">
                    <div class="form_field">
                        <button class="btn btn__default" type="submit" value="submit">Book a Table</button>
                    </div>
                </div>
            </form>
        </div>
        <!--/ Form -->
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.querySelector('.form');

        form.addEventListener('submit', async function(e) {
            e.preventDefault(); // Prevent the form from submitting the traditional way
            const formData = new FormData(this);

            try {
                const response = await fetch('{{ env("API_URL") }}/api/add_reservation', {
                    method: 'POST',
                    body: formData
                });

                const data = await response.json();

                if (data.success) {
                    // Redirect to the confirmation page
                    window.location.href = '/confirmation';
                } else {
                    // Handle errors or unsuccessful operations
                    alert(data.message || 'Failed to make a reservation. Please try again.');
                }
            } catch (error) {
                console.error('Error:', error);
                alert('An error occurred. Please try again.');
            }
        });
    });
</script>
