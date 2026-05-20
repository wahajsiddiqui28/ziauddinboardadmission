<?php
/**
 * Template Name: Contact Us
 */

$sent    = false;
$error   = '';
$values  = array( 'name' => '', 'email' => '', 'phone' => '', 'subject' => '', 'message' => '' );

if ( isset( $_POST['beacon_contact_nonce'] ) &&
     wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['beacon_contact_nonce'] ) ), 'beacon_contact_form' ) ) {

    $values['name']    = sanitize_text_field( wp_unslash( $_POST['contact_name']    ?? '' ) );
    $values['email']   = sanitize_email(      wp_unslash( $_POST['contact_email']   ?? '' ) );
    $values['phone']   = sanitize_text_field( wp_unslash( $_POST['contact_phone']   ?? '' ) );
    $values['subject'] = sanitize_text_field( wp_unslash( $_POST['contact_subject'] ?? '' ) );
    $values['message'] = sanitize_textarea_field( wp_unslash( $_POST['contact_message'] ?? '' ) );

    if ( empty( $values['name'] ) || empty( $values['email'] ) || empty( $values['message'] ) ) {
        $error = 'Please fill in all required fields.';
    } elseif ( ! is_email( $values['email'] ) ) {
        $error = 'Please enter a valid email address.';
    } else {
        $to      = get_option( 'admin_email' );
        $subject = $values['subject'] ? $values['subject'] : 'New Enquiry from ' . $values['name'];
        $body    = "Name: {$values['name']}\nEmail: {$values['email']}\nPhone: {$values['phone']}\n\nMessage:\n{$values['message']}";
        $headers = array( 'Content-Type: text/plain; charset=UTF-8', 'Reply-To: ' . $values['email'] );

        $sent = wp_mail( $to, $subject, $body, $headers );
        if ( ! $sent ) {
            $error = 'Something went wrong. Please try again or contact us directly.';
        }
    }
}

get_header();
?>

<!-- ========================================
     HERO BANNER
======================================== -->
<section class="ct-hero">
    <div class="ct-hero__shapes">
        <span class="ct-shape ct-shape--1"></span>
        <span class="ct-shape ct-shape--2"></span>
        <span class="ct-shape ct-shape--3"></span>
    </div>
    <div class="container ct-hero__inner">
        <nav class="breadcrumb d-inline-flex align-items-center">
            <a href="<?php echo esc_url( home_url('/') ); ?>"><i class="fa-solid fa-house"></i> Home</a>
            <span><i class="fa-solid fa-chevron-right"></i></span>
            <span>Contact Us</span>
        </nav>
        <h1>Get In <span class="ab-accent">Touch</span></h1>
        <p>We'd love to hear from you. Reach out for admissions, programs, or any school inquiries — our team will respond as soon as possible.</p>
    </div>
    <div class="ct-hero__wave">
        <svg viewBox="0 0 1440 80" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
            <path d="M0 40 C360 80 1080 0 1440 40 L1440 80 L0 80 Z" fill="#f5f6fb"/>
        </svg>
    </div>
</section>

<!-- ========================================
     QUICK INFO CARDS
======================================== -->
<div class="ct-quick-bar">
    <div class="container">
        <div class="ct-quick-bar__grid">

            <div class="ct-quick-card d-flex align-items-center gap-3">
                <div class="ct-quick-icon d-flex align-items-center justify-content-center" style="--qc:#5b4bff;">
                    <i class="fa-solid fa-location-dot"></i>
                </div>
                <div class="d-flex flex-column">
                    <strong>Visit Us</strong>
                    <span>Scheme 33, Gulzar-e-Hijri, Karachi</span>
                </div>
            </div>

            <div class="ct-quick-card d-flex align-items-center gap-3">
                <div class="ct-quick-icon d-flex align-items-center justify-content-center" style="--qc:#10b981;">
                    <i class="fa-solid fa-phone-volume"></i>
                </div>
                <div class="d-flex flex-column">
                    <strong>Call Us</strong>
                    <span><a href="tel:+923162984609">0316 2984609</a></span>
                </div>
            </div>

            <div class="ct-quick-card d-flex align-items-center gap-3">
                <div class="ct-quick-icon d-flex align-items-center justify-content-center" style="--qc:#f59e0b;">
                    <i class="fa-solid fa-envelope-open-text"></i>
                </div>
                <div class="d-flex flex-column">
                    <strong>Email Us</strong>
                    <span><a href="mailto:beaconacademy5@gmail.com">beaconacademy5@gmail.com</a></span>
                </div>
            </div>

            <div class="ct-quick-card d-flex align-items-center gap-3">
                <div class="ct-quick-icon d-flex align-items-center justify-content-center" style="--qc:#e84393;">
                    <i class="fa-solid fa-clock"></i>
                </div>
                <div class="d-flex flex-column">
                    <strong>Office Hours</strong>
                    <span>Mon – Sat: 8 AM – 4 PM</span>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- ========================================
     MAIN CONTACT SECTION
======================================== -->
<section class="section ct-main">
    <div class="container ct-main__grid">

        <!-- LEFT: Info Panel -->
        <aside class="ct-info-panel">
            <div class="ct-info-panel__top">
                <span class="eyebrow"><i class="fa-solid fa-circle-info"></i> &nbsp;Contact Information</span>
                <h2>Let's Start a Conversation</h2>
                <p>Whether you're a prospective student, parent, or community member — we're here to help. Reach out and we'll get back to you promptly.</p>
            </div>

            <ul class="ct-info-list d-flex flex-column">
                <li class="d-flex align-items-start gap-3">
                    <div class="ct-info-icon"><i class="fa-solid fa-location-dot"></i></div>
                    <div>
                        <strong>Address</strong>
                        <span>C-1869 &amp; A-83, Behind Gulzar-e-Hijri Police Station,<br>Scheme 33, Karachi – 75620</span>
                    </div>
                </li>
                <li class="d-flex align-items-start gap-3">
                    <div class="ct-info-icon"><i class="fa-solid fa-phone"></i></div>
                    <div>
                        <strong>Phone</strong>
                        <span><a href="tel:+923162984609">0316 2984609</a></span>
                    </div>
                </li>
                <li class="d-flex align-items-start gap-3">
                    <div class="ct-info-icon"><i class="fa-solid fa-envelope"></i></div>
                    <div>
                        <strong>Email</strong>
                        <span><a href="mailto:beaconacademy5@gmail.com">beaconacademy5@gmail.com</a></span>
                    </div>
                </li>
                <li class="d-flex align-items-start gap-3">
                    <div class="ct-info-icon"><i class="fa-solid fa-clock"></i></div>
                    <div>
                        <strong>Working Hours</strong>
                        <span>Monday – Saturday<br>8:00 AM – 4:00 PM</span>
                    </div>
                </li>
            </ul>

            <div class="ct-social">
                <strong>Follow Us</strong>
                <div class="ct-social__links d-flex align-items-center gap-2">
                    <a href="#" aria-label="Facebook" style="--sc:#1877f2;"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" aria-label="Instagram" style="--sc:#e1306c;"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" aria-label="WhatsApp" style="--sc:#25d366;"><i class="fa-brands fa-whatsapp"></i></a>
                    <a href="#" aria-label="YouTube" style="--sc:#ff0000;"><i class="fa-brands fa-youtube"></i></a>
                </div>
            </div>

            <div class="ct-info-deco"></div>
        </aside>

        <!-- RIGHT: Contact Form -->
        <div class="ct-form-wrap">
            <?php if ( $sent ) : ?>
                <div class="ct-success">
                    <div class="ct-success__icon"><i class="fa-solid fa-circle-check"></i></div>
                    <h3>Message Sent Successfully!</h3>
                    <p>Thank you for reaching out, <strong><?php echo esc_html( $values['name'] ); ?></strong>. We'll get back to you as soon as possible.</p>
                    <a href="<?php the_permalink(); ?>" class="btn btn--primary">Send Another Message</a>
                </div>
            <?php else : ?>

                <?php if ( $error ) : ?>
                    <div class="ct-alert ct-alert--error d-flex align-items-center">
                        <i class="fa-solid fa-triangle-exclamation"></i>
                        <?php echo esc_html( $error ); ?>
                    </div>
                <?php endif; ?>

                <div class="ct-form-header">
                    <span class="eyebrow"><i class="fa-solid fa-paper-plane"></i> &nbsp;Send Us a Message</span>
                    <h3>We Reply Within 24 Hours</h3>
                </div>

                <form class="ct-form" method="post" action="<?php the_permalink(); ?>#contact-form" id="contact-form" novalidate>
                    <?php wp_nonce_field( 'beacon_contact_form', 'beacon_contact_nonce' ); ?>

                    <div class="ct-form__row row g-0">
                        <div class="ct-field col-md-12">
                            <label for="ct_name">Full Name <span class="req">*</span></label>
                            <div class="ct-input-wrap d-flex align-items-center">
                                <i class="fa-solid fa-user"></i>
                                <input type="text" id="ct_name" name="contact_name" placeholder="e.g. Ahmed Ali"
                                    value="<?php echo esc_attr( $values['name'] ); ?>" required>
                            </div>
                        </div>
                        <div class="ct-field col-md-12">
                            <label for="ct_email">Email Address <span class="req">*</span></label>
                            <div class="ct-input-wrap d-flex align-items-center">
                                <i class="fa-solid fa-envelope"></i>
                                <input type="email" id="ct_email" name="contact_email" placeholder="your@email.com"
                                    value="<?php echo esc_attr( $values['email'] ); ?>" required>
                            </div>
                        </div>
                    </div>

                    <div class="ct-form__row row g-0">
                        <div class="ct-field col-md-12">
                            <label for="ct_phone">Phone Number</label>
                            <div class="ct-input-wrap d-flex align-items-center">
                                <i class="fa-solid fa-phone"></i>
                                <input type="tel" id="ct_phone" name="contact_phone" placeholder="0300 0000000"
                                    value="<?php echo esc_attr( $values['phone'] ); ?>">
                            </div>
                        </div>
                        <div class="ct-field col-md-12">
                            <label for="ct_subject">Subject</label>
                            <div class="ct-input-wrap d-flex align-items-center">
                                <i class="fa-solid fa-tag"></i>
                                <select id="ct_subject" name="contact_subject">
                                    <option value="" <?php selected( $values['subject'], '' ); ?>>Select a subject…</option>
                                    <option value="Admission Enquiry"   <?php selected( $values['subject'], 'Admission Enquiry' ); ?>>Admission Enquiry</option>
                                    <option value="Fee Structure"       <?php selected( $values['subject'], 'Fee Structure' ); ?>>Fee Structure</option>
                                    <option value="Academic Programs"   <?php selected( $values['subject'], 'Academic Programs' ); ?>>Academic Programs</option>
                                    <option value="General Enquiry"     <?php selected( $values['subject'], 'General Enquiry' ); ?>>General Enquiry</option>
                                    <option value="Other"               <?php selected( $values['subject'], 'Other' ); ?>>Other</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="ct-field">
                        <label for="ct_message">Your Message <span class="req">*</span></label>
                        <div class="ct-input-wrap ct-input-wrap--area d-flex align-items-center">
                            <i class="fa-solid fa-message"></i>
                            <textarea id="ct_message" name="contact_message" rows="5"
                                placeholder="Write your enquiry here…" required><?php echo esc_textarea( $values['message'] ); ?></textarea>
                        </div>
                    </div>

                    <button type="submit" class="btn btn--primary btn--lg ct-submit">
                        <span>Send Message</span>
                        <i class="fa-solid fa-paper-plane"></i>
                    </button>
                </form>

            <?php endif; ?>
        </div>

    </div>
</section>

<!-- ========================================
     MAP SECTION
======================================== -->
<section class="ct-map-section">
    <div class="container">
        <div class="section-head">
            <span class="eyebrow"><i class="fa-solid fa-map-location-dot"></i> &nbsp;Find Us</span>
            <h2>Visit Our Campus</h2>
        </div>
    </div>
    <div class="ct-map-wrap">
        <iframe
            src="https://maps.google.com/maps?q=Scheme+33+C-1869+Gulzar+e+Hijri+Police+Station+Karachi&output=embed&z=15"
            width="100%" height="420" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
            title="Beacon Academy Map">
        </iframe>
        <a href="https://maps.google.com/?q=Scheme+33+Karachi" target="_blank" rel="noopener" class="ct-map-btn btn btn--primary btn--lg">
            <i class="fa-solid fa-diamond-turn-right"></i> Get Directions
        </a>
    </div>
</section>

<!-- ========================================
     CTA BAND
======================================== -->
<section class="ab-cta-band">
    <div class="container ab-cta-band__inner">
        <div class="ab-cta-band__text">
            <span class="eyebrow" style="color:#ffb822; border-color:rgba(255,184,34,.25);">
                <i class="fa-solid fa-graduation-cap"></i> &nbsp;Admissions Open
            </span>
            <h2>Ready to Join Beacon Academy?</h2>
            <p>Limited seats available. Apply now and secure your child's future with us.</p>
        </div>
        <div class="ab-cta-band__btns d-flex align-items-center justify-content-center flex-wrap gap-3">
            <a href="<?php echo esc_url( home_url('/#enroll') ); ?>" class="btn btn--accent btn--lg">
                <i class="fa-solid fa-pen-to-square"></i> Apply for Admission
            </a>
            <a href="tel:+923162984609" class="btn btn--outline-light btn--lg">
                <i class="fa-solid fa-phone"></i> 0316 2984609
            </a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
