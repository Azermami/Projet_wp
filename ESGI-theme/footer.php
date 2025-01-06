<footer class="site-footer">
    <div class="footer-content">
        <div class="footer-logo">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/img/logo-white.svg'); ?>" alt="<?php bloginfo('name'); ?> - Logo Noir et Blanc">
        </div>
        <div class="footer-contact">
            <div class="contact-info">
                <p>Manager</p>
                <p>+33 1 53 31 25 23</p>
                <p>info@esgi.com</p>
            </div>
            <div class="contact-info">
                <p>CEO</p>
                <p>+33 1 53 31 25 25</p>
                <p>ceo@company.com</p>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <p>2022 | Eligma Template by ESGI</p>
        <div class="social-links">
            <a href="#" target="_blank" rel="noopener noreferrer">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/img/svg/linkedin.svg'); ?>" alt="LinkedIn" class="social-icon">
            </a>
            <a href="#" target="_blank" rel="noopener noreferrer">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/img/svg/facebook.svg'); ?>" alt="Facebook" class="social-icon">
            </a>
        </div>
    </div>
    <?php wp_footer(); ?>
</footer>