    </div><!-- #content -->

    <footer id="colophon" class="site-footer">
        <div class="container site-footer__grid">
            <div class="footer-col">
                <a class="brand brand--light" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <span class="brand__mark"><i class="fa-solid fa-graduation-cap"></i></span>
                    <span class="brand__text">The Beacon <em>Academy &amp; College</em></span>
                </a>
                <p>Quality education with a student-centered approach under Zia Uddin Board standards. Building future leaders through academic excellence.</p>
                <div class="socials d-flex align-items-center gap-2">
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

<!-- ========================================
     ENROLL NOW MODAL
======================================== -->
<div id="enroll-modal" class="enrl-overlay" role="dialog" aria-modal="true" aria-labelledby="enrl-title">
    <div class="enrl-modal">

        <!-- Close Button -->
        <button class="enrl-close" aria-label="Close">&times;</button>

        <!-- Header -->
        <div class="enrl-header">
            <?php if ( function_exists('the_custom_logo') && has_custom_logo() ) : ?>
                <div class="enrl-logo"><?php the_custom_logo(); ?></div>
            <?php else : ?>
                <div class="enrl-logo">
                    <span class="enrl-logo-icon"><i class="fa-solid fa-graduation-cap"></i></span>
                </div>
            <?php endif; ?>
            <div class="enrl-header-text">
                <h2 id="enrl-title">Beacon Academy<br><span>&amp; College</span></h2>
                <p>"Play Group, Kindergarten, Matric, O-Level &amp; Inter"</p>
            </div>
        </div>

        <div class="enrl-divider"></div>

        <!-- Success Message (hidden by default) -->
        <div class="enrl-success" id="enrl-success" style="display:none;">
            <div class="enrl-success-icon"><i class="fa-solid fa-circle-check"></i></div>
            <h3>Application Submitted!</h3>
            <p>Thank you! We will contact you shortly regarding your admission.</p>
            <button class="btn btn--primary" id="enrl-success-close">Done</button>
        </div>

        <!-- Form -->
        <form class="enrl-form" id="enrl-form" novalidate>
            <?php wp_nonce_field( 'enroll_submit', 'enroll_nonce' ); ?>

            <div class="enrl-row">
                <div class="enrl-field">
                    <label>First Name <span class="req">*</span></label>
                    <input type="text" name="first_name" placeholder="First Name" required>
                </div>
                <div class="enrl-field">
                    <label>Last Name <span class="req">*</span></label>
                    <input type="text" name="last_name" placeholder="Last Name" required>
                </div>
            </div>

            <div class="enrl-row">
                <div class="enrl-field">
                    <label>Date of Birth <span class="req">*</span></label>
                    <input type="date" name="dob" required>
                </div>
                <div class="enrl-field">
                    <label>Gender <span class="req">*</span></label>
                    <select name="gender" required>
                        <option value="">Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
            </div>

            <div class="enrl-field">
                <label>Class / Program <span class="req">*</span></label>
                <select name="program" required>
                    <option value="">Select Program</option>
                    <option value="Play Group">Play Group</option>
                    <option value="Kindergarten">Kindergarten</option>
                    <option value="Primary">Primary</option>
                    <option value="Ziauddin Board">Ziauddin Board</option>
                    <option value="Matric Board">Matric Board</option>
                    <option value="O / A Level">O / A Level</option>
                    <option value="Intermediate">Intermediate</option>
                </select>
            </div>

            <div class="enrl-field">
                <label>Address <span class="req">*</span></label>
                <textarea name="address" rows="2" placeholder="Your full address..." required></textarea>
            </div>

            <div class="enrl-row">
                <div class="enrl-field">
                    <label>Contact Number <span class="req">*</span></label>
                    <input type="tel" name="phone" placeholder="0300 0000000" required>
                </div>
                <div class="enrl-field">
                    <label>Email Address</label>
                    <input type="email" name="email" placeholder="your@email.com">
                </div>
            </div>

            <div class="enrl-field">
                <label>Upload Student Photo</label>
                <div class="enrl-file-wrap">
                    <input type="file" name="photo" id="enrl-photo" accept="image/*">
                    <label for="enrl-photo" class="enrl-file-label">
                        <i class="fa-solid fa-cloud-arrow-up"></i>
                        <span id="enrl-file-text">Choose Photo</span>
                    </label>
                </div>
            </div>

            <!-- Error Message -->
            <div class="enrl-error" id="enrl-error" style="display:none;">
                <i class="fa-solid fa-triangle-exclamation"></i>
                <span id="enrl-error-msg">Please fill all required fields.</span>
            </div>

            <button type="submit" class="enrl-submit" id="enrl-submit">
                <span id="enrl-btn-text"><i class="fa-solid fa-paper-plane"></i> Submit Admission</span>
                <span id="enrl-btn-loading" style="display:none;"><i class="fa-solid fa-spinner fa-spin"></i> Submitting...</span>
            </button>
        </form>

    </div>
</div>

<?php wp_footer(); ?>
</body>
</html>
