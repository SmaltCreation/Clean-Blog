<!-- Navigation -->
<nav class="navbar navbar-default navbar-custom navbar-fixed-top">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header page-scroll">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<nav class="collapse navbar-collapse" id="navbar" role="navigation">
			<form id="navbar-form" class="navbar-form navbar-right" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
				<div class="form-group">
					<div class="input-group">
						<input type="search" value="<?php echo get_search_query(); ?>" name="s" class="form-control" placeholder="<?php _e('Search', 'roots'); ?> <?php bloginfo('name'); ?>">
						<span class="input-group-addon">
							<i class="glyphicon glyphicon-search"></i>
						</span>
					</div>
				</div>
			</form>
			<?php if (has_nav_menu('primary_navigation')):
				wp_nav_menu(array('theme_location' => 'primary_navigation', 'walker' => new Roots_Nav_Walker(), 'menu_class' => 'nav navbar-nav navbar-right'));
			endif; ?>
		</nav>
		<!-- /.navbar-collapse -->
	</div>
	<!-- /.container -->
</nav>
