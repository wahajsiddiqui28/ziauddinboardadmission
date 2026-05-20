<?php
/**
 * Template Name: About Us
 */
get_header();
?>

<!-- ========================================
     1. PAGE HERO BANNER
======================================== -->
<section class="about-hero">
    <div class="about-hero__orb about-hero__orb--1" aria-hidden="true"></div>
    <div class="about-hero__orb about-hero__orb--2" aria-hidden="true"></div>
    <div class="about-hero__orb about-hero__orb--3" aria-hidden="true"></div>
    <div class="about-hero__mesh" aria-hidden="true"></div>
    <div class="container about-hero__inner">
        <nav class="breadcrumb d-inline-flex align-items-center" aria-label="breadcrumb">
            <a href="<?php echo esc_url( home_url('/') ); ?>"><i class="fa-solid fa-house"></i> Home</a>
            <span><i class="fa-solid fa-chevron-right"></i></span>
            <span>About</span>
        </nav>
        <div class="about-hero__badge d-inline-flex align-items-center"><i class="fa-solid fa-circle-dot"></i> Zia Uddin Board Affiliated</div>
        <h1>About <span class="ab-accent">Beacon Academy</span></h1>
        <p class="about-hero__sub">Empowering students through quality education, strong values, and academic excellence — affiliated with Zia Uddin Board, Karachi.</p>
        <div class="about-hero__trust d-flex align-items-center flex-wrap gap-3">
            <span><i class="fa-solid fa-user-graduate"></i> 1,000+ Students</span>
            <span class="ah-sep"></span>
            <span><i class="fa-solid fa-award"></i> 10+ Years</span>
            <span class="ah-sep"></span>
            <span><i class="fa-solid fa-map-location-dot"></i> 4+ Centers</span>
        </div>
    </div>
    <div class="about-hero__wave">
        <svg viewBox="0 0 1440 80" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
            <path d="M0 40 C360 80 1080 0 1440 40 L1440 80 L0 80 Z" fill="#fff"/>
        </svg>
    </div>
</section>

<!-- ========================================
     2. WELCOME / INTRO SECTION
======================================== -->
<section class="section ab-welcome">
    <div class="ab-welcome__bg-orb" aria-hidden="true"></div>
    <div class="container">
        <div class="ab-welcome__grid">
            <!-- Left: Image with floating badge -->
            <div class="ab-welcome__img-wrap">
                <div class="ab-welcome__img-frame">
                    <span class="ab-corner ab-corner--tl" aria-hidden="true"></span>
                    <span class="ab-corner ab-corner--tr" aria-hidden="true"></span>
                    <span class="ab-corner ab-corner--bl" aria-hidden="true"></span>
                    <span class="ab-corner ab-corner--br" aria-hidden="true"></span>
                    <div class="ab-welcome__img">
                        <?php $welcome_img = get_template_directory_uri() . '/assets/images/about-welcome.jpg'; ?>
                        <img src="<?php echo esc_url( $welcome_img ); ?>"
                             onerror="this.src='https://images.unsplash.com/photo-1580582932707-520aed937b7b?w=600&q=80'"
                             alt="Beacon Academy Students" />
                    </div>
                </div>
                <div class="ab-badge ab-badge--exp d-flex flex-column align-items-center">
                    <span class="ab-badge__num">10<sup>+</sup></span>
                    <span class="ab-badge__txt">Years of<br>Excellence</span>
                </div>
                <div class="ab-badge ab-badge--students d-flex align-items-center">
                    <div class="ab-badge__icon"><i class="fa-solid fa-users"></i></div>
                    <span>1,000+ Students<br><em>Enrolled</em></span>
                </div>
            </div>

            <!-- Right: Content -->
            <div class="ab-welcome__content">
                <span class="eyebrow"><i class="fa-solid fa-star"></i> &nbsp;Welcome to Beacon Academy</span>
                <h2>A Premier Educational<br><span class="ab-title-accent">Institution in Karachi</span></h2>
                <p>Beacon Academy is a dedicated educational institution located at C-1869 &amp; A-83, behind Gulzar-e-Hijri Police Station, Scheme 33, Karachi. Our academy proudly serves the educational needs of students in Scheme 33, Gulzar-e-Hijri, and surrounding areas of Karachi.</p>
                <p>We are committed to delivering high-quality education that prepares students for academic excellence, board examinations, and future opportunities. Our value-based approach helps students develop confidence, responsibility, and strong moral character.</p>

                <ul class="ab-checklist">
                    <li><i class="fa-solid fa-circle-check"></i> Affiliated with Zia Uddin Board</li>
                    <li><i class="fa-solid fa-circle-check"></i> Experienced &amp; Qualified Teachers</li>
                    <li><i class="fa-solid fa-circle-check"></i> State-of-the-Art Facilities</li>
                    <li><i class="fa-solid fa-circle-check"></i> Safe &amp; Supportive Environment</li>
                    <li><i class="fa-solid fa-circle-check"></i> Play Group to O/A Level</li>
                    <li><i class="fa-solid fa-circle-check"></i> Continuous Academic Guidance</li>
                </ul>

                <div class="ab-welcome__btns d-flex align-items-center flex-wrap gap-3">
                    <a href="#contact" class="btn btn--primary btn--lg"><i class="fa-solid fa-paper-plane"></i> Apply for Admission</a>
                    <a href="#campus" class="btn btn--outline btn--lg"><i class="fa-solid fa-location-dot"></i> Find Us</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ========================================
     3. STATS STRIP
======================================== -->
<div class="ab-stats">
    <div class="ab-stats__orb ab-stats__orb--1" aria-hidden="true"></div>
    <div class="ab-stats__orb ab-stats__orb--2" aria-hidden="true"></div>
    <div class="container ab-stats__grid">
        <div class="ab-stat-item ab-stat-item--purple d-flex align-items-center gap-3">
            <div class="ab-stat-item__icon"><i class="fa-solid fa-user-graduate"></i></div>
            <div class="d-flex flex-column">
                <strong>1,000<span>+</span></strong>
                <span>Students Enrolled</span>
            </div>
        </div>
        <div class="ab-stat-item ab-stat-item--green d-flex align-items-center gap-3">
            <div class="ab-stat-item__icon"><i class="fa-solid fa-school"></i></div>
            <div class="d-flex flex-column">
                <strong>4<span>+</span></strong>
                <span>Campus Centers</span>
            </div>
        </div>
        <div class="ab-stat-item ab-stat-item--gold d-flex align-items-center gap-3">
            <div class="ab-stat-item__icon"><i class="fa-solid fa-chalkboard-teacher"></i></div>
            <div class="d-flex flex-column">
                <strong>20<span>+</span></strong>
                <span>Expert Teachers</span>
            </div>
        </div>
        <div class="ab-stat-item ab-stat-item--blue d-flex align-items-center gap-3">
            <div class="ab-stat-item__icon"><i class="fa-solid fa-trophy"></i></div>
            <div class="d-flex flex-column">
                <strong>10<span>+</span></strong>
                <span>Years Experience</span>
            </div>
        </div>
    </div>
</div>

<!-- ========================================
     4. MISSION & VISION
======================================== -->
<section class="section ab-mv">
    <div class="container">
        <div class="section-head text-center">
            <span class="eyebrow"><i class="fa-solid fa-bullseye"></i> &nbsp;Our Purpose</span>
            <h2>Mission &amp; Vision</h2>
        </div>
        <div class="ab-mv__grid">
            <!-- Mission -->
            <div class="ab-mv-card ab-mv-card--mission">
                <div class="ab-mv-card__top-bar"></div>
                <div class="ab-mv-card__body d-flex flex-column">
                    <div class="ab-mv-card__icon">
                        <i class="fa-solid fa-rocket"></i>
                    </div>
                    <div class="ab-mv-card__content">
                        <h3>Our Mission</h3>
                        <p>To provide students with high-quality, affordable education that encourages academic excellence, intellectual curiosity, and strong moral values. We aim to guide students toward success through dedicated teaching, structured learning, and a supportive educational environment.</p>
                        <ul class="ab-mv-list">
                            <li class="d-flex align-items-center gap-2"><i class="fa-solid fa-check"></i> Quality &amp; Affordable Education</li>
                            <li class="d-flex align-items-center gap-2"><i class="fa-solid fa-check"></i> Dedicated Teaching Staff</li>
                            <li class="d-flex align-items-center gap-2"><i class="fa-solid fa-check"></i> Structured Learning Programs</li>
                        </ul>
                    </div>
                </div>
                <div class="ab-mv-card__img">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/mission.jpg' ); ?>"
                         onerror="this.src='https://images.unsplash.com/photo-1509062522246-3755977927d7?w=400&q=80'"
                         alt="Our Mission" />
                </div>
                <div class="ab-mv-card__glow" aria-hidden="true"></div>
            </div>

            <!-- Vision -->
            <div class="ab-mv-card ab-mv-card--vision">
                <div class="ab-mv-card__top-bar"></div>
                <div class="ab-mv-card__body d-flex flex-column">
                    <div class="ab-mv-card__icon">
                        <i class="fa-solid fa-eye"></i>
                    </div>
                    <div class="ab-mv-card__content">
                        <h3>Our Vision</h3>
                        <p>To become one of the most trusted educational institutions in Karachi — a place where students achieve their highest academic potential while developing the character and confidence required for future success in board examinations and beyond.</p>
                        <ul class="ab-mv-list">
                            <li class="d-flex align-items-center gap-2"><i class="fa-solid fa-check"></i> Most Trusted Institution</li>
                            <li class="d-flex align-items-center gap-2"><i class="fa-solid fa-check"></i> Character &amp; Confidence Building</li>
                            <li class="d-flex align-items-center gap-2"><i class="fa-solid fa-check"></i> Future-Ready Graduates</li>
                        </ul>
                    </div>
                </div>
                <div class="ab-mv-card__img">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/vision.jpg' ); ?>"
                         onerror="this.src='https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=400&q=80'"
                         alt="Our Vision" />
                </div>
                <div class="ab-mv-card__glow" aria-hidden="true"></div>
            </div>
        </div>
    </div>
</section>

<!-- ========================================
     5. CORE VALUES
======================================== -->
<section class="section ab-values">
    <div class="ab-values__mesh" aria-hidden="true"></div>
    <div class="ab-values__orb ab-values__orb--1" aria-hidden="true"></div>
    <div class="ab-values__orb ab-values__orb--2" aria-hidden="true"></div>
    <div class="container">
        <div class="section-head text-center">
            <span class="eyebrow eyebrow--light"><i class="fa-solid fa-gem"></i> &nbsp;What We Stand For</span>
            <h2 style="color:#fff;">Our Core <span class="ab-values__accent">Values</span></h2>
            <p style="color:rgba(255,255,255,.6);">Everything we do is guided by these principles that shape the Beacon Academy experience.</p>
        </div>
        <div class="ab-values__grid">
            <div class="ab-val-card d-flex align-items-start" style="--ic:#5b4bff;">
                <div class="ab-val-card__icon"><i class="fa-solid fa-chalkboard-user"></i></div>
                <div class="ab-val-card__body">
                    <h4>Experienced Teachers</h4>
                    <p>Highly qualified, passionate educators dedicated to fostering a love for learning and guiding each student to their full potential.</p>
                </div>
            </div>
            <div class="ab-val-card d-flex align-items-start" style="--ic:#e84393;">
                <div class="ab-val-card__icon"><i class="fa-solid fa-laptop-code"></i></div>
                <div class="ab-val-card__body">
                    <h4>Modern Facilities</h4>
                    <p>Modern classrooms, advanced digital learning tools, science and computer labs, and a well-stocked library for effective learning.</p>
                </div>
            </div>
            <div class="ab-val-card d-flex align-items-start" style="--ic:#0ea5e9;">
                <div class="ab-val-card__icon"><i class="fa-solid fa-shield-heart"></i></div>
                <div class="ab-val-card__body">
                    <h4>Safe Environment</h4>
                    <p>We maintain a disciplined yet caring environment where every student feels secure, respected, and motivated to learn every day.</p>
                </div>
            </div>
            <div class="ab-val-card d-flex align-items-start" style="--ic:#f59e0b;">
                <div class="ab-val-card__icon"><i class="fa-solid fa-medal"></i></div>
                <div class="ab-val-card__body">
                    <h4>Academic Excellence</h4>
                    <p>Consistently outstanding board results through structured curriculum and exam preparation strategies that help students excel.</p>
                </div>
            </div>
            <div class="ab-val-card d-flex align-items-start" style="--ic:#10b981;">
                <div class="ab-val-card__icon"><i class="fa-solid fa-people-group"></i></div>
                <div class="ab-val-card__body">
                    <h4>Community Focus</h4>
                    <p>Serving students from Scheme 33, Gulzar-e-Hijri, and surrounding areas — accessible, affordable education for all families.</p>
                </div>
            </div>
            <div class="ab-val-card d-flex align-items-start" style="--ic:#8b5cf6;">
                <div class="ab-val-card__icon"><i class="fa-solid fa-lightbulb"></i></div>
                <div class="ab-val-card__body">
                    <h4>Holistic Growth</h4>
                    <p>Beyond academics — we develop conceptual thinking, problem-solving abilities, and life skills that benefit students in real life.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ========================================
     6. CAMPUS LOCATION
======================================== -->
<section class="section ab-campus" id="campus">
    <div class="container">
        <div class="section-head text-center">
            <span class="eyebrow"><i class="fa-solid fa-map-location-dot"></i> &nbsp;Find Us</span>
            <h2>Campus Location</h2>
            <p>Conveniently located in Scheme 33, making it easily accessible from Gulzar-e-Hijri and surrounding areas.</p>
        </div>
        <div class="ab-campus__grid">
            <div class="ab-campus__map">
                <div class="ab-campus__map-frame" aria-hidden="true"></div>
                <iframe
                    src="https://maps.google.com/maps?q=Scheme+33+C-1869+Gulzar+e+Hijri+Police+Station+Karachi&output=embed&z=15"
                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                    title="Beacon Academy Location">
                </iframe>
            </div>
            <div class="ab-campus__info d-flex flex-column">
                <div class="ab-info-card d-flex align-items-start gap-3" style="--ic:#5b4bff;">
                    <div class="ab-info-icon"><i class="fa-solid fa-location-dot"></i></div>
                    <div>
                        <h5>Address</h5>
                        <p>C-1869 &amp; A-83, Behind Gulzar-e-Hijri Police Station<br>Scheme 33, Karachi – 75620</p>
                    </div>
                </div>
                <div class="ab-info-card d-flex align-items-start gap-3" style="--ic:#10b981;">
                    <div class="ab-info-icon"><i class="fa-solid fa-phone"></i></div>
                    <div>
                        <h5>Phone</h5>
                        <p><a href="tel:+923162984609">0316 2984609</a></p>
                    </div>
                </div>
                <div class="ab-info-card d-flex align-items-start gap-3" style="--ic:#f59e0b;">
                    <div class="ab-info-icon"><i class="fa-solid fa-envelope"></i></div>
                    <div>
                        <h5>Email</h5>
                        <p><a href="mailto:beaconacademy5@gmail.com">beaconacademy5@gmail.com</a></p>
                    </div>
                </div>
                <div class="ab-info-card d-flex align-items-start gap-3" style="--ic:#e84393;">
                    <div class="ab-info-icon"><i class="fa-solid fa-clock"></i></div>
                    <div>
                        <h5>Office Hours</h5>
                        <p>Monday – Saturday: 8:00 AM – 4:00 PM<br>Sunday: Closed</p>
                    </div>
                </div>
                <a href="https://maps.google.com/?q=Scheme+33+Karachi" target="_blank" rel="noopener" class="btn btn--primary btn--lg" style="margin-top:8px; justify-content:center;">
                    <i class="fa-solid fa-diamond-turn-right"></i> Get Directions
                </a>
            </div>
        </div>
    </div>
</section>

<!-- ========================================
     7. CTA BAND
======================================== -->
<section class="ab-cta-band">
    <div class="ab-cta-band__orb ab-cta-band__orb--1" aria-hidden="true"></div>
    <div class="ab-cta-band__orb ab-cta-band__orb--2" aria-hidden="true"></div>
    <div class="ab-cta-band__mesh" aria-hidden="true"></div>
    <div class="container">
        <div class="ab-cta-band__inner">
            <div class="ab-cta-badge d-inline-flex align-items-center"><i class="fa-solid fa-circle-dot"></i> Admissions 2024–25 Open</div>
            <h2>Ready to Start Your Journey<br>with <span class="ab-cta-accent">Beacon Academy?</span></h2>
            <p>Join thousands of students who have achieved academic success and built bright futures with us. Secure your seat today.</p>
            <div class="ab-cta-band__btns d-flex align-items-center justify-content-center flex-wrap gap-3">
                <a href="#enroll" class="btn btn--accent btn--lg">
                    <i class="fa-solid fa-pen-to-square"></i> Apply for Admission
                </a>
                <a href="tel:+923162984609" class="btn btn--outline-light btn--lg">
                    <i class="fa-solid fa-phone"></i> Call Us Now
                </a>
            </div>
            <div class="ab-cta-trust d-flex align-items-center justify-content-center flex-wrap gap-3">
                <span><i class="fa-solid fa-shield-halved"></i> Zia Uddin Board Certified</span>
                <span class="ab-cta-sep"></span>
                <span><i class="fa-solid fa-users"></i> 1,000+ Students</span>
                <span class="ab-cta-sep"></span>
                <span><i class="fa-solid fa-star"></i> 10+ Years Excellence</span>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
