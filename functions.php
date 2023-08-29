<?php

    function load_scripts(){
        wp_enqueue_style( 'bootstrap-css', bloginfo('template_directory') . 'css/mdb.min.css', array(), '6.4.1', 'all');
        wp_enqueue_scripts( 'bootstrap-js', bloginfo('template_directory') . 'js/mdb.min.js', array('query'), '6.4.1', true);
        
    }
    add_action('wp_enqueue_scripts', 'load_scripts'); 


// Create Custom Menus
register_nav_menus(
    array(
        'main_menu' => 'Top Menu',
        'side_menu' => 'Side Menu'

    )
)

?>