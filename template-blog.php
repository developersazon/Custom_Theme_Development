<?php 
    //Template Name:Template - Blog Page
    get_header();
    require_once 'banner.php';
 ?>
<!-- ============== End Header ===================== -->

<!-- Blog Section start here -->
<div id="blog" class="my-5">
    <div class="container">
        <p class="h2 py-2">Our Latest Blogs</p>
        <div class="row">
            <!-- left side content start here-->
            <div class="col-md-8 col-lg-8 d-flex">
                <!-- card 1 start here -->
                <div class="card m-3">
                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                        <img src="<?php bloginfo('template_directory'); ?>/img/banner.png" class="img-fluid"/>
                        <a href="#!">
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                        </a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#!" class="btn btn-primary">Button</a>
                    </div>
                </div>
                <!-- card 1 end here -->

                 <!-- card 2 start here -->
                 <div class="card m-3">
                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                        <img src="<?php bloginfo('template_directory'); ?>/img/banner.png" class="img-fluid"/>
                        <a href="#!">
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                        </a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#!" class="btn btn-primary">Button</a>
                    </div>
                </div>
                <!-- card 2 end here -->
                
            </div>
            <!-- left side content end here-->

            <!-- Right side content start here -->
            <div class="col-md-4 col-lg-4">
                 <div class="card">
                    <p class="h5 text-center">Right Sidebar</p><hr>
                 </div>
            </div>
            <!-- Right side content end here -->
        </div>
    </div>
</div>
<!-- Blog Section end here -->




<!-- ============== Start Footer ===================== -->
<?php get_footer(); ?>