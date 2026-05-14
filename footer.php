    </div><!-- #content -->

    <footer id="colophon" class="site-footer">
        <div class="container site-footer__grid">
            <div class="footer-col">
                <a class="brand brand--light" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <span class="brand__mark"><i class="fa-solid fa-graduation-cap"></i></span>
                    <span class="brand__text">The Beacon <em>Academy &amp; College</em></span>
                </a>
                <p>Quality education with a student-centered approach under Zia Uddin Board standards. Building future leaders through academic excellence.</p>
                <div class="socials">
                    <a href="#" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" aria-label="YouTube"><i class="fa-brands fa-youtube"></i></a>
                    <a href="#" aria-label="WhatsApp"><i class="fa-brands fa-whatsapp"></i></a>
                </div>
            </div>

            <div class="footer-col">
                <h4>Quick Links</h4>
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'footer',
                    'menu_id'        => 'footer-menu',
                    'container'      => false,
                    'fallback_cb'    => 'ziauddin_default_footer_menu',
                ) );
                ?>
            </div>

            <div class="footer-col">
                <h4>Programs</h4>
                <ul class="footer-list">
                    <li><a href="#"><i class="fa-solid fa-angle-right"></i> Ziauddin Board</a></li>
                    <li><a href="#"><i class="fa-solid fa-angle-right"></i> Matric Board</a></li>
                    <li><a href="#"><i class="fa-solid fa-angle-right"></i> O / A Levels</a></li>
                    <li><a href="#"><i class="fa-solid fa-angle-right"></i> Intermediate</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h4>Contact</h4>
                <ul class="footer-contact">
                    <li><i class="fa-solid fa-location-dot"></i> Karachi, Pakistan</li>
                    <li><i class="fa-solid fa-phone"></i> 0316 2984609</li>
                    <li><i class="fa-solid fa-envelope"></i> beaconacademy5@gmail.com</li>
                </ul>
            </div>
        </div>

        <div class="site-info">
            <div class="container">
                &copy; <?php echo esc_html( date( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?>. <?php esc_html_e( 'All rights reserved.', 'ziauddinboardadmission' ); ?>
            </div>
        </div>
    </footer>
</div><!-- #page -->

<a href="#top" class="scroll-top" aria-label="Scroll to top"><i class="fa-solid fa-arrow-up"></i></a>

<?php wp_footer(); ?>
</body>
</html>
