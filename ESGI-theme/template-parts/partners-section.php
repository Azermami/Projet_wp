<div class="partners-logos">
    <?php for ($i = 1; $i <= 6; $i++):
        // Récupère l'URL du logo depuis le Customizer
        $logo_url = get_theme_mod("partner_logo_$i");

        // Récupère l'URL du site du partenaire (si cliquable)
        $partner_url = get_theme_mod("partner_url_$i");

        // Fallback local (optionnel) : si vous avez /img/svg/partner-1.svg, 2.svg, etc.
        $logo_url_default = get_template_directory_uri() . "/img/svg/partner-$i.svg";

        // Détermine quelle image afficher
        $image_to_show = $logo_url ? $logo_url : $logo_url_default;

        // Si vraiment aucune image n'est dispo (ni custom, ni fallback), on skip
        if (!$image_to_show) {
            continue;
        }

        // Si on a un lien, on enveloppe l'image dans un <a>
        if ($partner_url) {
            echo '<a href="' . esc_url($partner_url) . '" target="_blank" rel="noopener">';
        }

        echo '<img src="' . esc_url($image_to_show) . '" alt="Partner Logo ' . esc_attr($i) . '">';

        if ($partner_url) {
            echo '</a>';
        }
    endfor; ?>
</div>
