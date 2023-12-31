<?php
    //Template Name:Template - Contact Page
           get_header(); 
           require_once 'banner.php';
?>


<!-- Contact section start here -->
  <section id="contact" class="contact my-5">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2 class="py-2">Get In Touch</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="far fa-map"></i>
                <h4>Location:</h4>
                <p>Mirpur Dhaka, Bangladesh</p>
              </div>

              <div class="email">
                <i class="fas fa-envelope"></i>
                <h4>Email:</h4>
                <p>contact@sazonmahmud.net</p>
              </div>

              <div class="phone">
                <i class="fas fa-phone"></i>
                <h4>Call:</h4>
                <p>(+880) 1521-564661</p>
              </div>
               <!-- map -->
               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14602.7004073795!2d90.3354044352932!3d23.794581237061912!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c0e96fce29dd%3A0x6ccd9e51aba9e64d!2sMirpur-1%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1694258068461!5m2!1sen!2sbd" width="100%" height="290" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class=""><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
<!-- Contact section end here -->

<?php get_footer(); ?>
