<?php
function theme_styles() {
    wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/node_modules/bootstrap/dist/css/bootstrap.min.css' );
    wp_enqueue_style( 'custom_css', get_template_directory_uri() . '/css/style.css' );
    wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
}

add_action( 'wp_enqueue_scripts', 'theme_styles' );

function theme_js() {
    wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/js/bootstrap.js','', '', true );
    wp_enqueue_script( 'global_js', get_template_directory_uri() . '/js/global.js','','', true );
    wp_enqueue_script( 'home_js', get_template_directory_uri() . '/js/home.js','', '', true );
    wp_enqueue_script( 'live_js', get_template_directory_uri() . '/js/live.js','', '', true );
    $wsd_photos = array( 'template_url' => get_bloginfo('template_url') );
    wp_enqueue_script( 'photos_js', get_template_directory_uri() . '/js/photos.js','', '', true );
    wp_localize_script( 'photos_js', 'wsd_photos', $wsd_photos );
}
add_action( 'wp_enqueue_scripts', 'theme_js' );

//add_filter( 'show_admin_bar', '__return_false' );

/*=            Menus            =*/
add_theme_support( 'menus' );
function domsters_register_menu() {
  register_nav_menu('main-menu', __( 'Main Menu') );
}
add_action('init', 'domsters_register_menu');

// creating widets
function create_widget($name, $id, $description) {
    register_sidebar(array(
      'name' => __( $name ),
      'id'   => $id,
      'description' => __( $description ),
      'before_widget' => '<div class="widget addclass">',
      'after_widget' => '</div>',
      'before_title' => '<h2>',
      'after_title' => '</h2>'
    ));
}

//widgets
create_widget( 'Blog Sidebar', 'blog', 'Displays on side of pages in blog section');

// activate google fonts
function tutsplus_add_google_fonts() {
  wp_register_style( 'googleFonts', 'https://fonts.googleapis.com/css?family=Shrikhand');
  wp_enqueue_style( 'googleFonts');
}
add_action( 'wp_enqueue_scripts', 'tutsplus_add_google_fonts' );

//sidebar
create_widget( 'Page Sidebar', 'page', 'Displays on side of pages with sidebar');

//photo gallery

?>
