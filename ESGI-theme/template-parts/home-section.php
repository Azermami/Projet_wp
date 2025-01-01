<div class="home-title">
    <h1><?php echo esc_html(get_theme_mod('home_main_title', 'A really professional structure')); ?>
    <br>
    <?php echo esc_html(get_theme_mod('home_main_title2', 'for all your events!')); ?></h1>
</div>
<div class="home-section">
    <div class="left"></div>
    <div class="right">
        <div>
        <?php if (get_theme_mod('home_hero_image')) : ?>
            <img src="<?php echo esc_url(get_theme_mod('home_hero_image')); ?>" alt="Home hero Image">
        <?php else : ?>
            <img src="<?php echo get_template_directory_uri() . '/img/png/1.png'; ?>" alt="Home hero Image">
        <?php endif; ?>
        </div>
        <div class="home-about-section">
            <h2><?php echo get_theme_mod('home_hero_title', 'About Us'); ?></h2>
            <p><?php echo get_theme_mod('home_hero_paragraph', 'Specializing in the creation of exceptional events for private and corporate clients, we design, plan and manage every project from conception to execution.'); ?></p>
    </div>
    </div>
</div>
