<?php
function rusticranch_register_styles() {
    wp_enqueue_style( 'rusticranch-css', get_template_directory_uri() . "style/css", [], '1.0', 'all');
    wp_enqueue_style( 'tailwindcss_output', get_template_directory_uri() . '/dist/output.css', [], '1.0.0', 'all');
}
add_action( 'wp_enqueue_scripts', 'rusticranch_register_styles' );


