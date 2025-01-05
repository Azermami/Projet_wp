<?php
/*
Template Name: Partners
*/
get_header(); ?>
<div class="container">
<h1><?php echo esc_html(get_theme_mod('partner_text', 'Our Partners.')); ?></h1>
<div class="partners-page">
    <section class="partners-hero">
        <?php get_template_part('template-parts/partners-section'); ?>
    </section>
</div>


<?php get_footer(); ?>