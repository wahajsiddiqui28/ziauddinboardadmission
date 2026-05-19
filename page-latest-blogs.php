<?php
/**
 * Template Name: Latest Blogs
 */

$paged    = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
$cat_slug = isset( $_GET['cat'] ) ? sanitize_key( $_GET['cat'] ) : '';

$query_args = array(
    'post_type'      => 'post',
    'post_status'    => 'publish',
    'posts_per_page' => 9,
    'paged'          => $paged,
    'orderby'        => 'date',
    'order'          => 'DESC',
);
if ( $cat_slug ) {
    $query_args['category_name'] = $cat_slug;
}

$blog_query = new WP_Query( $query_args );

/* Featured post — latest published */
$featured_query = new WP_Query( array(
    'post_type'      => 'post',
    'post_status'    => 'publish',
    'posts_per_page' => 1,
    'orderby'        => 'date',
    'order'          => 'DESC',
) );
$featured_id = 0;
if ( $featured_query->have_posts() ) {
    $featured_query->the_post();
    $featured_id = get_the_ID();
    wp_reset_postdata();
}

/* Categories for filter */
$categories = get_categories( array( 'hide_empty' => true ) );

get_header();
?>

<!-- ========================================
     HERO BANNER
======================================== -->
<section class="bl-hero">
    <div class="bl-hero__orb bl-hero__orb--1" aria-hidden="true"></div>
    <div class="bl-hero__orb bl-hero__orb--2" aria-hidden="true"></div>
    <div class="bl-hero__orb bl-hero__orb--3" aria-hidden="true"></div>
    <div class="bl-hero__mesh" aria-hidden="true"></div>
    <div class="container bl-hero__inner">
        <nav class="breadcrumb">
            <a href="<?php echo esc_url( home_url('/') ); ?>"><i class="fa-solid fa-house"></i> Home</a>
            <span><i class="fa-solid fa-chevron-right"></i></span>
            <span>Latest Blogs</span>
        </nav>
        <div class="bl-hero__badge">
            <i class="fa-solid fa-circle-dot"></i>
            <span>Knowledge Hub</span>
        </div>
        <h1>Latest <span class="ab-accent">Blogs</span> &amp; Articles</h1>
        <p>Stay updated with educational insights, exam tips, school news, and academic guidance from Beacon Academy.</p>
        <div class="bl-hero__trust">
            <span><i class="fa-solid fa-newspaper"></i> Educational Insights</span>
            <span class="bl-hero__sep"></span>
            <span><i class="fa-solid fa-lightbulb"></i> Exam Tips</span>
            <span class="bl-hero__sep"></span>
            <span><i class="fa-solid fa-school"></i> School News</span>
        </div>
    </div>
    <div class="bl-hero__wave">
        <svg viewBox="0 0 1440 80" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
            <path d="M0 40 C360 80 1080 0 1440 40 L1440 80 L0 80 Z" fill="#f5f6fb"/>
        </svg>
    </div>
</section>

<!-- ========================================
     FEATURED POST
======================================== -->
<?php if ( $featured_id && $paged === 1 && ! $cat_slug ) :
    $featured_query->rewind_posts();
    $featured_query->the_post();
    $feat_img   = get_the_post_thumbnail_url( null, 'large' );
    $feat_cats  = get_the_category();
    $feat_date  = get_the_date( 'd M Y' );
    $feat_title = get_the_title();
    $feat_exc   = wp_trim_words( get_the_excerpt(), 22, '…' );
    $feat_link  = get_permalink();
    $feat_author= get_the_author();
    wp_reset_postdata();
?>
<section class="bl-featured">
    <div class="container">
        <div class="bl-featured__inner">
            <div class="bl-featured__img">
                <?php if ( $feat_img ) : ?>
                    <img src="<?php echo esc_url( $feat_img ); ?>" alt="<?php echo esc_attr( $feat_title ); ?>">
                <?php else : ?>
                    <div class="bl-featured__noimg"><i class="fa-solid fa-newspaper"></i></div>
                <?php endif; ?>
                <div class="bl-featured__overlay"></div>
                <div class="bl-featured__img-badge"><i class="fa-solid fa-fire"></i> Featured</div>
            </div>
            <div class="bl-featured__content">
                <div class="bl-featured__meta">
                    <span class="bl-feat-label"><i class="fa-solid fa-bookmark"></i> Featured Post</span>
                    <?php if ( $feat_cats ) : ?>
                        <a class="bl-tag" href="<?php echo esc_url( get_category_link( $feat_cats[0]->term_id ) ); ?>">
                            <?php echo esc_html( $feat_cats[0]->name ); ?>
                        </a>
                    <?php endif; ?>
                </div>
                <h2><a href="<?php echo esc_url( $feat_link ); ?>"><?php echo esc_html( $feat_title ); ?></a></h2>
                <p><?php echo esc_html( $feat_exc ); ?></p>
                <div class="bl-featured__divider" aria-hidden="true"></div>
                <div class="bl-featured__bottom">
                    <div class="bl-post-author">
                        <div class="bl-author-avatar"><i class="fa-solid fa-user"></i></div>
                        <div>
                            <strong><?php echo esc_html( $feat_author ); ?></strong>
                            <span><i class="fa-regular fa-calendar"></i> <?php echo esc_html( $feat_date ); ?></span>
                        </div>
                    </div>
                    <a href="<?php echo esc_url( $feat_link ); ?>" class="btn btn--accent">
                        Read Article <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<!-- ========================================
     FILTER BAR + BLOG GRID
======================================== -->
<section class="section bl-section">
    <div class="container">

        <!-- Filter + Search Bar -->
        <div class="bl-filter-bar">
            <div class="bl-filter-cats">
                <a href="<?php echo esc_url( get_permalink() ); ?>"
                   class="bl-filter-btn <?php echo ! $cat_slug ? 'is-active' : ''; ?>">
                    <i class="fa-solid fa-border-all"></i> All Posts
                </a>
                <?php foreach ( $categories as $cat ) : ?>
                    <a href="<?php echo esc_url( add_query_arg( 'cat', $cat->slug, get_permalink() ) ); ?>"
                       class="bl-filter-btn <?php echo $cat_slug === $cat->slug ? 'is-active' : ''; ?>">
                        <?php echo esc_html( $cat->name ); ?>
                        <span class="bl-filter-count"><?php echo esc_html( $cat->count ); ?></span>
                    </a>
                <?php endforeach; ?>
            </div>
            <div class="bl-results-count">
                <?php if ( $blog_query->found_posts ) : ?>
                    <i class="fa-solid fa-layer-group"></i>
                    <?php echo esc_html( $blog_query->found_posts ); ?> Articles Found
                <?php endif; ?>
            </div>
        </div>

        <!-- Blog Grid -->
        <?php if ( $blog_query->have_posts() ) : ?>
            <div class="bl-grid">
                <?php $i = 0; while ( $blog_query->have_posts() ) : $blog_query->the_post(); $i++;
                    $post_img    = get_the_post_thumbnail_url( null, 'medium_large' );
                    $post_cats   = get_the_category();
                    $post_date   = get_the_date( 'd M Y' );
                    $post_title  = get_the_title();
                    $post_exc    = wp_trim_words( get_the_excerpt(), 16, '…' );
                    $post_link   = get_permalink();
                    $post_author = get_the_author();
                    $read_time   = max( 1, ceil( str_word_count( get_the_content() ) / 200 ) );
                ?>
                <article class="bl-card" style="animation-delay: <?php echo esc_attr( ( $i * 0.07 ) ); ?>s">
                    <a href="<?php echo esc_url( $post_link ); ?>" class="bl-card__img-link" tabindex="-1">
                        <div class="bl-card__img">
                            <?php if ( $post_img ) : ?>
                                <img src="<?php echo esc_url( $post_img ); ?>" alt="<?php echo esc_attr( $post_title ); ?>" loading="lazy">
                            <?php else : ?>
                                <div class="bl-card__noimg"><i class="fa-solid fa-newspaper"></i></div>
                            <?php endif; ?>
                        </div>
                        <?php if ( $post_cats ) : ?>
                            <span class="bl-card__cat"><?php echo esc_html( $post_cats[0]->name ); ?></span>
                        <?php endif; ?>
                    </a>
                    <div class="bl-card__body">
                        <div class="bl-card__meta">
                            <span><i class="fa-regular fa-calendar"></i> <?php echo esc_html( $post_date ); ?></span>
                            <span><i class="fa-regular fa-clock"></i> <?php echo esc_html( $read_time ); ?> min read</span>
                        </div>
                        <h3><a href="<?php echo esc_url( $post_link ); ?>"><?php echo esc_html( $post_title ); ?></a></h3>
                        <p><?php echo esc_html( $post_exc ); ?></p>
                        <div class="bl-card__footer">
                            <div class="bl-mini-author">
                                <div class="bl-mini-avatar"><i class="fa-solid fa-user"></i></div>
                                <span><?php echo esc_html( $post_author ); ?></span>
                            </div>
                            <a href="<?php echo esc_url( $post_link ); ?>" class="bl-read-more">
                                Read More <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </article>
                <?php endwhile; wp_reset_postdata(); ?>
            </div>

            <!-- Pagination -->
            <?php if ( $blog_query->max_num_pages > 1 ) :
                $base_url = get_permalink();
            ?>
            <nav class="bl-pagination" aria-label="Blog pagination">
                <?php if ( $paged > 1 ) : ?>
                    <a href="<?php echo esc_url( add_query_arg( array( 'paged' => $paged - 1, 'cat' => $cat_slug ?: null ), $base_url ) ); ?>"
                       class="bl-page-btn bl-page-btn--prev">
                        <i class="fa-solid fa-chevron-left"></i> Previous
                    </a>
                <?php endif; ?>

                <div class="bl-page-nums">
                    <?php for ( $p = 1; $p <= $blog_query->max_num_pages; $p++ ) : ?>
                        <a href="<?php echo esc_url( add_query_arg( array( 'paged' => $p, 'cat' => $cat_slug ?: null ), $base_url ) ); ?>"
                           class="bl-page-num <?php echo $p === $paged ? 'is-current' : ''; ?>">
                            <?php echo esc_html( $p ); ?>
                        </a>
                    <?php endfor; ?>
                </div>

                <?php if ( $paged < $blog_query->max_num_pages ) : ?>
                    <a href="<?php echo esc_url( add_query_arg( array( 'paged' => $paged + 1, 'cat' => $cat_slug ?: null ), $base_url ) ); ?>"
                       class="bl-page-btn bl-page-btn--next">
                        Next <i class="fa-solid fa-chevron-right"></i>
                    </a>
                <?php endif; ?>
            </nav>
            <?php endif; ?>

        <?php else : ?>
            <div class="bl-empty">
                <div class="bl-empty__icon"><i class="fa-solid fa-magnifying-glass"></i></div>
                <h3>No Articles Found</h3>
                <p>No blog posts are available in this category yet. Check back soon!</p>
                <a href="<?php echo esc_url( get_permalink() ); ?>" class="btn btn--primary">
                    <i class="fa-solid fa-rotate-left"></i> View All Posts
                </a>
            </div>
        <?php endif; ?>

    </div>
</section>

<!-- ========================================
     NEWSLETTER / CTA BAND
======================================== -->
<section class="bl-subscribe">
    <div class="bl-subscribe__orb bl-subscribe__orb--1" aria-hidden="true"></div>
    <div class="bl-subscribe__orb bl-subscribe__orb--2" aria-hidden="true"></div>
    <div class="bl-subscribe__mesh" aria-hidden="true"></div>
    <div class="container">
        <div class="bl-subscribe__inner">
            <div class="bl-subscribe__badge"><i class="fa-solid fa-circle-dot"></i> Admissions 2024–25 Open</div>
            <h2>Ready to Join <span class="bl-subscribe__accent">Beacon Academy?</span></h2>
            <p>Limited seats available. Apply now and secure your child's future with us.</p>
            <div class="bl-subscribe__btns">
                <a href="<?php echo esc_url( home_url('/#enroll') ); ?>" class="btn btn--accent btn--lg">
                    <i class="fa-solid fa-pen-to-square"></i> Apply for Admission
                </a>
                <a href="tel:+923162984609" class="btn btn--outline-light btn--lg">
                    <i class="fa-solid fa-phone"></i> 0316 2984609
                </a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
