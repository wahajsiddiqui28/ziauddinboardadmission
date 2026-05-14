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

    <!-- CTA -->
    <section class="cta-band" id="enroll">
        <div class="container cta-band__inner">
            <div>
                <h2>Admissions Are Now Open</h2>
                <p>Join hundreds of bright students at The Beacon Academy &amp; College. Limited seats available.</p>
            </div>
            <a href="#" class="btn btn--accent btn--lg">Apply Now <i class="fa-solid fa-arrow-right"></i></a>
        </div>
    </section>

</main>

<?php get_footer(); ?>
