<?php 
    get_header();
    require_once 'banner.php';
 ?>
<!-- ============== End Header ===================== -->

<!-- Blog Section start here -->
<div id="blog" class="my-5">
    <div class="container">
        <div class="row">
            <!-- left side content start here-->
            <div class="col-md-8 col-lg-8 d-flex">
                <!-- card 1 start here -->
                <?php $banner_image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large'); ?>
                <div class="card m-3">
                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                        <img src="<?php echo $banner_image[0]; ?>" class="img-fluid"/>
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h6 class="bg-light py-2 rounded-pill"><?php the_author(); ?></h6>
                            <h6 class="bg-light py-2 rounded-pill"><?php the_date(); ?></h6>
                        </div>
                        <h4 class="card-title text-primary my-1"><?php the_title(); ?></h4>
                        <p class="card-text"><?php the_content(); ?></p>
                    </div>
                </div>
                <!-- card 1 end here -->
            </div>
            <!-- left side content end here-->

            <!-- Right side content start here -->
            <div class="col-md-4 col-lg-4 shadow-3 rounded">
                 <div class="card p-3">
                      <p class="h4 py-2 text-center text-white bg-primary rounded-pill">Recent Posts</p>
                    <?php while(have_posts()) { 
                          the_post();
                    ?>
                      <a href="<?php the_permalink(); ?>">
                         <p class="h6 my-2"> <?php the_title(); ?> </p>
                      </a>
                    <?php } ?>
                 </div>
            </div>
            <!-- Right side content end here -->

            <!-- For pagination  -->
            <P><?php wp_pagenavi(); ?></p>
            <?php comments_template(); ?>
        </div>
    </div>
</div>
<!-- Blog Section end here -->


<!-- ============== Start Footer ===================== -->
<?php get_footer(); ?>