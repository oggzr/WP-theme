<?php get_header(); ?>

	<section class="event">

		<h1 class="text-center">EVENTS</h1>


			<?php if ( have_posts() ) : ?>

			<div class="container">

				<?php while ( have_posts() ) : the_post(); ?>
	
					<?php get_template_part('partials/content' , 'archive_event'); ?>

				<?php endwhile; ?>

			</div>

			<?php endif; ?>

	</section>

<?php get_footer(); ?>