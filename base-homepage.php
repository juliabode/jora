<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>

  <!--[if lt IE 7]><div class="alert">Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</div><![endif]-->

  <?php
    do_action('get_header');
    get_template_part('templates/header');
  ?>

  <div class="wrap" role="document">
    <div class="bamboo"></div>
    <div class="homepage-top">
      <div class="shadow"></div>
      <div class="container">
        <div class="content row">
          <div class="main span9" role="main">
            <?php include roots_template_path(); ?>
          </div><!-- /.main -->
          <?php if (roots_display_sidebar()) : ?>
          <aside class="sidebar <?php echo roots_sidebar_class(); ?>" role="complementary">
            <?php include roots_sidebar_path(); ?>
          </aside><!-- /.sidebar -->
          <?php endif; ?>
        </div><!-- /.content -->
      </div>
    </div>

    <div class="homepage-bottom container">
        <div class="content row">
          <div class="span3 feature-tiles">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/coach.png" alt="" class="feature-image">
            <div class="feature-text">
              test test test
            </div>
          </div>
          <div class="span3 feature-tiles">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/consult.png" alt="" class="feature-image">
            <div class="feature-text">
              test test test
            </div>
          </div>
          <div class="span3 feature-tiles">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/train.png" alt="" class="feature-image">
            <div class="feature-text">
              test test test
            </div>
          </div>
        </div>

      <?php get_template_part('templates/footer'); ?>
    </div>
  </div><!-- /.wrap -->

</body>
</html>
