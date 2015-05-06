<?php

function add_custom_css() {
    // fonts
    wp_dequeue_style( 'twentyfifteen-fonts' );
    wp_deregister_style( 'open-sans' );
    wp_register_style( 'open-sans', false ); // dependency workaround from https://gist.github.com/thetrickster/8946567

    wp_enqueue_style( 'webfonts', '//fonts.googleapis.com/css?family=Alegreya+Sans:400,400italic|Alegreya:400,400italic,700,700italic' );
}
add_action( 'wp_print_styles', 'add_custom_css' );

function add_GA_event() {
    wp_enqueue_script( 'GA-event-tracking', get_stylesheet_directory_uri() . '/ga-events.js', array( 'jquery' ) );
}
add_action( 'wp_enqueue_scripts', 'add_GA_event' );
