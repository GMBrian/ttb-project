<div class="section section-schrijfbanner container"
     style="background-image: url(<?= get_field( 'achtergrond' ); ?>)">
	<div class="row inschrijf-image">
		<div class="col-lg-4 col-lg-push-1 col-md-12">
			<img src="<?= get_stylesheet_directory_uri() . '/dist/images/ontbijtsessie.png'; ?>">
		</div>
	</div>
	<div class="row inschrijf-container">
		<div class="col-lg-5 col-md-12 col-lg-push-6">
			<h2 class="inschrijf-titel wow animate slideInRight"><?= get_field( 'inschrijftitel' ); ?></h2>
			<div
				class="inschrijf-inner-container">
				<h4><?= __( 'Schrijf je nu in en reserveer je plek:', 'techbakery' ); ?></h4>
				<?= do_shortcode( get_field( 'contactform_7_shortcode' ) ); ?></div>
		</div>
	</div>
</div>

<div class="section section-inschrijving-text section-text container"
     style="background-image:url(<?= get_stylesheet_directory_uri() . '/dist/images/circle-visual.png'; ?>)">

	<div class="row entry-content">
		<div class="col-lg-10 col-lg-push-1 inschrijving-text-section">
			<?= get_field( 'inhoud' ); ?>
		</div>
	</div>

	<div class="row footer-logos">
		<div class="col-md-3 col-md-push-1 col-sm-12">
			<a href="<?= home_url(); ?>">
				<img src="<?= get_stylesheet_directory_uri() . '/dist/images/logo-subtekst.png'; ?>">
			</a>
		</div>

		<div class="col-md-3 col-md-push-4 col-sm-12">
			<a href="<?= home_url(); ?>">
				<img src="<?= get_stylesheet_directory_uri() . '/dist/images/logo-2.png'; ?>">
			</a>
		</div>
	</div>
</div>

