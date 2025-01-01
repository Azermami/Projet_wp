<div class="service-section">
    <div class="service-item">
        <?php if ($image1 = get_theme_mod('service_image_1')) : ?>
            <img src="<?php echo esc_url($image1); ?>" alt="Service Image 1">
        <?php else : ?>
            <img src="<?php echo get_template_directory_uri() . '/img/png/12.png'; ?>" alt="Service Image 1">
        <?php endif; ?>
    </div>
    <div class="service-item">
        <?php if ($image2 = get_theme_mod('service_image_2')) : ?>
            <img src="<?php echo esc_url($image2); ?>" alt="Service Image 2">
        <?php else : ?>
            <img src="<?php echo get_template_directory_uri() . '/img/png/11.png'; ?>" alt="Service Image 2">
        <?php endif; ?>
    </div>
    <div class="service-item service-title">
        <h2><?php echo esc_html(get_theme_mod('service_title', 'Private Parties')); ?></h2>
    </div>
    <div class="service-item">
        <?php if ($image4 = get_theme_mod('service_image_3')) : ?>
            <img src="<?php echo esc_url($image4); ?>" alt="Service Image 3">
        <?php else : ?>
            <img src="<?php echo get_template_directory_uri() . '/img/png/3.png'; ?>" alt="Service Image 3">
        <?php endif; ?>
    </div>
</div>


</div>