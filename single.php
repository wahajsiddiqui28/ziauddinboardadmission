<?php get_header(); ?>

<?php while ( have_posts() ) : the_post();
    $post_cats   = get_the_category();
    $post_date   = get_the_date( 'd M Y' );
    $post_author = get_the_author();
    $post_thumb  = get_the_post_thumbnail_url( null, 'full' );
    $read_time   = max( 1, ceil( str_word_count( get_the_content() ) / 200 ) );

    /* Related posts */
    $related_args = array(
        'post_type'      => 'post',
        'posts_per_page' => 3,
        'post__not_in'   => array( get_the_ID() ),
        'orderby'        => 'rand',
    );
    if ( $post_cats ) {
        $related_args['category__in'] = array( $post_cats[0]->term_id );
    }
    $related_query = new WP_Query( $related_args );
?>

<!-- ========================================
     POST HERO
======================================== -->
<section class="sp-hero">
    <?php if ( $post_thumb ) : ?>
        <div class="sp-hero__bg" style="background-image:url('<?php echo esc_url( $post_thumb ); ?>');"></div>
        <div class="sp-hero__overlay"></div>
    <?php else : ?>
        <div class="sp-hero__gradient"></div>
    <?php endif; ?>

    <div class="container sp-hero__inner">
        <!-- Breadcrumb -->
        <nav class="breadcrumb breadcrumb--light">
            <a href="<?php echo esc_url( home_url('/') ); ?>"><i class="fa-solid fa-house"></i> Home</a>
            <span><i class="fa-solid fa-chevron-right"></i></span>
            <a href="<?php echo esc_url( get_post_type_archive_link('post') ); ?>">Blogs</a>
            <span><i class="fa-solid fa-chevron-right"></i></span>
            <span><?php echo wp_trim_words( get_the_title(), 6, '…' ); ?></span>
        </nav>

        <!-- Category -->
        <?php if ( $post_cats ) : ?>
            <a class="sp-cat-badge" href="<?php echo esc_url( get_category_link( $post_cats[0]->term_id ) ); ?>">
                <i class="fa-solid fa-tag"></i>
                <?php echo esc_html( $post_cats[0]->name ); ?>
            </a>
        <?php endif; ?>

        <!-- Title -->
        <h1><?php the_title(); ?></h1>

        <!-- Meta row -->
        <div class="sp-hero__meta">
            <div class="sp-meta-item">
                <div class="sp-meta-avatar"><i class="fa-solid fa-user"></i></div>
                <div>
                    <span class="sp-meta-label">Written by</span>
                    <strong><?php echo esc_html( $post_author ); ?></strong>
                </div>
            </div>
            <div class="sp-meta-divider"></div>
            <div class="sp-meta-item">
                <i class="fa-regular fa-calendar sp-meta-icon"></i>
                <div>
                    <span class="sp-meta-label">Published</span>
                    <strong><?php echo esc_html( $post_date ); ?></strong>
                </div>
            </div>
            <div class="sp-meta-divider"></div>
            <div class="sp-meta-item">
                <i class="fa-regular fa-clock sp-meta-icon"></i>
                <div>
                    <span class="sp-meta-label">Read Time</span>
                    <strong><?php echo esc_html( $read_time ); ?> min read</strong>
                </div>
            </div>
        </div>
    </div>

    <div class="sp-hero__wave">
        <svg viewBox="0 0 1440 70" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
            <path d="M0 35 C360 70 1080 0 1440 35 L1440 70 L0 70 Z" fill="#f5f6fb"/>
        </svg>
    </div>
</section>

<!-- ========================================
     CONTENT + SIDEBAR
======================================== -->
<div class="sp-body">
    <div class="container">
    <div class="row sp-body__grid">

        <!-- Main Article -->
        <article class="sp-article col-lg">

            <!-- Featured image (only if no thumbnail used as hero bg) -->
            <?php if ( $post_thumb ) : ?>
            <div class="sp-featured-img">
                <img src="<?php echo esc_url( $post_thumb ); ?>" alt="<?php echo esc_attr( get_the_title() ); ?>">
            </div>
            <?php endif; ?>

            <!-- Content -->
            <div class="sp-content">
                <?php the_content(); ?>
            </div>

            <!-- Tags -->
            <?php $tags = get_the_tags(); if ( $tags ) : ?>
            <div class="sp-tags">
                <span><i class="fa-solid fa-hashtag"></i> Tags:</span>
                <?php foreach ( $tags as $tag ) : ?>
                    <a href="<?php echo esc_url( get_tag_link( $tag->term_id ) ); ?>" class="sp-tag">
                        <?php echo esc_html( $tag->name ); ?>
                    </a>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>

            <!-- Share -->
            <div class="sp-share">
                <span><i class="fa-solid fa-share-nodes"></i> Share this article:</span>
                <div class="sp-share__links">
                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode( get_permalink() ); ?>"
                       target="_blank" rel="noopener" class="sp-share-btn sp-share-btn--fb" aria-label="Share on Facebook">
                        <i class="fa-brands fa-facebook-f"></i> Facebook
                    </a>
                    <a href="https://wa.me/?text=<?php echo urlencode( get_the_title() . ' ' . get_permalink() ); ?>"
                       target="_blank" rel="noopener" class="sp-share-btn sp-share-btn--wa" aria-label="Share on WhatsApp">
                        <i class="fa-brands fa-whatsapp"></i> WhatsApp
                    </a>
                    <a href="https://twitter.com/intent/tweet?url=<?php echo urlencode( get_permalink() ); ?>&text=<?php echo urlencode( get_the_title() ); ?>"
                       target="_blank" rel="noopener" class="sp-share-btn sp-share-btn--tw" aria-label="Share on Twitter">
                        <i class="fa-brands fa-x-twitter"></i> Twitter
                    </a>
                </div>
            </div>

            <!-- Post Navigation -->
            <nav class="sp-nav">
                <?php $prev = get_previous_post(); if ( $prev ) : ?>
                <a href="<?php echo esc_url( get_permalink( $prev ) ); ?>" class="sp-nav-btn sp-nav-btn--prev">
                    <i class="fa-solid fa-chevron-left"></i>
                    <div>
                        <span>Previous Article</span>
                        <strong><?php echo wp_trim_words( get_the_title( $prev ), 7, '…' ); ?></strong>
                    </div>
                </a>
                <?php endif; ?>
                <?php $next = get_next_post(); if ( $next ) : ?>
                <a href="<?php echo esc_url( get_permalink( $next ) ); ?>" class="sp-nav-btn sp-nav-btn--next">
                    <div>
                        <span>Next Article</span>
                        <strong><?php echo wp_trim_words( get_the_title( $next ), 7, '…' ); ?></strong>
                    </div>
                    <i class="fa-solid fa-chevron-right"></i>
                </a>
                <?php endif; ?>
            </nav>

            <!-- Author Box -->
            <div class="sp-author-box">
                <div class="sp-author-avatar">
                    <?php echo get_avatar( get_the_author_meta('ID'), 80, '', '', array( 'class' => 'sp-avatar-img' ) ); ?>
                </div>
                <div class="sp-author-info">
                    <span class="sp-author-role"><i class="fa-solid fa-pen-nib"></i> Article Author</span>
                    <h4><?php echo esc_html( $post_author ); ?></h4>
                    <?php $bio = get_the_author_meta('description'); ?>
                    <p><?php echo $bio ? esc_html( $bio ) : 'A dedicated educator and content writer at Beacon Academy, committed to sharing knowledge and helping students excel academically.'; ?></p>
                </div>
            </div>

            <!-- Comments -->
            <?php if ( comments_open() || get_comments_number() ) : ?>
            <div class="sp-comments-wrap">
                <?php comments_template(); ?>
            </div>
            <?php endif; ?>

        </article>

        <!-- Sidebar -->
        <aside class="sp-sidebar">

            <!-- Back to blogs -->
            <a href="<?php echo esc_url( home_url('/latest-blogs') ); ?>" class="sp-back-btn">
                <i class="fa-solid fa-arrow-left"></i> Back to All Blogs
            </a>

            <!-- Table of Contents placeholder -->
            <div class="sp-widget">
                <div class="sp-widget__head">
                    <i class="fa-solid fa-list-ul"></i> Quick Info
                </div>
                <ul class="sp-quick-info">
                    <li>
                        <i class="fa-regular fa-calendar"></i>
                        <div><strong>Published</strong><span><?php echo esc_html( $post_date ); ?></span></div>
                    </li>
                    <li>
                        <i class="fa-regular fa-clock"></i>
                        <div><strong>Read Time</strong><span><?php echo esc_html( $read_time ); ?> min</span></div>
                    </li>
                    <?php if ( $post_cats ) : ?>
                    <li>
                        <i class="fa-solid fa-folder-open"></i>
                        <div><strong>Category</strong><span><?php echo esc_html( $post_cats[0]->name ); ?></span></div>
                    </li>
                    <?php endif; ?>
                    <li>
                        <i class="fa-solid fa-user"></i>
                        <div><strong>Author</strong><span><?php echo esc_html( $post_author ); ?></span></div>
                    </li>
                </ul>
            </div>

            <!-- Recent Posts -->
            <?php
            $recent = new WP_Query( array(
                'post_type'      => 'post',
                'posts_per_page' => 4,
                'post__not_in'   => array( get_the_ID() ),
                'orderby'        => 'date',
                'order'          => 'DESC',
            ) );
            if ( $recent->have_posts() ) : ?>
            <div class="sp-widget">
                <div class="sp-widget__head">
                    <i class="fa-solid fa-fire"></i> Recent Articles
                </div>
                <ul class="sp-recent-list">
                    <?php while ( $recent->have_posts() ) : $recent->the_post();
                        $r_img  = get_the_post_thumbnail_url( null, 'thumbnail' );
                        $r_date = get_the_date( 'd M Y' );
                    ?>
                    <li>
                        <a href="<?php the_permalink(); ?>" class="sp-recent-item">
                            <div class="sp-recent-img">
                                <?php if ( $r_img ) : ?>
                                    <img src="<?php echo esc_url( $r_img ); ?>" alt="<?php the_title_attribute(); ?>" loading="lazy">
                                <?php else : ?>
                                    <div class="sp-recent-noimg"><i class="fa-solid fa-newspaper"></i></div>
                                <?php endif; ?>
                            </div>
                            <div>
                                <strong><?php the_title(); ?></strong>
                                <span><i class="fa-regular fa-calendar"></i> <?php echo esc_html( $r_date ); ?></span>
                            </div>
                        </a>
                    </li>
                    <?php endwhile; wp_reset_postdata(); ?>
                </ul>
            </div>
            <?php endif; ?>

            <!-- Categories -->
            <?php $all_cats = get_categories( array( 'hide_empty' => true ) );
            if ( $all_cats ) : ?>
            <div class="sp-widget">
                <div class="sp-widget__head">
                    <i class="fa-solid fa-folder-tree"></i> Categories
                </div>
                <ul class="sp-cat-list">
                    <?php foreach ( $all_cats as $c ) : ?>
                    <li>
                        <a href="<?php echo esc_url( get_category_link( $c->term_id ) ); ?>">
                            <i class="fa-solid fa-chevron-right"></i>
                            <?php echo esc_html( $c->name ); ?>
                        </a>
                        <span><?php echo esc_html( $c->count ); ?></span>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <?php endif; ?>

            <!-- CTA Widget -->
            <div class="sp-cta-widget">
                <i class="fa-solid fa-graduation-cap sp-cta-icon"></i>
                <h4>Admissions Open!</h4>
                <p>Join Beacon Academy today and build a bright academic future.</p>
                <a href="<?php echo esc_url( home_url('/#enroll') ); ?>" class="btn btn--accent" style="width:100%; justify-content:center;">
                    Apply Now <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>

        </aside>
    </div>
</div>

<!-- ========================================
     RELATED POSTS
======================================== -->
<?php if ( $related_query->have_posts() ) : ?>
<section class="sp-related">
    <div class="container">
        <div class="section-head">
            <span class="eyebrow"><i class="fa-solid fa-layer-group"></i> &nbsp;Keep Reading</span>
            <h2>Related Articles</h2>
        </div>
        <div class="sp-related__grid">
            <?php while ( $related_query->have_posts() ) : $related_query->the_post();
                $r_img   = get_the_post_thumbnail_url( null, 'medium_large' );
                $r_cats  = get_the_category();
                $r_date  = get_the_date( 'd M Y' );
                $r_exc   = wp_trim_words( get_the_excerpt(), 14, '…' );
                $r_rtime = max( 1, ceil( str_word_count( get_the_content() ) / 200 ) );
            ?>
            <article class="bl-card">
                <a href="<?php the_permalink(); ?>" class="bl-card__img-link" tabindex="-1">
                    <div class="bl-card__img">
                        <?php if ( $r_img ) : ?>
                            <img src="<?php echo esc_url( $r_img ); ?>" alt="<?php the_title_attribute(); ?>" loading="lazy">
                        <?php else : ?>
                            <div class="bl-card__noimg"><i class="fa-solid fa-newspaper"></i></div>
                        <?php endif; ?>
                    </div>
                    <?php if ( $r_cats ) : ?>
                        <span class="bl-card__cat"><?php echo esc_html( $r_cats[0]->name ); ?></span>
                    <?php endif; ?>
                </a>
                <div class="bl-card__body">
                    <div class="bl-card__meta">
                        <span><i class="fa-regular fa-calendar"></i> <?php echo esc_html( $r_date ); ?></span>
                        <span><i class="fa-regular fa-clock"></i> <?php echo esc_html( $r_rtime ); ?> min</span>
                    </div>
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <p><?php echo esc_html( $r_exc ); ?></p>
                    <div class="bl-card__footer">
                        <div class="bl-mini-author">
                            <div class="bl-mini-avatar"><i class="fa-solid fa-user"></i></div>
                            <span><?php the_author(); ?></span>
                        </div>
                        <a href="<?php the_permalink(); ?>" class="bl-read-more">
                            Read More <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </article>
            <?php endwhile; wp_reset_postdata(); ?>
        </div>
    </div>
</section>
<?php endif; wp_reset_postdata(); ?>

<?php endwhile; ?>

<?php get_footer(); ?>
