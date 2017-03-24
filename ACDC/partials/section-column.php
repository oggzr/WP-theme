<?php 
$type = "";
if (get_sub_field('interface') == 'columns') : ?>

<?php $type = "columns"; ?>

<?php elseif (get_sub_field('interface') == 'standard') : ?>

<?php $type = "standard"; ?>

<?php endif; ?>



<section class="<?php echo $type; ?> <?php the_sub_field('color') ?>">

<?php if ( $type == "columns") : ?>

	<div class="container text-center">

	<?php else : ?>

		<div class="container">

	<?php endif; ?>

		<div class="row">

			<div class="col-xs-12">

				<h2><?php the_sub_field( 'title' ); ?></h2>


			</div>

		</div>

		<div class="row bottom">

			<?php $width = get_sub_field( 'format' ); ?>

			<?php if ( have_rows( 'columns' ) ) : ?>

				<?php while ( have_rows( 'columns' ) ) : ?>

					<?php the_row(); ?>

					<div class="col-xs-12 col-sm-<?php echo $width; ?>">

						<?php
				$graphic = get_sub_field( 'graphic' );

				if ( $graphic == 'image' ) {
					$image = get_sub_field( 'image' );

					if ( $type == "standard" ) {
						$thumb = $image['url'];
					}
					elseif ($type == "columns") {
						$thumb = $image['sizes']['thumbnail']; }
					echo '<img src="'.$thumb.'" />';
				}
				else {
					$icon = get_sub_field( 'icon' );
					echo '<i class="fa fa-'.$icon.' fa-5x"></i>';
				}
			?>

			<h3><?php the_sub_field( 'title' ); ?></h3>

			<?php $text = get_sub_field('text'); ?>

			<p><?php echo do_shortcode($text); ?></p>

			<?php if (get_sub_field('button') ) : ?>

			<a class="btn btn-default" href="<?php the_sub_field('link')?>"><?php the_sub_field('button_text'); ?></a>

		<?php endif; ?>

			

		</div>

	<?php endwhile; ?>

</div>

<?php endif; ?>

		</div>

	</div>

</section>