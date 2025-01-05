<?php
/*
Template Name: Services
*/
get_header(); ?>
<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <div class="container"> <h1><?php echo esc_html(get_theme_mod('services_text', 'Our Services.')); ?></h1></div>
   

        <?php get_template_part('template-parts/service-section'); ?>
        <div id="services-details">
            <div class="container">
                <div class="row small-padding">
                    <h2>Corp. Parties</h2>
                    <p class="second-p">Specializing in the creation of exceptional events for private and corporate clients, we design, plan and manage every project from conception to execution. </p>
                </div>
            </div>
           
        </div>

        <div class="service-img">
            <?php 
            $img_service = get_theme_mod('service_image_text');
            $default_img_service = get_template_directory_uri() . '/img/png/9.png';

            if ($img_service) {
            $image_to_display = $img_service;
            } else if ($default_img_service) {
                // Utiliser le image par défaut si aucun image personnalisé n'est défini
                $image_to_display = $default_img_service;
            }

        if ($image_to_display) : ?>
            <img src="<?php echo esc_url($image_to_display); ?>" alt="<?php bloginfo('name'); ?> - image Noir et Blanc">
        <?php endif; ?>
    </main>
<?php get_footer(); ?>

<style> 
.small-padding {
        padding: 2rem 4rem;
        align-items: center;
    }
    #second-section #div-description div:not(:first-child) h3 {
        margin-top: 2rem;
    }

    .second-p {
        font-size: 18px;
        line-height: 2rem;
        margin-top: 0.5rem;
    }
    #second-section > .container-fluid {
        padding: 0;
    }

    #second-section > .container-fluid:nth-child(2) .row {
        max-width: 100%;
    }
    </style>