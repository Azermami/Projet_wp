<div class="partners-logos">
    <?php for ($i = 1; $i <= 6; $i++) :
        $logo_url = get_theme_mod("partner_logo_$i");
        $partner_url = get_theme_mod("partner_url_$i");
        $logo_url_default = get_template_directory_uri() . "/img/svg/partner-$i.svg";

        if ($logo_url) : ?>
            <img src="<?php echo esc_url($logo_url); ?>" alt="Partner Logo <?php echo $i; ?>">
        <?php else : ?>
            <img src="<?php echo esc_url($logo_url_default); ?>" alt="Partner Logo <?php echo $i; ?>">
        <?php endif;
    endfor; ?>
</div>
