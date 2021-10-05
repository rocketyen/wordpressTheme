<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <?php wp_head(); ?>
</head>

<body <?php body_class('site'); ?>>
  <header class="site_header">
    <a href="<?php echo home_url('/'); ?>">
      <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo">
    </a>
    <?php
    wp_nav_menu(
      array(
        'theme_location' => 'main',
        'container' => 'ul', // afin d'éviter d'avoir une div autour 
        'menu_class' => 'site__header__menu', // ma classe personnalisée 
      )
    );
    ?>
  </header>