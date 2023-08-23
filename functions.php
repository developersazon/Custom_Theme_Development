<?php

    function load_scripts(){
        wp_enqueue_style( 'bootstrap-css', 'https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.css', array(), '6.4.1', 'all');
        wp_enqueue_style( 'bootstrap-css', 'https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.css', array(), '6.4.1', 'all');
        wp_enqueue_scripts( 'bootstrap-js', 'https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.js', array('jquery'), '6.4.1', true);
    }
    add_action('wp_enqueue_scripts', 'load_scripts');
 
?>  