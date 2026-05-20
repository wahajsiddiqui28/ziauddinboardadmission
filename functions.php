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
    // Bootstrap 5.2.3 — loaded BEFORE theme CSS so main.css can override Bootstrap defaults
    wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css', array(), '5.2.3' );
    wp_enqueue_script( 'bootstrap-bundle', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js', array(), '5.2.3', true );

    // Theme styles — depend on bootstrap so they load after and override Bootstrap defaults
    wp_enqueue_style( 'ziauddin-style', get_stylesheet_uri(), array( 'bootstrap' ), '1.0.0' );
    wp_enqueue_style( 'ziauddin-main', get_template_directory_uri() . '/assets/css/main.css', array( 'ziauddin-style' ), '1.0.6' );

    // Theme script — depends on bootstrap-bundle
    wp_enqueue_script( 'ziauddin-main', get_template_directory_uri() . '/assets/js/main.js', array( 'bootstrap-bundle' ), '1.0.6', true );
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
 * Enroll Now AJAX handler
 */
function ziauddin_enroll_submit() {
    if ( ! isset( $_POST['enroll_nonce'] ) || ! wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['enroll_nonce'] ) ), 'enroll_submit' ) ) {
        wp_send_json_error( array( 'message' => 'Security check failed.' ) );
    }

    $first   = sanitize_text_field( wp_unslash( $_POST['first_name'] ?? '' ) );
    $last    = sanitize_text_field( wp_unslash( $_POST['last_name']  ?? '' ) );
    $dob     = sanitize_text_field( wp_unslash( $_POST['dob']        ?? '' ) );
    $gender  = sanitize_text_field( wp_unslash( $_POST['gender']     ?? '' ) );
    $program = sanitize_text_field( wp_unslash( $_POST['program']    ?? '' ) );
    $address = sanitize_textarea_field( wp_unslash( $_POST['address'] ?? '' ) );
    $phone   = sanitize_text_field( wp_unslash( $_POST['phone']      ?? '' ) );
    $email   = sanitize_email( wp_unslash( $_POST['email']           ?? '' ) );

    if ( empty( $first ) || empty( $last ) || empty( $dob ) || empty( $gender ) || empty( $program ) || empty( $address ) || empty( $phone ) ) {
        wp_send_json_error( array( 'message' => 'Please fill in all required fields.' ) );
    }

    $to      = get_option( 'admin_email' );
    $subject = 'New Admission Application – ' . $first . ' ' . $last;
    $body    = "New Admission Application Received:\n\n";
    $body   .= "Name:      {$first} {$last}\n";
    $body   .= "DOB:       {$dob}\n";
    $body   .= "Gender:    {$gender}\n";
    $body   .= "Program:   {$program}\n";
    $body   .= "Address:   {$address}\n";
    $body   .= "Phone:     {$phone}\n";
    $body   .= "Email:     {$email}\n";

    $headers = array( 'Content-Type: text/plain; charset=UTF-8' );
    if ( $email ) {
        $headers[] = 'Reply-To: ' . $email;
    }

    wp_mail( $to, $subject, $body, $headers );
    wp_send_json_success( array( 'message' => 'Application submitted successfully!' ) );
}
add_action( 'wp_ajax_enroll_submit',        'ziauddin_enroll_submit' );
add_action( 'wp_ajax_nopriv_enroll_submit', 'ziauddin_enroll_submit' );

/**
 * Pass AJAX URL to JS
 */
function ziauddin_ajax_vars() {
    wp_localize_script( 'ziauddin-main', 'ziauddinAjax', array(
        'url'   => admin_url( 'admin-ajax.php' ),
        'nonce' => wp_create_nonce( 'enroll_submit' ),
    ) );
}
add_action( 'wp_enqueue_scripts', 'ziauddin_ajax_vars', 20 );

/**
 * Helper: get page URL by its assigned page template file.
 */
function ziauddin_get_page_url_by_template( $template_file ) {
    $pages = get_pages( array(
        'meta_key'    => '_wp_page_template',
        'meta_value'  => $template_file,
        'number'      => 1,
        'post_status' => 'publish',
    ) );
    if ( ! empty( $pages ) ) {
        return get_permalink( $pages[0]->ID );
    }
    return '';
}

/**
 * Fallback primary menu when no menu is assigned.
 */
function ziauddin_default_menu() {
    $current = get_queried_object_id();

    $about_url   = ziauddin_get_page_url_by_template( 'page-about.php' );
    $contact_url = ziauddin_get_page_url_by_template( 'page-contact.php' );
    $blog_url    = ziauddin_get_page_url_by_template( 'page-latest-blogs.php' );

    echo '<ul id="primary-menu" class="menu">';
    echo '<li class="' . ( is_front_page() ? 'current-menu-item' : '' ) . '"><a href="' . esc_url( home_url( '/' ) ) . '">Home</a></li>';

    if ( $about_url ) {
        echo '<li class="' . ( ! is_front_page() && is_page() && get_page_template_slug() === 'page-about.php' ? 'current-menu-item' : '' ) . '"><a href="' . esc_url( $about_url ) . '">About</a></li>';
    }
    if ( $contact_url ) {
        echo '<li class="' . ( ! is_front_page() && is_page() && get_page_template_slug() === 'page-contact.php' ? 'current-menu-item' : '' ) . '"><a href="' . esc_url( $contact_url ) . '">Contact us</a></li>';
    }
    if ( $blog_url ) {
        echo '<li class="' . ( ! is_front_page() && is_page() && get_page_template_slug() === 'page-latest-blogs.php' ? 'current-menu-item' : '' ) . '"><a href="' . esc_url( $blog_url ) . '">Latest Blogs</a></li>';
    }

    echo '</ul>';
}

function ziauddin_default_footer_menu() {
    $about_url   = ziauddin_get_page_url_by_template( 'page-about.php' );
    $contact_url = ziauddin_get_page_url_by_template( 'page-contact.php' );
    $blog_url    = ziauddin_get_page_url_by_template( 'page-latest-blogs.php' );

    echo '<ul id="footer-menu" class="footer-list">';
    echo '<li><a href="' . esc_url( home_url( '/' ) ) . '"><i class="fa-solid fa-angle-right"></i> Home</a></li>';
    if ( $about_url )   echo '<li><a href="' . esc_url( $about_url )   . '"><i class="fa-solid fa-angle-right"></i> About</a></li>';
    if ( $contact_url ) echo '<li><a href="' . esc_url( $contact_url ) . '"><i class="fa-solid fa-angle-right"></i> Contact</a></li>';
    if ( $blog_url )    echo '<li><a href="' . esc_url( $blog_url )    . '"><i class="fa-solid fa-angle-right"></i> Blogs</a></li>';
    echo '</ul>';
}
