<?php get_header(); ?>

<div class="search-results-container">
    <div class="content-area">
        <main class="site-main">
            <header class="page-header">
                <h1 class="page-title">
                    <?php printf( esc_html__( 'Search results for: %s', 'textdomain' ), '<span>' . get_search_query() . '</span>' ); ?>
                </h1>
            </header>

            <?php if ( have_posts() ) : ?>
                <div class="search-results">
                    <?php while ( have_posts() ) : the_post(); ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <header class="entry-header">
                                <h2 class="entry-title">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h2>
                                <div class="entry-meta">
                                    <span class="posted-on"><?php the_time( get_option( 'date_format' ) ); ?></span>
                                    <span class="category"><?php the_category( ', ' ); ?></span>
                                </div>
                            </header>
                            <div class="entry-summary">
                                <?php the_excerpt(); ?>
                            </div>
                        </article>
                    <?php endwhile; ?>
                </div>

            <?php else : ?>
                <p><?php esc_html_e( 'No results found.', 'textdomain' ); ?></p>
            <?php endif; ?>
        </main>
    </div>
</div>

<?php get_footer(); ?>
