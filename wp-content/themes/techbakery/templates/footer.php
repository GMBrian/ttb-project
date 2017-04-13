<footer class="content-info">
	<div class="container">
		<div class="row">
			<div class="col-lg-2 col-md-12">
				<div class="footer-box">
					<span class="footer-box-content"><a href="mailto:<?= get_field( 'e-mailadres', 'options' ); ?>"><?= get_field( 'e-mailadres', 'options' ); ?></a></span>
				</div>
			</div>
			<div class="col-lg-2 col-md-12">
				<div class="footer-box">
					<span class="footer-box-content">T <?= get_field( 'telefoonnummer', 'options' ); ?></span>
				</div>
			</div>
			<div class="col-lg-8 col-md-12">
				<span class="copyright">techbakery®</span>
				<nav class="nav-footer">
					<?php
					if ( has_nav_menu( 'footer_navigation' ) ) :
						wp_nav_menu( [ 'theme_location' => 'footer_navigation', 'menu_class' => 'nav' ] );
					endif;
					?>
				</nav>
			</div>
		</div>
	</div>
</footer>
