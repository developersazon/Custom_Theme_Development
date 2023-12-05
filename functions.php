<?php

   function stylesheet_files(){
      wp_enqueue_style('main_css_file', get_stylesheet_directory_uri() . '/css/style.css');
      wp_enqueue_style('bootstrap_js_file', get_stylesheet_directory_uri() . '/css/mdb.min.css');
      wp_enqueue_style('google-font', get_stylesheet_directory_uri(). '<link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Fugaz+One&family=Kenia&family=Roboto+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,400;1,500&display=swap" rel="stylesheet">');
   }
   add_action('wp_enqueue_scripts', 'stylesheet_files');

?>

<?php 
// custom menu start here
register_nav_menus(
    array(
        'main_menu' => 'Primary Menu',

    )
    );
//custom menu end here


//custom header function start here
add_theme_support('custom-header');

//create custom thumbnail for post page
add_theme_support('post-thumbnails');


//  Create custome sidebar 
register_sidebar(
    array(
        'name' => "Blog Sidebar",
        'id' => "sidebarblog"
    )
);



add_theme_support('custom-background');
?>