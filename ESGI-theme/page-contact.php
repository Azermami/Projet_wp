<?php
/*
Template Name: Contact
*/
get_header(); ?>
<div class="container">
<h1><?php echo esc_html(get_theme_mod('contact_text', 'Contact.')); ?></h1>
<?php get_template_part('template-parts/contact-head'); ?>

    <section class="contact-form-section">
        <?php get_template_part('template-parts/contact-form'); ?>
    </section>
</div>

<?php get_footer(); ?>
