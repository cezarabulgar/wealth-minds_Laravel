<section class="contactForm">
  <div class="form-header">
    <h2>Help us reach out</h2>
    <h3>Let us know your contact details</h3>
  <form class="contact-form" method="POST">
     @csrf
    <label for="first_name">First Name</label>
    <input type="text" placeholder="Enter First Name" name="first_name" id="first_name">
    <label for="last_name">Last Name</label>
    <input type="text" placeholder="Enter Last Name" name="last_name" id="last_name">
    <label for="email">E-mail</label>
    <input type="email" placeholder="Enter E-mail (mail@gmail.com)" name="email" id="email">
    <label for="phone">Phone Number</label>
    <input type="text" placeholder="Enter Phone Number" name="phone" id="phone">
    <label for="message">Message</label>
    <input type="text" placeholder="Let us a message" name="message" id="message">

    <button type="submit">Submit</button>
  </form>
  <div id="success-message" style="display: none;">Your message has been sent successfully!</div>
  </div>

  <div class="map"> 
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d182321.8188514326!2d25.92983107585364!3d44.437707259681076!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b1f93abf3cad4f%3A0xac0632e37c9ca628!2sBucharest!5e0!3m2!1sen!2sro!4v1687938321963!5m2!1sen!2sro" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
</section>


<script>
$(document).ready(function() {
  $("#contact-form").on("submit", function(event) {
    event.preventDefault(); // Prevent the default form submission
    
    // You can add your form validation logic here before sending the form data
    
    // Assuming the form is valid, you can use Ajax to submit the form data to the server
    $.ajax({
      type: "POST",
      
      data: $(this).serialize(), // Serialize the form data
      success: function(response) {
        // If the server responds with success
        if (response.success) {
          // Hide the form
          $(".contactForm").hide();
          
          // Show the success message
          $("#success-message").show();
        }
      },
      error: function() {
        // Handle any errors that may occur during the form submission
        console.log("Error submitting the form.");
      }
    });
  });
});
</script>