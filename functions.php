<?php

   function stylesheet_files(){
      wp_enqueue_style('main_css_file', get_stylesheet_directory_uri() . '/css/style.css');
      wp_enqueue_style('bootstrap_js_file', get_stylesheet_directory_uri() . '/css/mdb.min.css');
      wp_enqueue_style('font-owesome', get_stylesheet_directory_uri(). 'https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css');
   }
   add_action('wp_enqueue_scripts', 'stylesheet_files');


// theme title & tag setup function start here
   function website_titletag() {
      add_theme_support ('title-tag');
   }
   add_action('after_setup_theme', 'website_titletag');
// theme title & tag setup function edn here

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