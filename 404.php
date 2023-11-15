<?php 
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
                <?php while(have_posts() ) { 
                    
                    the_post();
                    $banner_image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
                ?>
                <div class="card m-3">
                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                        <img src="<?php echo $banner_image[0]; ?>" class="img-fluid"/>
                        <a href="<?php the_permalink(); ?>">
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h6 class="bg-light py-2 rounded-pill"><?php the_author(); ?></h6>
                            <h6 class="bg-light py-2 rounded-pill"><?php the_date(); ?></h6>
                        </div>
                        <a href="<?php the_permalink(); ?>"><h6 class="card-title text-primary my-1"><?php the_title(); ?></h6></a>
                        <p class="card-text"><?php the_excerpt(); ?></p>
                        <a href="<?php the_permalink(); ?>" class="btn btn-primary-outline">Read More</a>
                    </div>
                </div>
                <?php } ?>
                <!-- card 1 end here -->
            </div>
            <!-- left side content end here-->

        </div>
    </div>
</div>
<!-- Blog Section end here -->


<!-- ============== Start Footer ===================== -->
<?php get_footer(); ?>