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
        <div class="top-bar__announce">
            <span class="top-bar__announce-dot"></span>
            <span>Admissions 2024&ndash;25 are now open &mdash; Limited seats available, apply today!</span>
            <a href="#enroll" class="top-bar__announce-link">Apply Now <i class="fa-solid fa-arrow-right"></i></a>
        </div>
        <div class="container top-bar__inner d-flex align-items-center justify-content-between">
            <div class="top-bar__left d-flex align-items-center">
                <div class="top-bar__item d-flex align-items-center gap-2">
                    <span class="top-bar__icon"><i class="fa-solid fa-circle-question"></i></span>
                    <a href="#contact">Have any question?</a>
                </div>
            </div>
            <div class="top-bar__right d-flex align-items-center gap-2">
                <div class="top-bar__item d-flex align-items-center gap-2">
                    <span class="top-bar__icon tb-icon--mail"><i class="fa-solid fa-envelope"></i></span>
                    <a href="mailto:beaconacademy5@gmail.com">beaconacademy5@gmail.com</a>
                </div>
                <span class="top-bar__sep"></span>
                <div class="top-bar__item d-flex align-items-center gap-2">
                    <span class="top-bar__icon tb-icon--phone"><i class="fa-solid fa-phone-volume"></i></span>
                    <a href="tel:+923162984609">0316 2984609</a>
                </div>
                <span class="top-bar__sep"></span>
                <div class="top-bar__socials d-flex align-items-center gap-1">
                    <a href="https://www.facebook.com/share/1ELVhLFheD/" class="top-bar__social" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                    <!-- <a href="#" class="top-bar__social" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a> -->
                    <a href="https://wa.me/03162984609" class="top-bar__social top-bar__social--wa" aria-label="WhatsApp"><i class="fa-brands fa-whatsapp"></i></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Header -->
    <header id="masthead" class="site-header">
        <div class="site-header__glow" aria-hidden="true"></div>
        <div class="mobile-top-cta">
            <button class="btn btn--primary btn--shine enrl-open-btn" type="button">
                <i class="fa-solid fa-pen-to-square"></i> Enroll Now
            </button>
        </div>
        <div class="container site-header__inner d-flex align-items-center justify-content-between">
            <div class="site-branding">
                <?php if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) : ?>
                    <?php the_custom_logo(); ?>
                <?php else : ?>
                    <a class="brand d-inline-flex align-items-center" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <span class="brand__mark">
                            <span class="brand__ring" aria-hidden="true"></span>
                            <i class="fa-solid fa-graduation-cap"></i>
                        </span>
                        <div class="brand__text d-flex flex-column">
                            <span class="brand__name">The Beacon</span>
                            <em class="brand__sub">Academy &amp; College</em>
                        </div>
                    </a>
                <?php endif; ?>
            </div>

            <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="menu-toggle__line"></span>
                <span class="menu-toggle__line"></span>
                <span class="menu-toggle__line"></span>
            </button>

            <div class="mobile-menu-overlay" aria-hidden="true"></div>

            <nav id="site-navigation" class="main-navigation">
                <div class="mobile-menu-header">
                    <div class="mobile-menu-logo">
                        <?php if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) : ?>
                            <?php the_custom_logo(); ?>
                        <?php else : ?>
                            <a class="brand d-inline-flex align-items-center" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                <span class="brand__mark">
                                    <span class="brand__ring" aria-hidden="true"></span>
                                    <i class="fa-solid fa-graduation-cap"></i>
                                </span>
                                <div class="brand__text d-flex flex-column">
                                    <span class="brand__name">The Beacon</span>
                                    <em class="brand__sub">Academy &amp; College</em>
                                </div>
                            </a>
                        <?php endif; ?>
                    </div>
                    <button class="mobile-menu-close" aria-label="Close menu">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'menu_id'        => 'primary-menu',
                    'container'      => false,
                    'fallback_cb'    => 'ziauddin_default_menu',
                ) );
                ?>
                <!-- <div class="mobile-menu-enroll">
                    <button class="btn btn--primary btn--shine enrl-open-btn" type="button">
                        <i class="fa-solid fa-pen-to-square"></i> Enroll Now
                    </button>
                </div> -->
                <div class="mobile-menu-footer">
                    <div class="mobile-menu-contact">
                        <a href="tel:+923162984609"><i class="fa-solid fa-phone"></i> 0316 2984609</a>
                        <a href="mailto:beaconacademy5@gmail.com"><i class="fa-solid fa-envelope"></i> beaconacademy5@gmail.com</a>
                    </div>
                    <div class="mobile-menu-socials">
                        <a href="https://www.facebook.com/share/1ELVhLFheD/" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="https://wa.me/03162984609" aria-label="WhatsApp"><i class="fa-brands fa-whatsapp"></i></a>
                    </div>
                </div>
            </nav>

            <div class="header-cta d-flex align-items-center gap-3">
                <span class="admissions-badge"><i class="fa-solid fa-circle-dot"></i> Admissions Open</span>
                <button class="btn btn--primary btn--shine enrl-open-btn" type="button">
                    <i class="fa-solid fa-pen-to-square"></i> Enroll Now
                </button>
            </div>
        </div>
    </header>

    <div id="content" class="site-content">
