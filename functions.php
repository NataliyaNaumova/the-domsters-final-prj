<?php
function theme_styles() {
    wp_enqueue_style( 'custom_css', get_template_directory_uri() . '/css/style.css' );
    wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
}

add_action( 'wp_enqueue_scripts', 'theme_styles' );
?>


<?php
function theme_js() {
    wp_enqueue_script( 'global_js', get_template_directory_uri() . '/js/global.js','','', true );
    wp_enqueue_script( 'home_js', get_template_directory_uri() . '/js/home.js','', '', true );
}
add_action( 'wp_enqueue_scripts', 'theme_js' );
?>
