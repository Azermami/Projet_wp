<?php
/* Template Name: Blog Page */
get_header(); ?>

<div id="primary" class="content-area content-blog">
    <main id="main" class="site-main">

        <header class="page-header">
            <h1 class="entry-title"><?php echo esc_html(get_theme_mod('blog_text', 'Blog.')); ?></h1>
        </header>

        <div class="content-wrapper">
        <?php get_template_part('template-parts/sidebar'); ?>

            <div class="blog-posts">
                <?php if (have_posts()) : ?>
                    <div class="posts-grid">
                        <?php
                        while (have_posts()) :
                            the_post(); ?>
                            <div class="post-item">
                                <a href="<?php the_permalink(); ?>">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <div class="post-thumbnail">
                                <?php the_post_thumbnail('medium'); ?>
                                <span class="post-category"><?php the_category(', '); ?></span>
                            </div>
                                    <?php endif; ?>
                                    <h2 class="post-title"><?php the_title(); ?></h2>
                                    <div class="post-excerpt"><?php the_excerpt(); ?></div>
                                </a>
                            </div>
                        <?php endwhile; ?>
                    </div>

                    <div class="pagination">
                        <?php
                        echo paginate_links(array(
                            'prev_text' => __('« Previous'),
                            'next_text' => __('Next »'),
                        ));
                        ?>
                    </div>

                <?php else : ?>
                    <p><?php _e('No posts found.'); ?></p>
                <?php endif; ?>
            </div>
        </div>

    </main><!-- .site-main -->
</div><!-- .content-area -->

<?php get_footer(); ?>
