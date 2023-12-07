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
           <h1><?php bloginfo('home'); ?></h1>
    </div>
   </div>
   <?php } ?>
 <!-- page banner section end here -->

<?php get_footer(); ?>