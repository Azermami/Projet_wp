<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
</head>
<?php if (is_404()) : ?>
    <body <?php body_class(); ?>>
        <?php wp_body_open(); ?>
        <header id="site-header-dark">
            <div class="container-unfold">
            <?php
                    $logo_bw_url = get_theme_mod('logo_bw');
                    $logo_bw_default = get_template_directory_uri() . '/img/logo-white.svg';
                    if ($logo_bw_url) : ?>
                        <img src="<?php echo esc_url($logo_bw_url); ?>" alt="<?php bloginfo('name'); ?> - Logo Noir et Blanc">
                    <?php else : ?>
                        <img src="<?php echo esc_url($logo_bw_default); ?>" alt="<?php bloginfo('name'); ?> - Logo Noir et Blanc">
                    <?php endif; ?>
                <a href="" class="custom-menu-link"><img src="<?php echo get_template_directory_uri(); ?>/img/menu-white.svg" alt="Menu" id="menu"></a>
            </div>
            <div class="fold">
                <div class="fold-logo">
                    <?php
                    $logo_bw_url = get_theme_mod('logo_bw');
                    $logo_bw_default = get_template_directory_uri() . '/img/logo-white.svg';
                    if ($logo_bw_url) : ?>
                        <img src="<?php echo esc_url($logo_bw_url); ?>" alt="<?php bloginfo('name'); ?> - Logo Noir et Blanc">
                    <?php else : ?>
                        <img src="<?php echo esc_url($logo_bw_default); ?>" alt="<?php bloginfo('name'); ?> - Logo Noir et Blanc">
                    <?php endif; ?>

                    <a href="" class="custom-menu-link"><img src="<?php echo get_template_directory_uri(); ?>/img/close.svg" alt="Close" id="close"></a>
                </div>
                <nav id="site-nav">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary_menu',
                        'container' => false,
                        'menu_class' => 'menu',
                    ));
                    ?>
                </nav>
            </div>
        </header>
        <div id="content">
    <?php else : ?>

    <body <?php body_class(); ?>>
        <?php wp_body_open(); ?>
        <header id="site-header">
            <div class="container-unfold">
                <?php 
                if ( function_exists( 'the_custom_logo' ) ) {
                    the_custom_logo();
                }else{
                    $logo_default = get_template_directory_uri() . '/img/logo.svg';
                    echo '<a href="' . esc_url( home_url( '/' ) ) . '" class="custom-logo-link" rel="home"><img src="' . esc_url($logo_default) . '" alt="' . get_bloginfo( 'name' ) . '"></a>';
                }
                ?>
                <a href="" class="custom-menu-link"><img src="<?php echo get_template_directory_uri(); ?>/img/menu.svg" alt="Menu" id="menu"></a>
            </div>
            <div class="fold">
                <div class="fold-logo">
                    <?php
                    $logo_bw_url = get_theme_mod('logo_bw');
                    $logo_bw_default = get_template_directory_uri() . '/img/logo-white.svg';
                    if ($logo_bw_url) : ?>
                        <img src="<?php echo esc_url($logo_bw_url); ?>" alt="<?php bloginfo('name'); ?> - Logo Noir et Blanc">
                    <?php else : ?>
                        <img src="<?php echo esc_url($logo_bw_default); ?>" alt="<?php bloginfo('name'); ?> - Logo Noir et Blanc">
                    <?php endif; ?>

                    <a href="" class="custom-menu-link"><img src="<?php echo get_template_directory_uri(); ?>/img/close.svg" alt="Close" id="close"></a>
                </div>
                <nav id="site-nav">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary_menu',
                        'container' => false,
                        'menu_class' => 'menu',
                    ));
                    ?>
                </nav>
            </div>
        </header>
        <div id="content">
    <?php endif; ?>