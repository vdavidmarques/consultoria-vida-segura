<?php
    /*******************************
    Adding scripts and Css
        ********************************/   
    add_action( 'wp_enqueue_scripts', function () {
        if (!is_admin()) {
            wp_enqueue_style( 'style', get_template_directory_uri() . './style.css', array(), '1.0.0' );
            
            wp_enqueue_script( 'script-js', get_template_directory_uri() . "/library/js/scripts.min.js", array( 'jquery' ), null, true );
        }
    }); 

?>