<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>

  <?php
    do_action('get_header');
    get_template_part('templates/navbar');
    get_template_part('templates/header');
  ?>

  <div class="container" role="document">
    <div class="row">
      <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
        <?php include roots_template_path(); ?>
        <?php if (roots_display_sidebar()) : ?>
          <aside class="sidebar" role="complementary">
            <?php include roots_sidebar_path(); ?>
          </aside><!-- /.sidebar -->
        <?php endif; ?>
      </div>
    </div><!-- /.content -->
  </div><!-- /.container -->

  <?php get_template_part('templates/footer'); ?>

  <?php wp_footer(); ?>

</body>
</html>
