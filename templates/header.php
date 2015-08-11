<!-- Page Header -->
<header class="intro-header" style="background-image: url('<?php echo cleanblog_image_url($post); ?>')">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
        <?php if (is_single()): ?>
          <div class="post-heading">
            <h1><?php echo the_title(); ?></h1>
            <h2 class="subheading"><?php echo get_the_excerpt(); ?></h2>
            <span class="meta">
              <?php get_template_part('templates/entry-meta'); ?>
            </span>
          </div>
        <?php else: ?>
          <div class="site-heading">
            <h1><?php echo roots_title(); ?></h1>
            <hr class="small">
            <span class="subheading"><?php echo cleanblog_subheading(); ?></span>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</header>
