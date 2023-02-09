<?php
/* Enqueue Styles */
if ( ! function_exists('V_enqueue_styles') ) {
    function V_enqueue_styles() {
        wp_enqueue_style( 'twenty-twenty-three-style', get_template_directory_uri() .'/style.css' );
    }
    add_action('wp_enqueue_scripts', 'V_enqueue_styles');
}
