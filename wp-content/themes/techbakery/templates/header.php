<header class="banner">
	<div class="container">
		<div class="row">
			<div class="col-sm-10 col-lg-push-1">
				<a class="brand" href="<?= esc_url( home_url( '/' ) ); ?>"><img class="brand-image"
				                                                                src="<?= get_stylesheet_directory_uri() . '/dist/images/logo-techbakery.png'; ?>"></a>
				<nav class="nav-primary">
					<?php
					if ( has_nav_menu( 'primary_navigation' ) ) :
						wp_nav_menu( [ 'theme_location' => 'primary_navigation', 'menu_class' => 'nav' ] );
					endif;
					?>
				</nav>
			</div>
		</div>
	</div>
</header>
