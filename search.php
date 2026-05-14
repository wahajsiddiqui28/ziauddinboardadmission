<?php get_header(); ?>

<main id="primary" class="site-main">
    <header class="page-header">
        <h1 class="page-title">
            <?php printf( esc_html__( 'Search Results for: %s', 'ziauddinboardadmission' ), '<span>' . get_search_query() . '</span>' ); ?>
        </h1>
    </header>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <?php the_title( '<h2><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' ); ?>
            <?php the_excerpt(); ?>
        </article>
    <?php endwhile; the_posts_pagination(); else : ?>
        <p><?php esc_html_e( 'No results found.', 'ziauddinboardadmission' ); ?></p>
        <?php get_search_form(); ?>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
