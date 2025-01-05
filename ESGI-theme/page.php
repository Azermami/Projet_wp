<?php get_header() ?>

<main id="site-main">
    <div class="container">
        <?php get_template_part('template-parts/home-section') ?>   
        <?php get_template_part('template-parts/about-section') ?>   
        

    </div>
    <div class="container">
    <h2><?php echo esc_html(get_theme_mod('service_main_title', 'Our Services.')); ?></h2>
    
    </div>
    <?php get_template_part('template-parts/service-section') ?>
        <div class="container">
            <h2><?php echo esc_html(get_theme_mod('partner_main_title', 'Our Partners.')); ?></h2>
            <div class="partners-page">

                    <?php get_template_part('template-parts/partners-section') ?>

            </div>
        </div>
        
</main>

<?php get_footer() ?>