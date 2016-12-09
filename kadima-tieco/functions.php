<?php
function kadima_enqueue_styles() {
    /* If using a child theme, auto-load the parent theme style. */
    if ( is_child_theme() ) {
        wp_enqueue_style( 'parent-style', trailingslashit( get_template_directory_uri() ) . 'style.css' );
    }
    /* Always load active theme's style.css. */
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    //wp_dequeue_style( 'parent-style' );
	wp_enqueue_style( 'layim-style', 'http://cdn.yunclever.com/static/layui/css/layui.css' );
	wp_enqueue_script('layim', 'http://cdn.yunclever.com/static/layui/layui.js', array('jquery'));
}
add_action( 'wp_enqueue_scripts', 'kadima_enqueue_styles' );
add_filter( 'loop_shop_per_page', create_function( '$cols', 'return 12;' ), 20 );
?>
