<?php 
      get_header(); 
      include_once 'banner.php';
?>

 
 <?php while(have_posts()){ 
      the_post();
  ?>
   <div id="section">
    <div class="container">
      <div class="col my-5"> 
           <h4 class="fw-bold"><?php the_title(); ?></h4 class="Blod">
           <p><?php the_content(); ?></p>
    </div>
   </div>
   <?php } ?>
 <!-- page banner section end here -->

<?php get_footer(); ?>