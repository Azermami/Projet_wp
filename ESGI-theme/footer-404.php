</div>
<footer class="site-footer">
    <div class="footer-content">
        <div class="footer-logo">
            
        </div>
        <div class="footer-contact">
            <div class="contact-info">
                <p><?php echo esc_html(get_theme_mod('manager_name', 'Manager')); ?></p>
                <p><?php echo esc_html(get_theme_mod('manager_phone', '+33 1 23 45 67 89')); ?></p>
                <p><a href="mailto:<?php echo esc_attr(get_theme_mod('manager_email', 'info@esgi.com')); ?>"><?php echo esc_html(get_theme_mod('manager_email', 'info@esgi.com')); ?></a></p>
            </div>
            <div class="contact-info">
                <p><?php echo esc_html(get_theme_mod('ceo_name', 'CEO')); ?></p>
                <p><?php echo esc_html(get_theme_mod('ceo_phone', '+33 1 23 45 67 89')); ?></p>
                <p><a href="mailto:<?php echo esc_attr(get_theme_mod('ceo_email', 'ceo@company.com')); ?>"><?php echo esc_html(get_theme_mod('ceo_email', 'ceo@company.com')); ?></a></p>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; <?php echo date('Y'); ?> <?php echo esc_html(get_theme_mod('footer_text', 'ESGI. All rights reserved.')); ?></p>
        <div class="social-links">
            <?php 
            $social_networks = array('LinkedIn', 'Facebook', 'Twitter', 'Instagram');
            foreach ($social_networks as $network) {
                $setting_id = strtolower($network) . '_url';
                $enable_setting_id = 'enable_' . strtolower($network);
                $url = get_theme_mod($setting_id, '');
                $enabled = get_theme_mod($enable_setting_id, false);
                
                if ($enabled && $url) {
                    echo '<a href="' . esc_url($url) . '" target="_blank" rel="noopener noreferrer">' . esgi_get_icon(strtolower($network)) . '</a>';
                }
            }
            ?>
        </div>
    </div>
<?php wp_footer(); ?>
</body>
</html>
