<?php
/* Template Name: standard utan flex*/ 
?>

<?php get_header() ?>

<div class="container">
	<div class="row">
		<div class="col-xs-12 text-center">
			<h1><?php the_title();?></h1>
		</div>
		

			<?php if (have_posts() ) :
					while (have_posts() ) :
						the_post(); ?>
					<div class="col-xs-12 col-sm-12">
						<article class="standard">
							<div class="row">
								<div class="col-xs-12 col-sm-12">
							<?php
							 if ( has_post_thumbnail() ) {	
								the_post_thumbnail("full");	} ?>
								</div>
								<div class="col-xs-12 col-sm-12">	
									<h2 class="text-center" ><?php the_title(); ?></h3>		
									<?php the_content(); ?>
								</div>
							</div>
						</article>
					</div>

			<?php endwhile;
				endif; ?>
	</div>
</div>




















<?php get_footer() ?>