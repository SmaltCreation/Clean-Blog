<hr class="footer-hr">

<!-- Footer -->
<footer id="footer">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
				<div class="widgets-container">
					<?php dynamic_sidebar('sidebar-footer'); ?>
				</div>
				<p class="copyright text-muted">
					<span>Copyright &copy; <?php bloginfo( 'name' ); ?> <?php echo date('Y'); ?></span>
					<span> - </span>
					<span> Theme: <?php echo wp_get_theme(); ?> by <a href="http://www.smaltcreation.com">Smalt Création</a></span>
				</p>
			</div>
		</div>
	</div>
</footer>
