<?php

    // function load_scripts(){
    //     wp_enqueue_style( 'bootstrap-css', bloginfo('template_directory') . 'css/mdb.min.css', array(), '6.4.1', 'all');
    //     wp_enqueue_scripts( 'bootstrap-js', bloginfo('template_directory') . 'js/mdb.min.js', array('query'), '6.4.1', true);
        
    // }
    // add_action('wp_enqueue_scripts', 'load_scripts'); 


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

?>