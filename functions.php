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
 * Branded HTML email template used by all three form handlers.
 *
 * @param string $form_type  'admission' | 'homepage' | 'contact'
 * @param array  $fields     Associative array of label => value pairs.
 * @return string            Full HTML email body.
 */
function ziauddin_html_email( $form_type, $fields ) {
    $logo_id  = get_theme_mod( 'custom_logo' );
    $logo_url = $logo_id ? wp_get_attachment_image_url( $logo_id, 'medium' ) : '';
    $date     = date_i18n( 'F j, Y \a\t g:i A' );

    $types = array(
        'admission' => array( 'label' => 'New Admission Application', 'color' => '#16a34a' ),
        'contact'   => array( 'label' => 'New Contact Enquiry',       'color' => '#2563eb' ),
        'homepage'  => array( 'label' => 'New General Enquiry',       'color' => '#7c3aed' ),
    );
    $t = isset( $types[ $form_type ] ) ? $types[ $form_type ] : $types['contact'];

    $rows = '';
    $odd  = true;
    foreach ( $fields as $label => $value ) {
        $bg    = $odd ? '#f8fafc' : '#ffffff';
        $rows .= '<tr>'
               . '<td bgcolor="' . $bg . '" style="background:' . $bg . ';padding:11px 20px;font-family:Arial,Helvetica,sans-serif;font-weight:700;color:#374151;width:36%;font-size:13px;border-bottom:1px solid #e5e7eb;">' . esc_html( $label ) . '</td>'
               . '<td bgcolor="' . $bg . '" style="background:' . $bg . ';padding:11px 20px;font-family:Arial,Helvetica,sans-serif;color:#1f2937;font-size:13px;border-bottom:1px solid #e5e7eb;">' . nl2br( esc_html( $value ) ) . '</td>'
               . '</tr>';
        $odd = ! $odd;
    }

    $logo_block = $logo_url
        ? '<img src="' . esc_url( $logo_url ) . '" alt="The Beacon Academy &amp; College" height="64" style="display:block;margin:0 auto 16px;height:64px;"><br>'
        : '<div style="display:inline-block;background:#f59e0b;border-radius:50%;width:60px;height:60px;line-height:60px;text-align:center;font-size:28px;color:#ffffff;margin-bottom:16px;font-family:Arial,Helvetica,sans-serif;">&#127891;</div><br>';

    return '<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
</head>
<body style="margin:0;padding:0;background:#f0f4f8;">
<table width="100%" cellpadding="0" cellspacing="0" bgcolor="#f0f4f8" style="background:#f0f4f8;">
<tr><td align="center" style="padding:36px 16px;">

  <table width="600" cellpadding="0" cellspacing="0" bgcolor="#ffffff" style="max-width:600px;width:100%;background:#ffffff;">

    <!-- HEADER -->
    <tr>
      <td bgcolor="#1e3a5f" align="center" style="background:#1e3a5f;padding:36px 40px;text-align:center;">
        ' . $logo_block . '
        <h1 style="margin:0 0 6px;color:#ffffff;font-size:22px;font-weight:700;font-family:Arial,Helvetica,sans-serif;">The Beacon Academy &amp; College</h1>
        <p style="margin:0;color:#93c5fd;font-size:12px;font-family:Arial,Helvetica,sans-serif;letter-spacing:0.8px;">ZIA UDDIN BOARD AFFILIATION &nbsp;&middot;&nbsp; KARACHI</p>
      </td>
    </tr>

    <!-- FORM TYPE BADGE -->
    <tr>
      <td bgcolor="' . esc_attr( $t['color'] ) . '" align="center" style="background:' . esc_attr( $t['color'] ) . ';padding:14px 40px;">
        <span style="color:#ffffff;font-size:14px;font-weight:700;font-family:Arial,Helvetica,sans-serif;letter-spacing:0.5px;">' . esc_html( $t['label'] ) . ' Received</span>
      </td>
    </tr>

    <!-- DATE -->
    <tr>
      <td bgcolor="#ffffff" align="right" style="background:#ffffff;padding:18px 36px 6px;text-align:right;">
        <span style="color:#9ca3af;font-size:12px;font-family:Arial,Helvetica,sans-serif;">Submitted: ' . esc_html( $date ) . '</span>
      </td>
    </tr>

    <!-- DETAILS TABLE -->
    <tr>
      <td bgcolor="#ffffff" style="background:#ffffff;padding:0 32px 28px;">
        <table width="100%" cellpadding="0" cellspacing="0">
          <tr>
            <td colspan="2" bgcolor="#1e3a5f" style="background:#1e3a5f;padding:11px 20px;">
              <span style="color:#ffffff;font-size:13px;font-weight:700;font-family:Arial,Helvetica,sans-serif;">&#128203; Submission Details</span>
            </td>
          </tr>
          ' . $rows . '
        </table>
      </td>
    </tr>

    <!-- NOTE -->
    <tr>
      <td bgcolor="#ffffff" style="background:#ffffff;padding:0 32px 32px;">
        <table width="100%" cellpadding="0" cellspacing="0">
          <tr>
            <td bgcolor="#eff6ff" style="background:#eff6ff;padding:14px 18px;border-left:4px solid #2563eb;">
              <p style="margin:0;color:#1e40af;font-size:13px;font-family:Arial,Helvetica,sans-serif;">Please respond to this enquiry within <strong>24 hours</strong>. Reply directly to the sender using the Reply-To address in this email.</p>
            </td>
          </tr>
        </table>
      </td>
    </tr>

    <!-- FOOTER -->
    <tr>
      <td bgcolor="#0d2137" align="center" style="background:#0d2137;padding:28px 40px;text-align:center;">
        <p style="margin:0 0 8px;color:#ffffff;font-size:13px;font-weight:700;font-family:Arial,Helvetica,sans-serif;">The Beacon Academy &amp; College</p>
        <p style="margin:0 0 5px;color:#94a3b8;font-size:11px;font-family:Arial,Helvetica,sans-serif;">C-1869 &amp; A-83, Behind Gulzar-e-Hijri Police Station, Scheme 33, Karachi &#8211; 75620</p>
        <p style="margin:0 0 12px;color:#94a3b8;font-size:11px;font-family:Arial,Helvetica,sans-serif;">Mon &#8211; Sat: 8:00 AM &#8211; 4:00 PM</p>
        <p style="margin:0;color:#64748b;font-size:11px;font-family:Arial,Helvetica,sans-serif;">Tel: 0316 2984609 &nbsp;|&nbsp; Email: beaconacademy5@gmail.com</p>
      </td>
    </tr>

  </table>

</td></tr>
</table>
</body>
</html>';
}

/**
 * Enroll Now AJAX handler
 */
function ziauddin_enroll_submit() {

    // 1) Security: verify nonce.
    if ( ! isset( $_POST['enroll_nonce'] ) || ! wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['enroll_nonce'] ) ), 'enroll_submit' ) ) {
        wp_send_json_error( array( 'message' => 'Security check failed. Please refresh the page and try again.' ) );
    }

    // 2) Collect + sanitize input.
    $first   = sanitize_text_field( wp_unslash( $_POST['first_name'] ?? '' ) );
    $last    = sanitize_text_field( wp_unslash( $_POST['last_name']  ?? '' ) );
    $dob     = sanitize_text_field( wp_unslash( $_POST['dob']        ?? '' ) );
    $gender  = sanitize_text_field( wp_unslash( $_POST['gender']     ?? '' ) );
    $program = sanitize_text_field( wp_unslash( $_POST['program']    ?? '' ) );
    $address = sanitize_textarea_field( wp_unslash( $_POST['address'] ?? '' ) );
    $phone   = sanitize_text_field( wp_unslash( $_POST['phone']      ?? '' ) );
    $email   = sanitize_email( wp_unslash( $_POST['email']           ?? '' ) );

    // 3) Validate.
    if ( '' === $first || '' === $last || '' === $dob || '' === $gender || '' === $program || '' === $address || '' === $phone ) {
        wp_send_json_error( array( 'message' => 'Please fill in all required fields.' ) );
    }
    if ( '' !== $email && ! is_email( $email ) ) {
        wp_send_json_error( array( 'message' => 'Please enter a valid email address.' ) );
    }

    // 4) Optional student photo: validate + attach.
    $attachments = array();
    $tmp_copy    = '';
    if ( ! empty( $_FILES['photo']['tmp_name'] ) && is_uploaded_file( $_FILES['photo']['tmp_name'] ) ) {
        $filetype = wp_check_filetype( sanitize_file_name( $_FILES['photo']['name'] ) );
        $allowed  = array( 'jpg', 'jpeg', 'png', 'gif', 'webp' );
        $size_ok  = (int) $_FILES['photo']['size'] <= 5 * 1024 * 1024; // 5 MB max
        if ( $filetype['ext'] && in_array( strtolower( $filetype['ext'] ), $allowed, true ) && $size_ok ) {
            $safe_name = sanitize_file_name( strtolower( $first . '-' . $last ) . '-photo.' . $filetype['ext'] );
            $tmp_copy  = trailingslashit( get_temp_dir() ) . $safe_name;
            if ( move_uploaded_file( $_FILES['photo']['tmp_name'], $tmp_copy ) ) {
                $attachments[] = $tmp_copy;
            }
        }
    }

    // 5) Build the email — send to the school's own mailbox.
    $to      = defined( 'ZIAUDDIN_SMTP_USER' ) ? ZIAUDDIN_SMTP_USER : get_option( 'admin_email' );
    $subject = 'New Admission Application – ' . $first . ' ' . $last;
    $body    = ziauddin_html_email( 'admission', array(
        'Full Name'       => $first . ' ' . $last,
        'Date of Birth'   => $dob,
        'Gender'          => $gender,
        'Class / Program' => $program,
        'Address'         => $address,
        'Contact Number'  => $phone,
        'Email'           => $email ? $email : 'Not provided',
    ) );

    $headers = array( 'Content-Type: text/html; charset=UTF-8' );
    if ( $email ) {
        $headers[] = 'Reply-To: ' . $first . ' ' . $last . ' <' . $email . '>';
    }

    // 6) Send + report the real result.
    $sent = wp_mail( $to, $subject, $body, $headers, $attachments );

    // 7) Clean up the temporary photo copy.
    if ( $tmp_copy && file_exists( $tmp_copy ) ) {
        @unlink( $tmp_copy );
    }

    if ( $sent ) {
        wp_send_json_success( array( 'message' => 'Application submitted successfully! Our team will contact you soon.' ) );
    } else {
        wp_send_json_error( array( 'message' => 'Sorry, we could not send your application right now. Please call 0316 2984609 or try again shortly.' ) );
    }
}
add_action( 'wp_ajax_enroll_submit',        'ziauddin_enroll_submit' );
add_action( 'wp_ajax_nopriv_enroll_submit', 'ziauddin_enroll_submit' );

/**
 * Configure PHPMailer to send via SMTP (credentials stored in wp-config.php).
 */
function ziauddin_configure_smtp( $phpmailer ) {
    $phpmailer->isSMTP();
    $phpmailer->Host       = defined( 'ZIAUDDIN_SMTP_HOST' )     ? ZIAUDDIN_SMTP_HOST     : '';
    $phpmailer->SMTPAuth   = true;
    $phpmailer->Port       = defined( 'ZIAUDDIN_SMTP_PORT' )     ? ZIAUDDIN_SMTP_PORT     : 465;
    $phpmailer->SMTPSecure = defined( 'ZIAUDDIN_SMTP_SECURE' )   ? ZIAUDDIN_SMTP_SECURE   : 'ssl';
    $phpmailer->Username   = defined( 'ZIAUDDIN_SMTP_USER' )     ? ZIAUDDIN_SMTP_USER     : '';
    $phpmailer->Password   = defined( 'ZIAUDDIN_SMTP_PASS' )     ? ZIAUDDIN_SMTP_PASS     : '';
    $phpmailer->From       = defined( 'ZIAUDDIN_SMTP_FROM' )     ? ZIAUDDIN_SMTP_FROM     : '';
    $phpmailer->FromName   = defined( 'ZIAUDDIN_SMTP_FROMNAME' ) ? ZIAUDDIN_SMTP_FROMNAME : 'Ziauddin Board Admission';
    
    // Add SSL verification options to avoid local development SSL issues
    $phpmailer->SMTPOptions = array(
        'ssl' => array(
            'verify_peer'       => false,
            'verify_peer_name'  => false,
            'allow_self_signed' => true
        )
    );
}
add_action( 'phpmailer_init', 'ziauddin_configure_smtp' );

/**
 * Log wp_mail failures so SMTP issues are visible in debug.log.
 */
function ziauddin_log_mail_errors( $wp_error ) {
    if ( is_wp_error( $wp_error ) ) {
        error_log( '=== WP_MAIL FAILED ===' );
        error_log( 'Error code: ' . $wp_error->get_error_code() );
        error_log( 'Error message: ' . $wp_error->get_error_message() );
        error_log( 'Error data: ' . print_r( $wp_error->get_error_data(), true ) );
    }
}
add_action( 'wp_mail_failed', 'ziauddin_log_mail_errors' );

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
 * Admin menu: SMTP Test Email page under Tools.
 */
function ziauddin_smtp_test_menu() {
    add_management_page(
        'SMTP Test Email',
        'SMTP Test Email',
        'manage_options',
        'ziauddin-smtp-test',
        'ziauddin_smtp_test_page'
    );
}
add_action( 'admin_menu', 'ziauddin_smtp_test_menu' );

function ziauddin_smtp_test_page() {
    if ( ! current_user_can( 'manage_options' ) ) {
        wp_die( 'Access denied.' );
    }

    $result  = null;
    $to_addr = '';

    if ( isset( $_POST['ziauddin_smtp_test_nonce'] ) &&
         wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['ziauddin_smtp_test_nonce'] ) ), 'ziauddin_smtp_test' ) ) {

        $to_addr = sanitize_email( wp_unslash( $_POST['test_to'] ?? '' ) );
        if ( is_email( $to_addr ) ) {
            $sent = wp_mail(
                $to_addr,
                'SMTP Test — Ziauddin Board Admission',
                ziauddin_html_email( 'contact', array(
                    'Test'   => 'Yeh ek test email hai.',
                    'From'   => defined( 'ZIAUDDIN_SMTP_FROM' ) ? ZIAUDDIN_SMTP_FROM : 'N/A',
                    'Host'   => defined( 'ZIAUDDIN_SMTP_HOST' ) ? ZIAUDDIN_SMTP_HOST : 'N/A',
                    'Port'   => defined( 'ZIAUDDIN_SMTP_PORT' ) ? ZIAUDDIN_SMTP_PORT : 'N/A',
                    'Secure' => defined( 'ZIAUDDIN_SMTP_SECURE' ) ? ZIAUDDIN_SMTP_SECURE : 'N/A',
                ) ),
                array( 'Content-Type: text/html; charset=UTF-8' )
            );
            $result = $sent;
        }
    }

    $host   = defined( 'ZIAUDDIN_SMTP_HOST' )   ? ZIAUDDIN_SMTP_HOST   : '(not set)';
    $port   = defined( 'ZIAUDDIN_SMTP_PORT' )   ? ZIAUDDIN_SMTP_PORT   : '(not set)';
    $secure = defined( 'ZIAUDDIN_SMTP_SECURE' ) ? ZIAUDDIN_SMTP_SECURE : '(not set)';
    $user   = defined( 'ZIAUDDIN_SMTP_USER' )   ? ZIAUDDIN_SMTP_USER   : '(not set)';
    $pass   = defined( 'ZIAUDDIN_SMTP_PASS' )   ? ( ZIAUDDIN_SMTP_PASS === 'APNA_PASSWORD_YAHAN_LIKHEIN' ? '<span style="color:red;">&#9888; Password abhi nahi dala!</span>' : '<span style="color:green;">&#10003; Set hai (hidden)</span>' ) : '(not set)';
    ?>
    <div class="wrap">
        <h1>&#9993; SMTP Test Email</h1>

        <?php if ( true === $result ) : ?>
            <div class="notice notice-success"><p><strong>&#10003; Email successfully bheji gayi!</strong> Apna inbox check karein: <strong><?php echo esc_html( $to_addr ); ?></strong></p></div>
        <?php elseif ( false === $result ) : ?>
            <div class="notice notice-error"><p><strong>&#10007; Email nahi gayi.</strong> Password check karein ya hosting SMTP settings verify karein.</p></div>
        <?php endif; ?>

        <div style="background:#fff;border:1px solid #ccd0d4;border-radius:4px;padding:20px 24px;max-width:600px;margin:20px 0;">
            <h2 style="margin-top:0;">Current SMTP Settings</h2>
            <table class="widefat striped" style="max-width:500px;">
                <tbody>
                    <tr><td><strong>Host</strong></td><td><?php echo esc_html( $host ); ?></td></tr>
                    <tr><td><strong>Port</strong></td><td><?php echo esc_html( $port ); ?></td></tr>
                    <tr><td><strong>Encryption</strong></td><td><?php echo esc_html( $secure ); ?></td></tr>
                    <tr><td><strong>Username</strong></td><td><?php echo esc_html( $user ); ?></td></tr>
                    <tr><td><strong>Password</strong></td><td><?php echo wp_kses( $pass, array( 'span' => array( 'style' => array() ) ) ); ?></td></tr>
                </tbody>
            </table>
        </div>

        <div style="background:#fff;border:1px solid #ccd0d4;border-radius:4px;padding:20px 24px;max-width:600px;">
            <h2 style="margin-top:0;">Test Email Bhejein</h2>
            <form method="post">
                <?php wp_nonce_field( 'ziauddin_smtp_test', 'ziauddin_smtp_test_nonce' ); ?>
                <table class="form-table">
                    <tr>
                        <th><label for="test_to">Email address (jahan test email chahiye)</label></th>
                        <td>
                            <input type="email" name="test_to" id="test_to" class="regular-text"
                                   value="<?php echo esc_attr( $to_addr ?: 'wahajsiddiqui2828@gmail.com' ); ?>" required>
                        </td>
                    </tr>
                </table>
                <?php submit_button( 'Test Email Bhejo &#9993;' ); ?>
            </form>
        </div>
    </div>
    <?php
}

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
