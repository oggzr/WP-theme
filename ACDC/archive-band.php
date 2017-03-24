<?php get_header(); ?>

	<section class="band">

		<h1 class="text-center">The Band</h1>


			<?php if ( have_posts() ) : ?>

				<div class="container">
					<div class="row">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part('partials/content' , 'band_archive'); ?>
			<?php endwhile; ?>
					</div>
				</div>

			<?php endif; ?>

	</section>

<?php get_footer(); ?>