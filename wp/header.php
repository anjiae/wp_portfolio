<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <title>AriAngie</title>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="" />
  <meta name="author" content="Angie_An" />
  <meta name="Author-Date" content="2021" />
  <meta name="Keywords" content="" />
  <meta name="Robots" content="index,follow" />

  <!-- Favicon -->
  <!-- <link rel="icon" type="image/png" href="images/favicon.png" /> -->

  <!-- fontawesome -->
  <script src="https://kit.fontawesome.com/3d9979192f.js" crossorigin="anonymous"></script>
  <!-- js -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <!-- Skip -->
  <a href="#main" class="skip_to_content">Go to main contents</a>
  <div id="wrap">
    <!-- HEADER -->
    <header id="header">
      <div class="containerBox">
        <div class="header__visible">
          <div class="logo">
            <a href="https://portfolio.angielife.com/">
              <img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="ariangie logo image">
            </a>
          </div>
          <div class="toggleBtn">
            <span></span>
            <span></span>
          </div>
        </div>
        <nav class="header__nav">
          <?php wp_nav_menu(array(
            'theme_location' => 'main-menu',
            'container' => false
          ));
          ?>

        </nav>
      </div>
    </header>

    <!-- MAIN -->
    <main id="main">
