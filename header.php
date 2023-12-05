<!DOCTYPE html>
<html lang="en">
<head>
    <?php wp_head(); ?>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title> <?php bloginfo('name'); ?> <?php wp_title(); ?> <?php if (is_front_page()) { echo "|| "; bloginfo('description'); } ?></title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory')?>/css/mdb.min.css" />
    <!-- Custom styles -->

    <!-- Custom fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Assistant:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fugaz+One&family=Kenia&display=swap" rel="stylesheet">
    <!-- for add plugins element -->
</head>
<body>
      <!--Main Navigation-->
    <header>
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg" style="z-index: 2000;">
        <!-- Container wrapper -->
        <div class="container-fluid">
          <!-- Toggle button -->
          <button
            class="navbar-toggler"
            type="button"
            data-mdb-toggle="collapse"
            data-mdb-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <i class="fas fa-bars"></i>
          </button>

          <!-- Collapsible wrapper -->
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Navbar brand -->
            <?php $websoite_logo = get_header_image(); ?>
            <a class="navbar-brand mt-2 mt-lg-0" href="<?php site_url(); ?>">
              <img
                src="<?php echo $websoite_logo; ?>"
                height="25"
                alt="My Website Logo"
                loading="lazy"
              />
            </a>
            <!-- Left links -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <?php wp_nav_menu( array( 'theme_location' => 'main_menu', 'menu_class' => 'navbar-nav')) ?>
            </ul>
            <!-- Left links -->
          </div>
          <!-- Collapsible wrapper -->

          <!-- Right elements -->
          <div class="d-flex align-items-center">
            <!-- Icon -->
            <a class="text-reset me-3" href="#">
              <i class="fab fa-facebook-square text-light fa-2x"></i>
            </a>
            <a class="text-reset me-3" href="#">
               <i class="fab fa-twitter-square text-light fa-2x"></i>
            <a class="text-reset me-3" href="#">
               <i class="fab fa-github-square text-light fa-2x"></i>
            </a>
            <a class="text-reset me-3" href="#">
               <i class="fab fa-youtube-square text-light fa-2x"></i>
            </a>
          </div>
          <!-- Right elements -->
        </div>
        <!-- Container wrapper -->
      </nav>

      <!-- Navbar -->
    </header>