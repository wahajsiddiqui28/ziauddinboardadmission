<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function ziauddin_theme_setup() {
    load_theme_textdomain( 'ziauddinboardadmission', get_template_directory() . '/languages' );

    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo', array(
        'height'      => 70,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
    ) );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
    add_theme_support( 'align-wide' );
    add_theme_support( 'responsive-embeds' );

    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'ziauddinboardadmission' ),
        'footer'  => __( 'Footer Menu', 'ziauddinboardadmission' ),
    ) );
}
add_action( 'after_setup_theme', 'ziauddin_theme_setup' );

function ziauddin_enqueue_assets() {
    wp_enqueue_style( 'ziauddin-style', get_stylesheet_uri(), array(), '1.0.0' );
    wp_enqueue_style( 'ziauddin-main', get_template_directory_uri() . '/assets/css/main.css', array( 'ziauddin-style' ), '1.0.1' );
    wp_enqueue_script( 'ziauddin-main', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.1', true );
}
add_action( 'wp_enqueue_scripts', 'ziauddin_enqueue_assets' );

function ziauddin_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Sidebar', 'ziauddinboardadmission' ),
        'id'            => 'sidebar-1',
        'before_widget' => '<div class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'ziauddin_widgets_init' );

/**
 * Fallback primary menu when no menu is assigned.
 */
function ziauddin_default_menu() {
    echo '<ul id="primary-menu" class="menu">';
    echo '<li class="current-menu-item"><a href="' . esc_url( home_url( '/' ) ) . '">Home</a></li>';
    echo '<li><a href="#about">About</a></li>';
    echo '<li><a href="#contact">Contact us</a></li>';
    echo '<li><a href="#blog">Latest Blogs</a></li>';
    echo '</ul>';
}

function ziauddin_default_footer_menu() {
    echo '<ul id="footer-menu" class="footer-list">';
    echo '<li><a href="' . esc_url( home_url( '/' ) ) . '"><i class="fa-solid fa-angle-right"></i> Home</a></li>';
    echo '<li><a href="#about"><i class="fa-solid fa-angle-right"></i> About</a></li>';
    echo '<li><a href="#contact"><i class="fa-solid fa-angle-right"></i> Contact</a></li>';
    echo '<li><a href="#blog"><i class="fa-solid fa-angle-right"></i> Blogs</a></li>';
    echo '</ul>';
}
