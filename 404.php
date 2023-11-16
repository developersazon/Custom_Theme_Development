<?php 
    get_header();
    require_once 'banner.php';
 ?>
<!-- header section end here -->
<style>
      .page_404{ padding:40px 0; background:#fff; font-family: 'Arvo', serif;
      }

      .page_404  img{ width:100%;}

      .four_zero_four_bg{
      
      background-image: url(https://cdn.dribbble.com/users/285475/screenshots/2083086/dribbble_1.gif);
          height: 720px;
          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;
      }
      
      .four_zero_four_bg h1{
      font-size:80px;
      }
      
     .four_zero_four_bg h3{
            font-size:80px;
      }
      .note {
            margin-top: -150px;
      }
</style>

<!-- 404 Section start here -->
<section class="page_404 p-5">
          <div class="container">
              <div class="row">	
                    <div class="col-sm-12 col-sm-offset-1">
                          <div class="four_zero_four_bg">
                               <p class="h1 text-primary text-center" style="font-size:80px; font-family: 'Kenia', sans-serif;">Error 404 !</p>
                          </div>
                          <div class="note note-success p-3 mx-5">
                              <p class="h3"><span style="color:blue;"> Look like you're lost! </span> Sorry, but nothing matched your search terms.Please try again with some different keywords. Click here <a href="<?php echo site_url(); ?>" class="btn rounded-pill btn-outline text-primary">Go to HomePage</a></p>
                          </div>
                    </div>
              </div>
          </div>
</section>
<!-- 404 Section end here -->

<!-- footer section end here -->
<?php get_footer(); ?>