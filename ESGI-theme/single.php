<?php
get_header(); ?>

<div id="primary" class="content-area blog-single-post">
    <main id="main" class="site-main">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <header class="entry-header">
                <h1 class="entry-title"><?php the_title(); ?></h1>
            </header>

            <div class="content-wrapper">
                <?php get_template_part('template-parts/sidebar'); ?>

                <div class="single-post-content">
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="post-thumbnail">
                            <?php the_post_thumbnail('large');  ?>
                        </div>
                    <?php else : ?>
                        <p>Aucune image à la une définie.</p>
                    <?php endif; ?>

                    <div class="post-meta">
                        <div>
                            <span class="post-category"><?php the_category(', '); ?></span>
                            <span>-</span>
                            <span class="post-date"><?php echo get_the_date(); ?></span>
                        </div>
                    </div>

                    <div class="post-content">
                        <?php the_content(); ?>
                    </div>

                    <div class="post-tags">
                        <?php the_tags('<span class="tag-links">', '', '</span>'); ?>
                    </div>

                    <div class="post-comments">
                        <?php if (comments_open() || get_comments_number()) : ?>
                            <?php comments_template(); ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

        <?php endwhile; endif; ?>

    </main><!-- .site-main -->
</div><!-- .content-area -->

<?php get_footer(); ?>
