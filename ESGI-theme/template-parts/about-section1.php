<div class="about-header">
        <div class="header-content">
            <div class="header-image">
                <?php if (get_theme_mod('about_header_image')) : ?>
                    <img src="<?php echo esc_url(get_theme_mod('about_header_image')); ?>" alt="Concert Image">
                <?php else : ?>
                    <img src="<?php echo get_template_directory_uri() . '/img/png/4.png'; ?>" alt="Concert Image">
                <?php endif; ?>
            </div>
            
            <div class="header-text">
                <h2><?php echo get_theme_mod('about_header_title', "Sky's the limit"); ?></h2>
                <p><?php echo get_theme_mod('about_header_text', 'Specializing in the creation of exceptional events for private and corporate clients, we design, plan and manage every project from conception to execution.'); ?></p>
            </div>
        </div>
    </div>