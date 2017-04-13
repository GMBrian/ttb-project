<?php
// check if the flexible content field has rows of data
if ( have_rows( 'secties' ) ):

	$section_counter = 0;

	// loop through the rows of data
	while ( have_rows( 'secties' ) ) : the_row();

		if ( get_row_layout() == 'tekst' ): ?>

			<div <?= get_sub_field( 'sectie_id' ) ? ' id="' . get_sub_field( 'sectie_id' ) . '" ' : ''; ?>
				class="section section-<?= get_row_layout(); ?> container <?= get_sub_field( 'sectie_id' ) ? get_sub_field( 'sectie_id' ) : ''; ?>"
				<?= get_sub_field( 'achtergrondkleur' ) ? ' style="background-color:' . get_sub_field( 'achtergrondkleur' ) . '" ' : ''; ?>>

				<!--				<div class="container">-->

				<?php if ( get_sub_field( 'sectie_titel' ) ): ?>
					<div class="row">
						<div class="col-lg-3 col-md-6 col-sm-12">
							<h2 class="sectie-titel wow animate slideInLeft"><?= get_sub_field( 'sectie_titel' ); ?></h2>
						</div>
						<div class="col-lg-8 col-md-6 col-sm-0"></div>
					</div>
				<?php endif; ?>

				<div class="row entry-content">

					<div
						class="<?php echo get_sub_field( 'meer_weten_kolom' ) ? 'col-lg-7 col-lg-push-1 col-md-12' : 'col-lg-10 col-lg-push-1 col-md-12' ?>">
						<?= get_sub_field( 'tekst' ); ?>
					</div>
					<?php if ( get_sub_field( 'meer_weten_kolom' ) ) : ?>
						<div class="col-lg-2 col-lg-push-2 col-md-12 cta-section">
							<p>
								Meer weten?<br>Bel ons <?= get_field( 'telefoonnummer', 'options' ); ?><br>of mail <a
									href="mailto:<?= get_field( 'e-mailadres', 'options' ); ?>"><?= get_field( 'e-mailadres', 'options' ); ?></a>
							</p>
						</div>
					<?php endif; ?>

				</div>

				<!--				</div>-->
			</div>

		<?php elseif ( get_row_layout() == 'tekst_tekst' ) : ?>

			<div <?= get_sub_field( 'sectie_id' ) ? ' id="' . get_sub_field( 'sectie_id' ) . '" ' : ''; ?>
				class="section section-<?= get_row_layout(); ?> container <?= get_sub_field( 'sectie_id' ) ? get_sub_field( 'sectie_id' ) : ''; ?>"
				<?= get_sub_field( 'achtergrondkleur' ) ? ' style="background-color:' . get_sub_field( 'achtergrondkleur' ) . '" ' : ''; ?>>

				<!--				<div class="container">-->

				<?php if ( get_sub_field( 'sectie_titel' ) ): ?>
					<div class="row">
						<div class="col-lg-3 col-md-6 col-sm-12">
							<h2 class="sectie-titel wow animate slideInLeft"><?= get_sub_field( 'sectie_titel' ); ?></h2>
						</div>
						<div class="col-lg-8 col-md-6 col-sm-0"></div>
					</div>
				<?php endif; ?>

				<div class="row entry-content">

					<div class="col-lg-6 col-md-6 col-sm-12">
						<?= get_sub_field( 'tekst_kolom_1' ); ?>
					</div>

					<div class="col-lg-6 col-md-6 col-sm-12">
						<?= get_sub_field( 'tekst_kolom_2' ); ?>
					</div>

				</div>
				<!--				</div>-->
			</div>

		<?php elseif ( get_row_layout() == 'banner' ) : ?>

			<div <?= get_sub_field( 'sectie_id' ) ? ' id="' . get_sub_field( 'sectie_id' ) . '" ' : ''; ?>
				class="section section-<?= get_row_layout(); ?> container <?= get_sub_field( 'sectie_id' ) ? get_sub_field( 'sectie_id' ) : ''; ?>"
				style="background-image: url(<?= get_sub_field( 'achtergrond' ); ?>)">
				<!--				<div class="container">-->
				<div class="row entry-content">
					<div class="col-lg-5 col-md-12 col-lg-push-1">
						<h2><?= get_sub_field( 'banner_heading' ); ?></h2>
					</div>
				</div>
				<div class="row banner-bubble-container">
					<div class="col-lg-5 col-md-12 col-lg-push-1">

						<?php if ( get_sub_field( 'spraakbubbel' ) ) : ?>
							<div class="banner-bubble wow animated fadeIn">
								<div class="banner-bubble-content">
									<?= get_sub_field( 'spraakbubbel_inhoud' ); ?>


									<?php /*
									<div class="row banner-bubble-buttons">
										<div class="col-md-6 col-sm-12">
											<a href="<?= get_sub_field( 'spraakbubbel_knop_1_link' ); ?>"
											   class="btn"><?= get_sub_field( 'spraakbubbel_knop_1_tekst' ); ?></a>
										</div>
										<div class="col-md-6 col-sm-12">
											<a href="<?= get_sub_field( 'spraakbubbel_knop_2_link' ); ?>"
											   class="btn"><?= get_sub_field( 'spraakbubbel_knop_2_tekst' ); ?></a>
										</div>
									</div>
                                    */ ?>
								</div>
							</div>
						<?php endif; ?>
					</div>
				</div>
				<!--				</div>-->
			</div>

		<?php elseif ( get_row_layout() == 'inhoudslider' ) : ?>

			<div <?= get_sub_field( 'sectie_id' ) ? ' id="' . get_sub_field( 'sectie_id' ) . '" ' : ''; ?>
				class="section section-<?= get_row_layout(); ?> container <?= get_sub_field( 'sectie_id' ) ? get_sub_field( 'sectie_id' ) : ''; ?>"
				<?= get_sub_field( 'achtergrondkleur' ) ? ' style="background-color:' . get_sub_field( 'achtergrondkleur' ) . '" ' : ''; ?>>

				<!--				<div class="container">-->

				<?php if ( get_sub_field( 'sectie_titel' ) ): ?>
					<div class="row">
						<div class="col-lg-3 col-md-6 col-sm-12">
							<h2 class="sectie-titel wow animate slideInLeft"><?= get_sub_field( 'sectie_titel' ); ?></h2>
						</div>
						<div class="col-lg-8 col-md-6 col-sm-0"></div>
					</div>
				<?php endif; ?>

				<div class="row entry-content">

					<?php if ( have_rows( 'inhoud' ) ): ?>

						<div class="col-lg-4 col-md-12">

							<ul class="inhoudsslider-list wow animated fadeInLeft">

								<?php $counter = 0; ?>

								<?php while ( have_rows( 'inhoud' ) ) : the_row() ?>

									<li>
										<a id="<?= 'inhoudsslider-list-' . $section_counter . '-' . $counter; ?>" <?= $counter == 0 ? 'class="active"' : ''; ?>
										   href="#" data-contentid="<?= $section_counter . '-' . $counter; ?>"
										   data-image="<?= get_sub_field( 'achtergrondafbeelding' ); ?>"><?= get_sub_field( 'quote' ); ?></a>
									</li>

									<?php $counter ++; ?>

								<?php endwhile; ?>

							</ul>

						</div>

					<?php endif; ?>

					<?php if ( have_rows( 'inhoud' ) ): ?>

						<div class="col-lg-4 col-lg-push-3 col-md-12">

							<ul class="inhoudsslider-list-content">

								<?php $counter = 0; ?>

								<?php while ( have_rows( 'inhoud' ) ) : the_row() ?>

									<li id="<?= 'inhoudsslider-content-' . $section_counter . '-' . $counter; ?>" <?= $counter > 0 ? 'style="display: none;"' : ''; ?>>
										<?= get_sub_field( 'inhoud' ); ?>
									</li>

									<?php $counter ++; ?>

								<?php endwhile; ?>

							</ul>

						</div>

					<?php endif; ?>

				</div>
				<!--				</div>-->
			</div>

		<?php elseif ( get_row_layout() == 'google_maps' ) : ?>

			<div <?= get_sub_field( 'sectie_id' ) ? ' id="' . get_sub_field( 'sectie_id' ) . '" ' : ''; ?>
				class="section section-<?= get_row_layout(); ?> container  <?= get_sub_field( 'sectie_id' ) ? get_sub_field( 'sectie_id' ) : ''; ?>">

				<div class="row">

					<div id="map" style="width: 100%; height: 400px"></div>
					<script>
						function initMap() {
							var uluru = {lat: 52.377385, lng: 5.221015};
							var map = new google.maps.Map(document.getElementById('map'), {
								zoom: 12,
								center: uluru,
								scrollwheel: false,
								navigationControl: false,
								mapTypeControl: false,
								scaleControl: false,
								draggable: false
							});
							var marker = new google.maps.Marker({
								position: uluru,
								map: map
							});
						}
					</script>
					<script async defer
					        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDki4evNULfcSYt0vFPQfhY3yc39lpBQ-c&callback=initMap">
					</script>

				</div>

			</div>

			<?php
		endif;

		$section_counter ++;

	endwhile;

else :

	// no layouts found

endif;