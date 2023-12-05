<?php

   function stylesheet_files(){
      wp_enqueue_style('main_css_file', get_stylesheet_directory_uri() . '/css/style.css');
      wp_enqueue_style('main_bootstrap_file', get_stylesheet_directory_uri(). '/css/mdb.min.css');
      wp_enqueue_style('font', get_stylesheet_directory_uri(). 'https://use.fontawesome.com/releases/v5.11.2/css/all.css');
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