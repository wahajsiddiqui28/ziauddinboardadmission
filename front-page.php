<?php
/**
 * Front Page Template
 */
get_header(); ?>

<main id="primary" class="site-main">

    <!-- Hero -->
    <section class="hero">
        <div class="container hero__grid">
            <div class="hero__content">
                <span class="pill"><i class="fa-solid fa-hand-sparkles"></i> Welcome to Beacon</span>
                <h1>Quality Education &amp; Bright Futures with <span class="hero__accent">Zia Uddin Board</span></h1>

                <ul class="hero__features">
                    <li><i class="fa-solid fa-star"></i> Experienced &amp; Qualified Teachers</li>
                    <li><i class="fa-solid fa-star"></i> Modern Classrooms and Digital Learning</li>
                    <li><i class="fa-solid fa-star"></i> Strong Academic Results and Exam Support</li>
                    <li><i class="fa-solid fa-star"></i> Safe, Disciplined and Supportive Environment</li>
                </ul>

                <a href="#enroll" class="btn btn--accent btn--lg">Apply for Admission <i class="fa-solid fa-arrow-right"></i></a>
            </div>

            <div class="hero__visual">
                <div class="hero__image" style="background-image:url('https://images.unsplash.com/photo-1517486808906-6ca8b3f04846?auto=format&fit=crop&w=900&q=80');"></div>

                <div class="float-card float-card--1">
                    <strong>Duaa rana</strong>
                    <span>Develop Communication Plan <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i></span>
                </div>

                <div class="float-card float-card--2">
                    <div class="float-card__num"><i class="fa-solid fa-calendar-days"></i> 650</div>
                    <span>Zia Uddin Students</span>
                </div>

                <div class="float-card float-card--3">
                    <i class="fa-solid fa-user-tie"></i> Top Mentors
                </div>
            </div>
        </div>
    </section>

    <!-- About -->
    <section class="section about-section">
        <div class="container about__grid">
            <div class="about__image">
                <img src="https://images.unsplash.com/photo-1562774053-701939374585?auto=format&fit=crop&w=900&q=80" alt="Beacon Academy">
            </div>
            <div class="about__content">
                <span class="eyebrow">About The Beacon Academy &amp; College</span>
                <h2>Admissions Open Under Zia Uddin Board &mdash; Building Future Leaders</h2>
                <p>The Beacon Academy &amp; College proudly delivers high-quality education under the Zia Uddin Board. Our institution focuses on academic excellence, character development, and modern learning methodologies to prepare students for a successful future. With experienced faculty, smart classrooms and structured academic support, we ensure every child receives the foundation needed to excel in higher education and beyond.</p>
                <ul class="check-list">
                    <li><i class="fa-solid fa-circle-check"></i> Qualified Faculty</li>
                    <li><i class="fa-solid fa-circle-check"></i> Modern Classrooms</li>
                    <li><i class="fa-solid fa-circle-check"></i> Academic Excellence</li>
                    <li><i class="fa-solid fa-circle-check"></i> Safe Learning Environment</li>
                </ul>
                <a href="#" class="btn btn--primary">Read More</a>
            </div>
        </div>
    </section>

    <!-- Stats -->
    <section class="stats">
        <div class="container stats__grid">
            <div class="stat-card">
                <h3 data-count="1000">1,000+</h3>
                <p>Happy Students</p>
            </div>
            <div class="stat-card">
                <h3 data-count="4">4+</h3>
                <p>Centers</p>
            </div>
            <div class="stat-card">
                <h3 data-count="20">20+</h3>
                <p>Special Services</p>
            </div>
            <div class="stat-card">
                <h3 data-count="10">10</h3>
                <p>Years of Experience</p>
            </div>
        </div>
    </section>

    <!-- Programs -->
    <section class="section programs">
        <div class="container">
            <div class="section-head">
                <h2>Our Academic Programs</h2>
                <p>"Providing Quality Education for All Major Boards with Expert Faculty and Modern Learning Methods."</p>
            </div>
            <div class="programs__grid">
                <?php
                $programs = array(
                    array( 'icon' => 'fa-graduation-cap', 'title' => 'Ziauddin Board' ),
                    array( 'icon' => 'fa-school',         'title' => 'Matric Board' ),
                    array( 'icon' => 'fa-globe',          'title' => 'O / A Levels' ),
                    array( 'icon' => 'fa-book-open',      'title' => 'Inter' ),
                );
                foreach ( $programs as $p ) : ?>
                    <article class="program-card">
                        <div class="program-card__icon"><i class="fa-solid <?php echo esc_attr( $p['icon'] ); ?>"></i></div>
                        <h3><?php echo esc_html( $p['title'] ); ?></h3>
                        <p>Structured curriculum designed to build strong academic foundations and critical thinking skills for future success.</p>
                        <a href="#" class="btn btn--primary btn--sm">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Why Beacon -->
    <section class="section why">
        <div class="container why__grid">
            <div class="why__intro">
                <div class="why__logo">
                    <i class="fa-solid fa-lighthouse fa-bolt"></i>
                </div>
                <h2>Why Beacon?</h2>
                <p>At The Beacon Academy &amp; College, we provide quality education with a student-centered approach, following Zia Uddin Board standards. Our programs focus on academic excellence and prepare students for admission processes &mdash; ensuring they are confident, capable and ready to succeed.</p>
                <a href="#" class="btn btn--primary">Read More</a>
            </div>

            <div class="why__features">
                <?php
                $features = array(
                    array( 'icon' => 'fa-user-graduate',   'title' => 'Experienced Faculty',   'text' => 'Highly qualified teachers dedicated to student success.' ),
                    array( 'icon' => 'fa-users',           'title' => 'Small Batch Classes',   'text' => 'Limited students per class to ensure individual attention and better understanding.' ),
                    array( 'icon' => 'fa-file-lines',      'title' => 'Board Exam Focus',      'text' => 'Special preparation for Ziauddin Board, Karachi Board, and other boards.' ),
                    array( 'icon' => 'fa-money-bill-wave', 'title' => 'Affordable Fees',       'text' => 'Quality education at reasonable and student-friendly fee structure.' ),
                    array( 'icon' => 'fa-chart-line',      'title' => 'Regular Tests',         'text' => 'Weekly and monthly assessments to track student progress.' ),
                    array( 'icon' => 'fa-bullseye',        'title' => 'Personalized Attention','text' => 'Customized guidance according to each student\'s learning needs.' ),
                );
                foreach ( $features as $f ) : ?>
                    <div class="feature">
                        <div class="feature__icon"><i class="fa-solid <?php echo esc_attr( $f['icon'] ); ?>"></i></div>
                        <h4><?php echo esc_html( $f['title'] ); ?></h4>
                        <p><?php echo esc_html( $f['text'] ); ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="section testimonials">
        <div class="container">
            <div class="section-head">
                <h2>What Parents &amp; Students Say</h2>
                <p>"Real experiences from our students and parents about the quality education and guidance at Beacon Academy."</p>
            </div>

            <div class="testimonial-slider">
                <button class="t-nav t-prev" aria-label="Previous"><i class="fa-solid fa-chevron-left"></i></button>

                <div class="t-track">
                    <article class="t-slide is-active">
                        <i class="fa-solid fa-quote-left t-quote"></i>
                        <p>"Beacon Academy gave me the tools and confidence I needed to excel. The faculty is genuinely caring and result-oriented."</p>
                        <h5>Ayesha Khan</h5>
                        <span>Student</span>
                    </article>
                    <article class="t-slide">
                        <i class="fa-solid fa-quote-left t-quote"></i>
                        <p>"As a parent, I appreciate the discipline and academic support. My child has improved tremendously in just one semester."</p>
                        <h5>Mr. Imran Siddiqui</h5>
                        <span>Parent</span>
                    </article>
                    <article class="t-slide">
                        <i class="fa-solid fa-quote-left t-quote"></i>
                        <p>"Regular tests and excellent guidance helped me build confidence for my exams. I highly recommend Beacon Academy to serious students."</p>
                        <h5>Usman Malik</h5>
                        <span>Student</span>
                    </article>
                </div>

                <button class="t-nav t-next" aria-label="Next"><i class="fa-solid fa-chevron-right"></i></button>

                <div class="t-dots">
                    <span class="t-dot is-active"></span>
                    <span class="t-dot"></span>
                    <span class="t-dot"></span>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact + Location -->
    <section class="section hp-contact" id="contact">
        <div class="container">
            <div class="section-head">
                <span class="eyebrow"><i class="fa-solid fa-envelope"></i> &nbsp;Get In Touch</span>
                <h2>Contact Us &amp; Find Our Campus</h2>
                <p>"We'd love to hear from you. Reach out for admissions, programs, or any enquiries — our team responds promptly."</p>
            </div>

            <div class="hp-contact__grid">

                <!-- LEFT: Info + Map -->
                <div class="hp-contact__left">

                    <!-- Info Cards -->
                    <div class="hp-info-cards">
                        <div class="hp-info-card">
                            <div class="hp-info-icon" style="--ic:#5b4bff;"><i class="fa-solid fa-location-dot"></i></div>
                            <div>
                                <strong>Our Address</strong>
                                <span>C-1869 &amp; A-83, Behind Gulzar-e-Hijri Police Station,<br>Scheme 33, Karachi – 75620</span>
                            </div>
                        </div>
                        <div class="hp-info-card">
                            <div class="hp-info-icon" style="--ic:#10b981;"><i class="fa-solid fa-phone-volume"></i></div>
                            <div>
                                <strong>Call Us</strong>
                                <span><a href="tel:+923162984609">0316 2984609</a></span>
                            </div>
                        </div>
                        <div class="hp-info-card">
                            <div class="hp-info-icon" style="--ic:#f59e0b;"><i class="fa-solid fa-envelope-open-text"></i></div>
                            <div>
                                <strong>Email Us</strong>
                                <span><a href="mailto:beaconacademy5@gmail.com">beaconacademy5@gmail.com</a></span>
                            </div>
                        </div>
                        <div class="hp-info-card">
                            <div class="hp-info-icon" style="--ic:#e84393;"><i class="fa-solid fa-clock"></i></div>
                            <div>
                                <strong>Office Hours</strong>
                                <span>Mon – Sat: 8:00 AM – 4:00 PM</span>
                            </div>
                        </div>
                    </div>

                    <!-- Map -->
                    <div class="hp-map">
                        <iframe
                            src="https://maps.google.com/maps?q=Telephone+Exchange+Rd+Gulzar+e+Hijri+Karachi&output=embed&z=15"
                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"
                            title="Beacon Academy Location">
                        </iframe>
                        <a href="https://maps.google.com/?q=Gulzar+e+Hijri+Karachi" target="_blank" rel="noopener" class="hp-map-btn">
                            <i class="fa-solid fa-diamond-turn-right"></i> Get Directions
                        </a>
                    </div>

                </div>

                <!-- RIGHT: Contact Form -->
                <div class="hp-contact__right">
                    <div class="hp-form-wrap">
                        <div class="hp-form-header">
                            <span class="eyebrow"><i class="fa-solid fa-paper-plane"></i> &nbsp;Send Us a Message</span>
                            <h3>We Reply Within 24 Hours</h3>
                        </div>

                        <?php
                        $hp_sent  = false;
                        $hp_error = '';
                        $hp_vals  = array( 'name' => '', 'email' => '', 'message' => '' );

                        if ( isset( $_POST['hp_contact_nonce'] ) &&
                             wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['hp_contact_nonce'] ) ), 'hp_contact_form' ) ) {

                            $hp_vals['name']    = sanitize_text_field( wp_unslash( $_POST['hp_name']    ?? '' ) );
                            $hp_vals['email']   = sanitize_email( wp_unslash( $_POST['hp_email']        ?? '' ) );
                            $hp_vals['message'] = sanitize_textarea_field( wp_unslash( $_POST['hp_message'] ?? '' ) );

                            if ( empty( $hp_vals['name'] ) || empty( $hp_vals['email'] ) || empty( $hp_vals['message'] ) ) {
                                $hp_error = 'Please fill in all required fields.';
                            } elseif ( ! is_email( $hp_vals['email'] ) ) {
                                $hp_error = 'Please enter a valid email address.';
                            } else {
                                $to      = get_option( 'admin_email' );
                                $subject = 'New Enquiry from ' . $hp_vals['name'];
                                $body    = "Name: {$hp_vals['name']}\nEmail: {$hp_vals['email']}\n\nMessage:\n{$hp_vals['message']}";
                                $headers = array( 'Content-Type: text/plain; charset=UTF-8', 'Reply-To: ' . $hp_vals['email'] );
                                $hp_sent = wp_mail( $to, $subject, $body, $headers );
                                if ( ! $hp_sent ) $hp_error = 'Something went wrong. Please try again.';
                            }
                        }
                        ?>

                        <?php if ( $hp_sent ) : ?>
                            <div class="hp-form-success">
                                <div class="hp-success-icon"><i class="fa-solid fa-circle-check"></i></div>
                                <h4>Message Sent!</h4>
                                <p>Thank you, <strong><?php echo esc_html( $hp_vals['name'] ); ?></strong>! We'll get back to you soon.</p>
                            </div>
                        <?php else : ?>

                            <?php if ( $hp_error ) : ?>
                                <div class="hp-form-alert">
                                    <i class="fa-solid fa-triangle-exclamation"></i>
                                    <?php echo esc_html( $hp_error ); ?>
                                </div>
                            <?php endif; ?>

                            <form class="hp-form" method="post" action="<?php echo esc_url( home_url('/#contact') ); ?>">
                                <?php wp_nonce_field( 'hp_contact_form', 'hp_contact_nonce' ); ?>

                                <div class="hp-form__row">
                                    <div class="hp-form__field">
                                        <label>Full Name <span class="req">*</span></label>
                                        <div class="hp-input-wrap">
                                            <i class="fa-solid fa-user"></i>
                                            <input type="text" name="hp_name" placeholder="e.g. Ahmed Ali"
                                                value="<?php echo esc_attr( $hp_vals['name'] ); ?>" required>
                                        </div>
                                    </div>
                                    <div class="hp-form__field">
                                        <label>Email Address <span class="req">*</span></label>
                                        <div class="hp-input-wrap">
                                            <i class="fa-solid fa-envelope"></i>
                                            <input type="email" name="hp_email" placeholder="your@email.com"
                                                value="<?php echo esc_attr( $hp_vals['email'] ); ?>" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="hp-form__field">
                                    <label>Phone Number</label>
                                    <div class="hp-input-wrap">
                                        <i class="fa-solid fa-phone"></i>
                                        <input type="tel" name="hp_phone" placeholder="0300 0000000">
                                    </div>
                                </div>

                                <div class="hp-form__field">
                                    <label>Your Message <span class="req">*</span></label>
                                    <div class="hp-input-wrap hp-input-wrap--area">
                                        <i class="fa-solid fa-message"></i>
                                        <textarea name="hp_message" rows="5"
                                            placeholder="Write your enquiry here…" required><?php echo esc_textarea( $hp_vals['message'] ); ?></textarea>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn--primary btn--lg" style="width:100%; justify-content:center;">
                                    <i class="fa-solid fa-paper-plane"></i> Send Message
                                </button>
                            </form>

                        <?php endif; ?>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="cta-band" id="enroll">
        <div class="container cta-band__inner">
            <div>
                <h2>Admissions Are Now Open</h2>
                <p>Join hundreds of bright students at The Beacon Academy &amp; College. Limited seats available.</p>
            </div>
            <button class="btn btn--accent btn--lg enrl-open-btn" type="button">Apply Now <i class="fa-solid fa-arrow-right"></i></button>
        </div>
    </section>

</main>

<?php get_footer(); ?>
