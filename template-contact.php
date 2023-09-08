<?php /* Template Name: Contact Page */
      get_header(); 
      require_once 'banner.php';
?>

<div id="contact-information" class="my-5">
    <div class="container">
         <div class="row">
              <div class="col-md-8 col-lg-6" id="left_side">
                   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d233667.8468283609!2d90.12432404899612!3d23.780873858847244!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b087026b81%3A0x8fa563bbdd5904c2!2sDhaka!5e0!3m2!1sen!2sbd!4v1694178782399!5m2!1sen!2sbd" width="550" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
              <div class="col-md-4 col-lg-6" id="right_side">
                    <!-- row 1 start -->
                    <div class="row hover-shadow p-2 rounded m-2">
                          <div class="col-md-2 col-lg-2 mb-3">
                               <i class="fas fa-envelope fa-3x"></i>
                          </div>
                          <div class="col-md-10 col-lg-10">
                               <span class="text-primary fw-bold fst-italic">Email</span>
                               <p>contact@sazonmahmud.net</p>
                          </div>
                    </div>
                    <!-- row 1 end -->

                    <!-- row 2 start -->
                    <div class="row hover-shadow p-2 rounded m-2">
                          <div class="col-md-2 col-lg-2 mb-3">
                               <i class="fas fa-phone fa-3x"></i>
                          </div>
                          <div class="col-md-10 col-lg-10">
                               <span class="text-primary fw-bold fst-italic">Phone</span>
                               <p>(+880) 1529-564661</p>
                          </div>
                    </div>
                    <!-- row 2 end -->
                    
                    <!-- row 3 start -->
                    <div class="row hover-shadow p-2 rounded m-2">
                          <div class="col-md-2 col-lg-2 mb-3">
                               <i class="fas fa-map fa-3x"></i>
                          </div>
                          <div class="col-md-10 col-lg-10">
                               <span class="text-primary fw-bold fst-italic">Location</span>
                               <p>Mirpur, Dhaka, Bangladesh</p>
                          </div>
                    </div>
                    <!-- row 3 end -->
                    
                    <!-- row 4 start -->
                    <div class="row hover-shadow p-2 rounded m-2">
                          <div class="col-md-2 col-lg-2 mb-3">
                               <i class="fas fa-link fa-3x"></i>
                          </div>
                          <div class="col-md-10 col-lg-10">
                               <span class="text-primary fw-bold fst-italic">Website URL</span>
                               <p>www.portfolio.sazonmahmud.net</p>
                          </div>
                    </div>
                    <!-- row 4 end -->
              </div>
         </div>
    </div>
</div>

<?php get_footer(); ?>
