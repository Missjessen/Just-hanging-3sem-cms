<?php
function justhang_styles() {
  wp_enqueue_style( 'style-sheet', get_stylesheet_directory_uri() . '/style.css', array(), '1.0' );
  wp_enqueue_style("justhang-style", "https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css");
  wp_enqueue_style("bookmania", "https://use.typekit.net/afc3onk.css");
 
 
 

 
}
// Hook your custom function to the wp_enqueue_scripts action
add_action( 'wp_enqueue_scripts', 'justhang_styles' );

function justhang_disable_gutenberg() {
    remove_post_type_support("page", "editor");
    remove_post_type_support("post", "editor");
}
add_action("init", "justhang_disable_gutenberg");



