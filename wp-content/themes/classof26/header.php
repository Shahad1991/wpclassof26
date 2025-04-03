<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header class="site-header">
        <div class="header-container">
            <!-- Logo eller site title -->
            <div class="site-branding">
                <?php if (has_custom_logo()) : ?>
                    <?php the_custom_logo(); ?>
                <?php else : ?>
                    <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                        <h1><?php bloginfo('name'); ?></h1>
                    </a>
                <?php endif; ?>
            </div>

            <!-- Hovedmenu -->
            <nav class="main-navigation">
                <?php wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'menu_class' => 'primary-menu',
                    'container' => false,
                    'fallback_cb' => false
                )); ?>
            </nav>

            <!-- Mobil menu toggle -->
            <button class="mobile-menu-toggle" aria-controls="mobile-menu" aria-expanded="false">
                <span class="screen-reader-text"><?php esc_html_e('Menu', 'mit_theme'); ?></span>
                <span class="hamburger"></span>
            </button>
        </div>

        <!-- Mobil menu (skjult som standard) -->
        <nav class="mobile-navigation" id="mobile-menu">
            <?php wp_nav_menu(array(
                'theme_location' => 'mobile',
                'menu_class' => 'mobile-menu',
                'container' => false,
                'fallback_cb' => false
            )); ?>
        </nav>
    </header>