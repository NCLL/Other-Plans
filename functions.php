<?php

function add_custom_css() {
    // fonts
    wp_dequeue_style( 'twentyfifteen-fonts' );
    wp_deregister_style( 'open-sans' );
    wp_register_style( 'open-sans', false ); // dependency workaround from https://gist.github.com/thetrickster/8946567

    wp_enqueue_style( 'webfonts', '//fonts.googleapis.com/css?family=Alegreya+Sans:400,400italic|Alegreya:400,400italic,700,700italic' );
}
add_action( 'wp_print_styles', 'add_custom_css' );
