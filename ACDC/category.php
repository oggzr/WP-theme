<?php get_header(); ?>

	<section class="band">

		<h1 class="text-center">Archive for the term : <?php single_term_title();?></h1>

			<?php if ( have_posts() ) : ?>

				<div class="container">

				<?php while ( have_posts() ) : the_post(); ?>
	
					<?php get_template_part('partials/content' , 'news_archive'); ?>

				<?php endwhile; ?>

				</div>

		<?php the_posts_pagination(); ?>

			<?php endif; ?>

	</section>

<?php get_footer(); ?>