<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <link rel="shortcut icon" href="<?php echo esc_url( get_theme_file_uri('images/fabicon.io')); ?>">
    <link rel="apple-touch-icon" href="<?php echo esc_url( get_theme_file_uri('images/apple-touch-icon.png')); ?>">
    <link rel="icon" type="image/png" href="<?php echo esc_url( get_theme_file_uri( 'images/android-chrome-256x256.png')); ?>">
</head>
<body <?php body_class(); ?>>
<!-- ▼ ヘッダー : 開始-->
<header class="l-header">
    <div class="c-header-description"><?php bloginfo( 'description' ); ?></div>
    <a class="c-logo" href="<?php echo esc_url( home_url( '/' )); ?>">
        <div class="c-logo__image">
            <img src="<?php echo esc_url( get_theme_file_uri( 'images/logo.png' )); ?>" alt="<?php bloginfo( 'name'); ?>">
        </div>
        <!-- <div class="c-logo__text"></div> -->
    </a>
    <?php wp_nav_menu(
        array(
            'theme_location'  => 'globalnav',
            'container'       => 'div',
            'container_class' => 'c-global-nav',
        )
    ); ?>
</header>
<!-- ▲ ヘッダー : 終了-->