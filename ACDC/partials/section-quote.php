<section class="columns <?php the_sub_field('color') ?>">

	<div class="container text-center">

		<div class="row top">

			<div class="col-xs-12">

				<h2><?php the_sub_field( 'title' ); ?></h2>


			</div>

		</div>

		<div class="row bottom">

		<div class="col-xs-1">
		</div>


			<?php $width = get_sub_field( 'format' ); ?>

			<?php if ( have_rows( 'columns' ) ) : ?>

				<?php while ( have_rows( 'columns' ) ) : ?> 

					<?php the_row(); ?>

					<div class="col-xs-12 col-sm-<?php echo $width; ?>">

				<blockquote>

			<p><?php the_sub_field( 'text' ); ?></p>

				</blockquote>

		</div>

	<?php endwhile; ?>

</div>

<?php endif; ?>

		</div>

	</div>

</section>