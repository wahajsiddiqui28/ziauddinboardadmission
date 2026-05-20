# AGENTS.md — Ziauddin Board Admission WordPress Theme

> This file is intended for AI coding agents. If you are reading this, you are expected to know nothing about the project beyond what is written here.

---

## Project Overview

This is a custom WordPress theme named **"Ziauddin Board Admission"** (text domain: `ziauddinboardadmission`) developed for **The Beacon Academy & College**, an educational institution based in Karachi, Pakistan. The theme serves as a marketing and admission portal showcasing academic programs, school information, a blog, and contact/enrollment functionality.

- **Theme Name:** Ziauddin Board Admission
- **Version:** 1.0.0
- **Author:** Wahaj Siddiqui
- **License:** GNU General Public License v2 or later
- **Text Domain:** `ziauddinboardadmission`

The theme is a standalone WordPress theme with no external build pipeline. All code is written directly in PHP, CSS, and vanilla JavaScript.

---

## Technology Stack

| Layer | Technology |
|-------|-----------|
| CMS | WordPress (PHP) |
| CSS Framework | Bootstrap 5.2.3 (loaded from CDN) |
| Icons | Font Awesome 6.5.1 (loaded from CDN) |
| Fonts | Google Fonts — Plus Jakarta Sans, Dancing Script |
| JS | Vanilla JavaScript (no jQuery dependency in theme code) |
| Build Tools | **None** — no npm, composer, webpack, or similar |

### External CDN Dependencies

Enqueued in `functions.php`:
- Bootstrap 5.2.3 CSS + JS bundle
- Font Awesome 6.5.1 CSS
- Google Fonts (linked directly in `header.php`)

---

## Project Structure

```
.
├── style.css              # Theme header metadata only (11 lines)
├── functions.php          # Theme setup, asset enqueueing, AJAX handlers, helpers
├── header.php             # Site header, top bar, navigation, branding
├── footer.php             # Site footer, enroll modal form, scroll-to-top
├── index.php              # Default blog post listing
├── front-page.php         # Custom homepage (hero, about, stats, programs, testimonials, contact, CTA)
├── page.php               # Generic page template
├── page-about.php         # About Us template
├── page-contact.php       # Contact Us template with form
├── page-latest-blogs.php  # Blog listing with category filter + pagination
├── single.php             # Single blog post with sidebar, related posts, sharing
├── archive.php            # Archive/category listing
├── search.php             # Search results
├── 404.php                # Not found page
├── sidebar.php            # Widget sidebar
├── comments.php           # Comments display
├── screenshot.txt         # Placeholder note for theme screenshot
└── assets/
    ├── css/main.css       # All custom theme styles (~3,478 lines)
    └── js/main.js         # Theme JavaScript (~196 lines)
```

### Template Hierarchy Notes

- `front-page.php` is used for the static front page.
- `page-{template}.php` files are **Page Templates** with custom `Template Name:` headers. They must be assigned via the WordPress page editor.
- `single.php` handles standard blog posts with a custom sidebar layout.
- `index.php` is the fallback for blog archives.

---

## Code Organization

### PHP Naming Conventions

- **Function prefix:** `ziauddin_` (e.g., `ziauddin_theme_setup()`, `ziauddin_enqueue_assets()`)
- **Text domain:** `ziauddinboardadmission` — used in all `__()`, `_e()`, `esc_html__()` calls
- **Nonce actions:** `enroll_submit`, `hp_contact_form`, `beacon_contact_form`
- **AJAX action:** `enroll_submit` (handles modal form submission)

### CSS Naming Conventions

The project uses a **BEM-like naming system** with section prefixes:

- Homepage: `.hero__*`, `.about-section`, `.stats__*`, `.programs__*`, `.why__*`, `.testimonials__*`, `.hp-contact__*`, `.cta-band__*`
- About page: `.about-hero__*`, `.ab-welcome__*`, `.ab-stats__*`, `.ab-mv__*`, `.ab-values__*`, `.ab-campus__*`
- Contact page: `.ct-hero__*`, `.ct-quick-*`, `.ct-main__*`, `.ct-form__*`
- Blog listing: `.bl-hero__*`, `.bl-featured__*`, `.bl-card__*`, `.bl-pagination`
- Single post: `.sp-hero__*`, `.sp-article`, `.sp-sidebar`, `.sp-widget`

Common utility classes:
- `.btn`, `.btn--primary`, `.btn--accent`, `.btn--lg`, `.btn--ghost`, `.btn--shine`
- `.eyebrow` — section label/badge style
- `.section` — generic section padding wrapper
- `.section-head` — centered heading block

### CSS Custom Properties (Variables)

Defined in `assets/css/main.css`:

```css
:root {
  --primary: #5b4bff;
  --primary-dark: #3d2fe0;
  --primary-soft: #ece9ff;
  --accent: #ffb822;
  --accent-dark: #f59e0b;
  --dark: #0f1535;
  --text: #4a4f6a;
  --muted: #7a7f99;
  --bg-soft: #f5f6fb;
  --white: #ffffff;
  --border: #ececf5;
  --shadow-sm: 0 4px 12px rgba(15, 21, 53, 0.06);
  --shadow-md: 0 12px 30px rgba(15, 21, 53, 0.08);
  --shadow-lg: 0 25px 60px rgba(91, 75, 255, 0.18);
  --radius: 16px;
  --radius-lg: 24px;
}
```

---

## Key Features & Logic

### 1. Enrollment / Admission Modal

A modal form is embedded in `footer.php` and controlled by `assets/js/main.js`. It submits via AJAX to the WordPress `admin-ajax.php` endpoint.

- **Trigger:** Buttons with class `.enrl-open-btn` or links to `#enroll`
- **Handler:** `ziauddin_enroll_submit()` in `functions.php`
- **Security:** Nonce verified, all inputs sanitized
- **Delivery:** Sends a plain-text email to the WordPress admin email via `wp_mail()`
- **Fields:** First name, last name, date of birth, gender, program, address, phone, email, photo upload (UI only — file is not processed server-side)

### 2. Contact Forms

There are **two contact forms**:

| Location | Template | Form ID | Nonce Action |
|----------|----------|---------|--------------|
| Homepage (`#contact`) | `front-page.php` | `hp_contact_form` | `hp_contact_form` |
| Contact page | `page-contact.php` | `beacon_contact_form` | `beacon_contact_form` |

Both are traditional POST forms (not AJAX) that send emails via `wp_mail()`.

### 3. Testimonial Slider

Vanilla JS slider in `assets/js/main.js`:
- Auto-advances every 6 seconds
- Prev/next buttons + dot indicators
- CSS class `.is-active` toggles visibility

### 4. Animated Stat Counters

Numbers animate when the `.stats` section scrolls into view. Triggered by `requestAnimationFrame` in `assets/js/main.js`.

### 5. Blog System

- `page-latest-blogs.php` displays a grid of posts with category filtering via `?cat={slug}` query parameter.
- Custom pagination with prev/next and numbered pages.
- Featured post shown on page 1 when no category filter is active.
- `single.php` includes: related posts, social sharing (Facebook, WhatsApp, Twitter/X), author box, recent posts sidebar, categories widget.

### 6. Menus

Two registered nav menu locations:
- `primary` — main header navigation
- `footer` — footer quick links

Fallback functions (`ziauddin_default_menu`, `ziauddin_default_footer_menu`) auto-generate links to pages using the `page-about.php`, `page-contact.php`, and `page-latest-blogs.php` templates.

---

## Build & Development Workflow

### No Build Step

This project has **zero build tooling**. There is no `package.json`, `composer.json`, `vite.config.js`, or similar.

### Making Changes

1. Edit PHP, CSS, or JS files directly.
2. Refresh the browser to see changes.
3. For CSS/JS cache busting, increment the version string in `functions.php`:
   ```php
   wp_enqueue_style( 'ziauddin-main', get_template_directory_uri() . '/assets/css/main.css', array( 'ziauddin-style' ), '1.0.1' );
   wp_enqueue_script( 'ziauddin-main', get_template_directory_uri() . '/assets/js/main.js', array( 'bootstrap-bundle' ), '1.0.1', true );
   ```

### Asset Loading Order

1. Bootstrap CSS
2. `style.css` (theme header — minimal, just metadata)
3. `assets/css/main.css` (all custom styles)
4. Bootstrap JS bundle
5. `assets/js/main.js`
6. Localized AJAX object `ziauddinAjax` (enqueued at priority 20)

---

## Testing Instructions

### Manual Testing Checklist

1. **Responsiveness:** Test on mobile (< 768px), tablet, and desktop. The hamburger menu should toggle the primary nav.
2. **Enrollment Modal:** Open modal, fill form, submit. Verify success message appears and email is received.
3. **Contact Forms:** Submit both homepage and contact-page forms. Check for validation errors and success states.
4. **Blog Pagination:** Navigate through blog pages on `page-latest-blogs.php`.
5. **Category Filter:** Click category buttons on the blog page and verify filtering works.
6. **Single Post:** Verify related posts, social share links, sidebar widgets, and comments display.
7. **Scroll-to-Top:** Appears after scrolling 400px and smooth-scrolls to top.
8. **Stat Counters:** Scroll to stats section and verify numbers animate.

### WordPress Requirements

- Requires a standard WordPress installation.
- `wp_mail()` requires a working mail configuration (SMTP plugin recommended for production).
- The theme expects pages to be created and assigned the custom page templates (`page-about.php`, `page-contact.php`, `page-latest-blogs.php`).

---

## Security Considerations

- **Nonce verification** on all forms (`wp_verify_nonce`).
- **Input sanitization:** `sanitize_text_field`, `sanitize_email`, `sanitize_textarea_field`, `wp_unslash`.
- **Output escaping:** `esc_url`, `esc_attr`, `esc_html`, `esc_textarea` used throughout templates.
- **ABSPATH guard** at the top of `functions.php`.
- **File upload in enrollment modal:** The file input is present in the UI but **not processed or saved server-side**. The AJAX handler ignores the `photo` field.
- Admin emails are retrieved via `get_option( 'admin_email' )` — ensure this is set correctly in WordPress settings.

---

## Deployment

This is a standard WordPress theme. Deploy by:

1. Copying the theme folder to `wp-content/themes/ziauddinboardadmission/`
2. Activating the theme in WordPress Admin → Appearance → Themes
3. Creating pages and assigning the appropriate page templates:
   - Homepage → `front-page.php` (set as static front page)
   - About Us → `page-about.php`
   - Contact Us → `page-contact.php`
   - Latest Blogs → `page-latest-blogs.php`
4. Setting up menus in Appearance → Menus (or rely on fallback auto-menus)
5. Uploading a `screenshot.png` (1200×900 px) for the theme preview

---

## Notes for AI Agents

- **Do not introduce build tools** unless explicitly requested. The project is intentionally simple.
- **Preserve the `ziauddin_` prefix** for all new PHP functions.
- **Use the text domain** `ziauddinboardadmission` for all translatable strings.
- **Maintain CDN dependencies** — Bootstrap and Font Awesome are loaded from CDNs, not local files.
- **Keep CSS in `assets/css/main.css`** — do not split into multiple CSS files unless there is a strong reason.
- **Keep JS in `assets/js/main.js`** — the project uses vanilla JS; avoid adding jQuery dependencies.
- **Update version numbers** in `functions.php` when modifying CSS or JS to bust caches.
