<?php

add_action( 'wp_enqueue_scripts', 'remove_scripts' );
function remove_scripts() {
    wp_deregister_script( 'wp-embed' );
    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );
}

remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );