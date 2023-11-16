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
          height: 500px;
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
            
        .link_404{			 
          padding: 10px 20px;
          display: inline-block;
        }
        .contant_box_404{ margin-top:-50px;}
</style>

<!-- 404 Section start here -->
<section class="page_404 p-5" style="background-color:EFEFEF;">
          <div class="container">
              <div class="row">	
                    <div class="col-sm-12">
                        <div class="col-sm-10 col-sm-offset-1  text-center">
                            <div class="four_zero_four_bg">
                              <h1 class="text-center h2">404</h1>
                            </div>
                            <div class="contant_box_404">
                              <h3 class="h3"> Look like you're lost</h3>
                              <p class="h4">Sorry, but nothing matched your search terms. Please try again with some different keywords.</p>
                              <a href="<?php echo site_url(); ?>" class="link_404 rounded-pill btn-outline-primary mt-4">Go to Home</a>
                            </div>
                        </div>
                    </div>
              </div>
          </div>
</section>
<!-- 404 Section end here -->

<!-- footer section end here -->
<?php get_footer(); ?>