<?php
/**
 * Front Page Template
 */
get_header(); ?>

<main id="primary" class="site-main">

    <!-- Hero -->
    <section class="hero">
        <div class="hero__orb hero__orb--1" aria-hidden="true"></div>
        <div class="hero__orb hero__orb--2" aria-hidden="true"></div>
        <div class="hero__orb hero__orb--3" aria-hidden="true"></div>
        <div class="hero__bg-dots" aria-hidden="true"></div>

        <div class="container hero__grid">
            <div class="hero__content">

                <div class="hero__pill-wrap">
                    <span class="hero__live-dot"></span>
                    <span class="pill"><i class="fa-solid fa-hand-sparkles"></i> Welcome to Beacon Academy</span>
                </div>

                <h1>Quality Education &amp; Bright Futures with <span class="hero__accent">Zia Uddin Board</span></h1>

                <ul class="hero__features">
                    <li><i class="fa-solid fa-check"></i> Experienced &amp; Qualified Teachers</li>
                    <li><i class="fa-solid fa-check"></i> Modern Classrooms and Digital Learning</li>
                    <li><i class="fa-solid fa-check"></i> Strong Academic Results and Exam Support</li>
                    <li><i class="fa-solid fa-check"></i> Safe, Disciplined and Supportive Environment</li>
                </ul>

                <div class="hero-cta-wrap d-flex align-items-center flex-wrap gap-3">
                    <a href="#enroll" class="btn btn--accent btn--lg btn--shine">Apply for Admission <i class="fa-solid fa-arrow-right"></i></a>
                    <a href="#about" class="btn btn--ghost btn--lg">Learn More</a>
                </div>

                <div class="hero__stats-row d-flex align-items-center flex-wrap gap-3">
                    <div class="hero__stat">
                        <strong>1,000+</strong>
                        <span>Students</span>
                    </div>
                    <span class="hero__stat-sep"></span>
                    <div class="hero__stat">
                        <strong>10+</strong>
                        <span>Years</span>
                    </div>
                    <span class="hero__stat-sep"></span>
                    <div class="hero__stat">
                        <strong>4+</strong>
                        <span>Centers</span>
                    </div>
                    <span class="hero__stat-sep"></span>
                    <div class="hero__stat">
                        <strong>20+</strong>
                        <span>Services</span>
                    </div>
                </div>

            </div>

            <div class="hero__visual">

                <!-- Decorative glow blobs -->
                <div class="hero__img-glow hero__img-glow--gold" aria-hidden="true"></div>
                <div class="hero__img-glow hero__img-glow--purple" aria-hidden="true"></div>

                <div class="hero__image-frame">
                    <!-- Corner bracket marks -->
                    <span class="hero__corner hero__corner--tl" aria-hidden="true"></span>
                    <span class="hero__corner hero__corner--tr" aria-hidden="true"></span>
                    <span class="hero__corner hero__corner--bl" aria-hidden="true"></span>
                    <span class="hero__corner hero__corner--br" aria-hidden="true"></span>

                    <div class="hero__frame-ring hero__frame-ring--1" aria-hidden="true"></div>
                    <div class="hero__frame-ring hero__frame-ring--2" aria-hidden="true"></div>

                    <div class="hero__image" style="background-image:url('https://images.unsplash.com/photo-1517486808906-6ca8b3f04846?auto=format&fit=crop&w=1200&q=85');"></div>

                    <!-- Inside-image badge overlay -->
                    <div class="hero__img-badge" aria-hidden="true">
                        <i class="fa-solid fa-award"></i>
                        <span>Zia Uddin Board<br><em>Certified Academy</em></span>
                    </div>
                </div>

                <!-- Float card 1 — Student review -->
                <div class="float-card float-card--1">
                    <div class="float-card__head">
                        <div class="float-card__avatar">DR</div>
                        <div>
                            <strong>Duaa Rana</strong>
                            <span class="float-card__role">Top Student</span>
                        </div>
                    </div>
                    <div class="float-card__stars">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i>
                    </div>
                </div>

                <!-- Float card 2 — Student count -->
                <div class="float-card float-card--2">
                    <div class="float-card__num">
                        <div class="float-card__num-icon"><i class="fa-solid fa-user-graduate"></i></div>
                        <span>650<sup>+</sup></span>
                    </div>
                    <span>Zia Uddin Students</span>
                </div>

                <!-- Float card 3 — Trophy -->
                <div class="float-card float-card--3">
                    <div class="float-card__trophy-wrap">
                        <div class="float-card__trophy-icon"><i class="fa-solid fa-trophy"></i></div>
                        <div>
                            <strong>Top Results</strong>
                            <span>Every Session</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="hero__wave" aria-hidden="true">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 72" preserveAspectRatio="none">
                <path fill="#ffffff" d="M0,36 C180,72 360,0 540,36 C720,72 900,0 1080,36 C1260,72 1380,18 1440,36 L1440,72 L0,72 Z"/>
            </svg>
        </div>
    </section>

    <!-- About -->
    <section class="section about-section">
        <div class="about-section__bg-shape" aria-hidden="true"></div>
        <div class="container about__grid">

            <!-- Media / Image Side -->
            <div class="about__media">
                <div class="about__media-bg" aria-hidden="true"></div>
                <div class="about__image">
                    <img src="https://images.unsplash.com/photo-1562774053-701939374585?auto=format&fit=crop&w=900&q=80" alt="Beacon Academy Building">
                    <div class="about__img-overlay" aria-hidden="true"></div>
                </div>
                <div class="about__exp-badge">
                    <strong>10+</strong>
                    <span>Years of<br>Excellence</span>
                </div>
                <div class="about__mini-card">
                    <div class="about__mini-icon"><i class="fa-solid fa-users"></i></div>
                    <div>
                        <strong>650+</strong>
                        <span>Active Students</span>
                    </div>
                </div>
            </div>

            <!-- Content Side -->
            <div class="about__content">
                <div class="about__eyebrow-wrap">
                    <span class="about__eyebrow-line"></span>
                    <span class="about__eyebrow-text">About The Beacon Academy &amp; College</span>
                </div>

                <h2>Building Future Leaders Under <span class="about__title-accent">Zia Uddin Board</span></h2>

                <p>The Beacon Academy &amp; College proudly delivers high-quality education under the Zia Uddin Board. We focus on academic excellence, character development, and modern learning to prepare every student for a confident and successful future.</p>

                <div class="about__features">
                    <div class="about__feature">
                        <div class="about__feat-icon af-purple"><i class="fa-solid fa-user-graduate"></i></div>
                        <div>
                            <h5>Qualified Faculty</h5>
                            <p>Experienced teachers dedicated to student excellence.</p>
                        </div>
                    </div>
                    <div class="about__feature">
                        <div class="about__feat-icon af-green"><i class="fa-solid fa-chalkboard-user"></i></div>
                        <div>
                            <h5>Modern Classrooms</h5>
                            <p>Smart boards and digital learning environment.</p>
                        </div>
                    </div>
                    <div class="about__feature">
                        <div class="about__feat-icon af-amber"><i class="fa-solid fa-trophy"></i></div>
                        <div>
                            <h5>Academic Excellence</h5>
                            <p>Consistent top results in board examinations.</p>
                        </div>
                    </div>
                    <div class="about__feature">
                        <div class="about__feat-icon af-pink"><i class="fa-solid fa-shield-halved"></i></div>
                        <div>
                            <h5>Safe Environment</h5>
                            <p>Disciplined, inclusive and supportive campus.</p>
                        </div>
                    </div>
                </div>

                <div class="about__cta-row d-flex align-items-center flex-wrap gap-3">
                    <a href="<?php echo esc_url( get_permalink( get_page_by_path('about') ) ); ?>" class="btn btn--primary">
                        Explore Academy <i class="fa-solid fa-arrow-right"></i>
                    </a>
                    <div class="about__trust d-flex align-items-center gap-2">
                        <div class="about__trust-stars">
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                        </div>
                        <span>Trusted by 650+ families</span>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Stats -->
    <section class="stats">
        <div class="stats__orb stats__orb--1" aria-hidden="true"></div>
        <div class="stats__orb stats__orb--2" aria-hidden="true"></div>
        <div class="stats__orb stats__orb--3" aria-hidden="true"></div>
        <div class="container stats__grid">
            <div class="stat-card stat-card--purple">
                <div class="stat-card__icon-wrap"><i class="fa-solid fa-user-graduate"></i></div>
                <h3 data-count="1000">1,000+</h3>
                <p>Happy Students</p>
                <span class="stat-card__line" aria-hidden="true"></span>
            </div>
            <div class="stat-card stat-card--green">
                <div class="stat-card__icon-wrap"><i class="fa-solid fa-map-location-dot"></i></div>
                <h3 data-count="4">4+</h3>
                <p>Centers</p>
                <span class="stat-card__line" aria-hidden="true"></span>
            </div>
            <div class="stat-card stat-card--gold">
                <div class="stat-card__icon-wrap"><i class="fa-solid fa-star-of-life"></i></div>
                <h3 data-count="20">20+</h3>
                <p>Special Services</p>
                <span class="stat-card__line" aria-hidden="true"></span>
            </div>
            <div class="stat-card stat-card--blue">
                <div class="stat-card__icon-wrap"><i class="fa-solid fa-award"></i></div>
                <h3 data-count="10">10</h3>
                <p>Years of Experience</p>
                <span class="stat-card__line" aria-hidden="true"></span>
            </div>
        </div>
    </section>

    <!-- Programs -->
    <section class="section programs">
        <div class="container">
            <div class="section-head text-center">
                <span class="eyebrow"><i class="fa-solid fa-book-open-reader"></i> &nbsp;Academic Programs</span>
                <h2>Our Academic Programs</h2>
                <p>"Providing Quality Education for All Major Boards with Expert Faculty and Modern Learning Methods."</p>
            </div>
            <div class="programs__grid">
                <?php
                $programs = array(
                    array( 'icon' => 'fa-graduation-cap', 'title' => 'Ziauddin Board', 'color' => 'purple', 'badge' => 'Board Certified',  'desc' => 'Complete preparation for Ziauddin Board exams with focused curriculum and past paper practice.' ),
                    array( 'icon' => 'fa-school',         'title' => 'Matric Board',   'color' => 'green',  'badge' => 'SSC I &amp; II',    'desc' => 'Comprehensive Matric-level education from Class 9 to 10 with board exam focused training.' ),
                    array( 'icon' => 'fa-globe',          'title' => 'O / A Levels',   'color' => 'blue',   'badge' => 'Cambridge',         'desc' => 'Expert-guided Cambridge O &amp; A Level program with international standard teaching methods.' ),
                    array( 'icon' => 'fa-book-open',      'title' => 'Intermediate',   'color' => 'amber',  'badge' => 'HSC I &amp; II',    'desc' => 'Intermediate Pre-Medical &amp; Pre-Engineering with result-oriented coaching for board exams.' ),
                );
                foreach ( $programs as $p ) : ?>
                    <article class="program-card program-card--<?php echo esc_attr( $p['color'] ); ?>">
                        <div class="program-card__header">
                            <div class="program-card__icon"><i class="fa-solid <?php echo esc_attr( $p['icon'] ); ?>"></i></div>
                            <span class="program-card__badge"><?php echo $p['badge']; ?></span>
                        </div>
                        <h3><?php echo esc_html( $p['title'] ); ?></h3>
                        <p><?php echo $p['desc']; ?></p>
                        <a href="#" class="program-card__link">Explore Program <i class="fa-solid fa-arrow-right"></i></a>
                        <div class="program-card__bg-glow" aria-hidden="true"></div>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Why Beacon -->
    <section class="section why">
        <div class="why__bg-mesh" aria-hidden="true"></div>
        <div class="why__orb why__orb--1" aria-hidden="true"></div>
        <div class="why__orb why__orb--2" aria-hidden="true"></div>
        <div class="container">
            <div class="why__intro">
                <span class="eyebrow eyebrow--light"><i class="fa-solid fa-bolt"></i> &nbsp;Why Choose Us</span>
                <h2>Why <span class="why__title-accent">Beacon?</span></h2>
                <p>At The Beacon Academy &amp; College, we provide quality education with a student-centered approach, following Zia Uddin Board standards. Our programs focus on academic excellence and prepare students for admission processes &mdash; ensuring they are confident, capable and ready to succeed.</p>
                <a href="#" class="btn btn--accent">Discover More <i class="fa-solid fa-arrow-right"></i></a>
            </div>

            <div class="why__features">
                <?php
                $features = array(
                    array( 'icon' => 'fa-user-graduate',   'color' => 'purple', 'title' => 'Experienced Faculty',    'text' => 'Highly qualified teachers dedicated to student success.' ),
                    array( 'icon' => 'fa-users',           'color' => 'green',  'title' => 'Small Batch Classes',    'text' => 'Limited students per class to ensure individual attention and better understanding.' ),
                    array( 'icon' => 'fa-file-lines',      'color' => 'blue',   'title' => 'Board Exam Focus',       'text' => 'Special preparation for Ziauddin Board, Karachi Board, and other boards.' ),
                    array( 'icon' => 'fa-money-bill-wave', 'color' => 'gold',   'title' => 'Affordable Fees',        'text' => 'Quality education at reasonable and student-friendly fee structure.' ),
                    array( 'icon' => 'fa-chart-line',      'color' => 'rose',   'title' => 'Regular Tests',          'text' => 'Weekly and monthly assessments to track student progress.' ),
                    array( 'icon' => 'fa-bullseye',        'color' => 'cyan',   'title' => 'Personalized Attention', 'text' => 'Customized guidance according to each student\'s learning needs.' ),
                );
                foreach ( $features as $f ) : ?>
                    <div class="feature feature--<?php echo esc_attr( $f['color'] ); ?>">
                        <div class="feature__icon-wrap">
                            <div class="feature__icon"><i class="fa-solid <?php echo esc_attr( $f['icon'] ); ?>"></i></div>
                        </div>
                        <div class="feature__body">
                            <h4><?php echo esc_html( $f['title'] ); ?></h4>
                            <p><?php echo esc_html( $f['text'] ); ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="section testimonials">
        <div class="container">
            <div class="section-head text-center">
                <span class="eyebrow"><i class="fa-solid fa-heart"></i> &nbsp;Student Stories</span>
                <h2>What Parents &amp; Students Say</h2>
                <p>"Real experiences from our students and parents about the quality education and guidance at Beacon Academy."</p>
            </div>

            <div class="testimonial-slider">
                <button class="t-nav t-prev" aria-label="Previous"><i class="fa-solid fa-chevron-left"></i></button>

                <div class="t-track">
                    <article class="t-slide is-active">
                        <div class="t-slide__top">
                            <div class="t-avatar t-avatar--purple">AK</div>
                            <div class="t-stars">
                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                            </div>
                        </div>
                        <i class="fa-solid fa-quote-left t-quote"></i>
                        <p>"The Beacon Academy &amp; College provides an excellent learning environment. The teachers are highly professional and very supportive. My child's academic performance improved significantly."</p>
                        <div class="t-author">
                            <h5>Ali Khan</h5>
                            <span>Parent</span>
                        </div>
                    </article>
                    <article class="t-slide">
                        <div class="t-slide__top">
                            <div class="t-avatar t-avatar--green">SA</div>
                            <div class="t-stars">
                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                            </div>
                        </div>
                        <i class="fa-solid fa-quote-left t-quote"></i>
                        <p>"The small class sizes and personal attention make learning much easier. The teachers explain every topic clearly and help us prepare for board exams."</p>
                        <div class="t-author">
                            <h5>Sara Ahmed</h5>
                            <span>Student</span>
                        </div>
                    </article>
                    <article class="t-slide">
                        <div class="t-slide__top">
                            <div class="t-avatar t-avatar--blue">UM</div>
                            <div class="t-stars">
                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                            </div>
                        </div>
                        <i class="fa-solid fa-quote-left t-quote"></i>
                        <p>"Regular tests and excellent guidance helped me build confidence for my exams. I highly recommend Beacon Academy to serious students."</p>
                        <div class="t-author">
                            <h5>Usman Malik</h5>
                            <span>Student</span>
                        </div>
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
            <div class="section-head text-center">
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

                                <div class="hp-form__row row g-0">
                                    <div class="hp-form__field col-md-12">
                                        <label>Full Name <span class="req">*</span></label>
                                        <div class="hp-input-wrap">
                                            <i class="fa-solid fa-user"></i>
                                            <input type="text" name="hp_name" placeholder="e.g. Ahmed Ali"
                                                value="<?php echo esc_attr( $hp_vals['name'] ); ?>" required>
                                        </div>
                                    </div>
                                    <div class="hp-form__field col-md-12">
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
        <div class="cta-band__orb cta-band__orb--1" aria-hidden="true"></div>
        <div class="cta-band__orb cta-band__orb--2" aria-hidden="true"></div>
        <div class="cta-band__orb cta-band__orb--3" aria-hidden="true"></div>
        <div class="cta-band__grid-overlay" aria-hidden="true"></div>
        <div class="container">
            <div class="cta-band__inner">
                <div class="cta-band__badge"><i class="fa-solid fa-circle-dot"></i> Admissions 2024&ndash;25 Open</div>
                <h2>Ready to Begin Your <span class="cta-band__accent">Academic Journey?</span></h2>
                <p>Join hundreds of bright students at The Beacon Academy &amp; College. Secure your seat today — limited spots available for each program.</p>
                <div class="cta-band__actions d-flex align-items-center justify-content-center flex-wrap gap-3">
                    <button class="btn btn--accent btn--lg enrl-open-btn" type="button">
                        <i class="fa-solid fa-pen-to-square"></i> Apply Now
                    </button>
                    <a href="#contact" class="btn btn--ghost-white btn--lg">
                        <i class="fa-solid fa-phone-volume"></i> Contact Us
                    </a>
                </div>
                <div class="cta-band__trust d-flex align-items-center justify-content-center flex-wrap gap-3">
                    <span><i class="fa-solid fa-shield-halved"></i> Zia Uddin Board Certified</span>
                    <span class="cta-band__sep"></span>
                    <span><i class="fa-solid fa-users"></i> 1,000+ Students</span>
                    <span class="cta-band__sep"></span>
                    <span><i class="fa-solid fa-award"></i> 10+ Years Experience</span>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
