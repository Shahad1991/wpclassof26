<?php
function mit_tema_setup() {
    // Tilføj støtte for WordPress funktioner
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' ); // For at kunne bruge Featured Images
    register_nav_menus( array(
        'primary' => 'Hovedmenu',
    ) );
}

add_action( 'after_setup_theme', 'mit_tema_setup' );

// Enqueueing scripts og styles
function mit_tema_enqueue_scripts() {
    wp_enqueue_style( 'mit-tema-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'mit_tema_enqueue_scripts' );
function mit_theme_setup() {
    // Registrer menuplaceringer
    register_nav_menus(array(
        'primary' => __('Primær Menu', 'mit_theme'),
        'mobile' => __('Mobil Menu', 'mit_theme')
    ));
}
add_action('after_setup_theme', 'mit_theme_setup');
function create_product_post_type() {
    register_post_type('product',
        array(
            'labels'      => array(
                'name'          => __('Products', 'my_theme'),
                'singular_name' => __('Product', 'my_theme'),
            ),
            'public'      => true,
            'has_archive' => true,
            'supports'    => array('title', 'editor', 'thumbnail', 'custom-fields'),
            'menu_icon'   => 'dashicons-cart',
        )
    );
}
add_action('init', 'create_product_post_type');
function mit_theme_scripts() {
    wp_enqueue_script('mit-theme-menu', get_template_directory_uri() . '/menu.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'mit_theme_scripts');

?>
