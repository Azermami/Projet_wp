<?php
/*
Template Name: Partners
*/
get_header(); ?>

<div class="container">
    <!-- Texte personnalisable : 'Our Partners.' par défaut -->
    <h1><?php echo esc_html(get_theme_mod('partner_text', 'Our Partners.')); ?></h1>

    <div class="partners-page">
        <section class="partners-hero">
            <!-- On inclut le fichier qui affiche la liste des partenaires -->
            <?php get_template_part('template-parts/partners-section'); ?>
        </section>
    </div>
</div>

<?php get_footer(); ?>
