<?php
        
    add_action( 'wp_enqueue_scripts', function () {
        if (!is_admin()) {
            
            wp_enqueue_style( 'output', get_template_directory_uri() . '/src/css/output.css', array(), '1.0.0' );
		    wp_enqueue_script( 'script-js', get_template_directory_uri() . "/library/js/scripts.min.js", array( 'jquery' ), null, true );
        
        }
    });

?>