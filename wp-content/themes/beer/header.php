<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <?php wp_head(); ?>
</head>

<body <?php body_class('site'); ?>>
  <header class="site_header">
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container-fluid navColor">
        <a class="navbar-brand" href="#"></a>
        <a href="<?php echo home_url('/'); ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo" class="beer">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="nav navbar-nav mb-lg-0">
            <?php
            $itemsArray = wp_get_nav_menu_items(
              'menuPersoHead'
            );
            foreach ($itemsArray as $item) {
              echo '<li class="nav-item">
              <a class="nav-link" href="' . $item->url . '">' . $item->title . '</a>
            </li>';
            }
            ?>
          </ul>
          <?php get_search_form(); ?>
        </div>
      </div>
    </nav>
  </header>