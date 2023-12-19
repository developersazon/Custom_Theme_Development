<?php

   function stylesheet_files(){
      wp_enqueue_style('Custom_CSS_Style', get_stylesheet_directory_uri() . '/style.css');
      wp_enqueue_style('bootstrap_js_file', get_stylesheet_directory_uri() . '/css/mdb.min.css');
      wp_enqueue_style('font-owesome', get_template_directory_uri());
   }
   add_action('wp_enqueue_scripts', 'stylesheet_files');


// theme title & tag setup function start here
   function website_titletag() {
     
    //use for custom title & tag setup
     add_theme_support ('title-tag');

      //custom header function start here
     add_theme_support('custom-header');

     //create custom thumbnail for post page
     add_theme_support('post-thumbnails');

    //add new support for background image
     add_theme_support('custom-background');

   }
   add_action('after_setup_theme', 'website_titletag');
// theme title & tag setup function edn here

?>

<?php 
// custom menu start here
register_nav_menus(
    array(
        'main_menu' => 'Primary Menu',
        'footer_one' => 'Footer Colum 1',
        'footer_two' => 'Footer Colum 2',
        'footer_three' => 'Footer Colum 3',
        'footer_four' => 'Footer Colum 4',
    )
    );
//custom menu end here


//  Create custome sidebar 
register_sidebar(
    array(
        'name' => "Blog Sidebar",
        'id' => "sidebarblog"
    )
);


?>