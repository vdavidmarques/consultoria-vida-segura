<?php
    function enqueue_tailwind_css() {
        wp_enqueue_style( 'output', get_template_directory_uri() . '/src/css/output.css', array(), '1.0.0' );
    }
    add_action( 'wp_enqueue_scripts', 'enqueue_tailwind_css' );

?>