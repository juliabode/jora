<header class="banner" role="banner">
  <div class="container">
    <div class="header-inner">
      <div class="logo alignleft">
        <a class="brand" href="<?php echo home_url(); ?>/">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/pixel.png" alt="<?php bloginfo('name'); ?>">
        </a>
      </div>
      <nav class="nav-main alignright" role="navigation">
        <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav nav-pills'));
          endif;
        ?>
      </nav>
    </div>
  </div>
</header>
