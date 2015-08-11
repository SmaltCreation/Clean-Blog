<div class="post-preview">
  <a href="<?php the_permalink(); ?>">
    <h2 class="post-title">
      <?php the_title(); ?>
    </h2>
	<?php if (has_excerpt()): ?>
	  <h3 class="post-subtitle">
	    <?php echo get_the_excerpt(); ?>
	  </h3>
	<?php endif; ?>
  </a>
  <p class="post-meta">
    <?php get_template_part('templates/entry-meta'); ?>
  </p>
</div>
<hr>
