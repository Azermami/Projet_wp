<?php
/*
Template Name: About-us
*/
get_header(); ?>

<div id="content" class="container">
<h1><?php echo esc_html(get_theme_mod('about_text', 'About us.')); ?></h1>
<?php get_template_part('template-parts/about-section1'); ?>
<?php get_template_part('template-parts/about-section'); ?>

<?php get_template_part('template-parts/team-section'); ?>

</div>

<?php get_footer(); ?>

