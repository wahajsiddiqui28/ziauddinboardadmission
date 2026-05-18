<?php
/**
 * Theme Header
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Dancing+Script:wght@600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">

    <!-- Top Info Bar -->
    <div class="top-bar">
        <div class="container top-bar__inner">
            <div class="top-bar__item">
                <a href="#contact"><i class="fa-solid fa-circle-question"></i> <span>Have any question?</span></a>
            </div>
            <div class="top-bar__item">
                <i class="fa-solid fa-envelope"></i>
                <a href="mailto:beaconacademy5@gmail.com">beaconacademy5@gmail.com</a>
            </div>
            <div class="top-bar__item">
                <i class="fa-solid fa-phone"></i>
                <a href="tel:+923162984609">0316 2984609</a>
            </div>
        </div>
    </div>

    <!-- Main Header -->
    <header id="masthead" class="site-header">
        <div class="container site-header__inner">
            <div class="site-branding">
                <?php if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) : ?>
                    <?php the_custom_logo(); ?>
                <?php else : ?>
                    <a class="brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <span class="brand__mark"><i class="fa-solid fa-graduation-cap"></i></span>
                        <span class="brand__text">The Beacon <em>Academy &amp; College</em></span>
                    </a>
                <?php endif; ?>
            </div>

            <nav id="site-navigation" class="main-navigation">
                <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                    <i class="fa-solid fa-bars"></i>
                </button>
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'menu_id'        => 'primary-menu',
                    'container'      => false,
                    'fallback_cb'    => 'ziauddin_default_menu',
                ) );
                ?>
            </nav>

            <div class="header-cta">
                <button class="btn btn--primary enrl-open-btn" type="button">
                    <i class="fa-solid fa-pen-to-square"></i> Enroll Now
                </button>
            </div>
        </div>
    </header>

    <div id="content" class="site-content">
