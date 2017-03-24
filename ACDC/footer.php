</main>

<footer id="footer">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-4">

				<h4 class="text-center">Search</h4>

				<?php get_search_form(); ?>

			</div>
			<div class="col-xs-12 col-sm-offset-1 col-sm-3">

				<h4>Contact</h4>

				<?php the_field( 'contact' , 'options' ); ?>
						
			</div>
			<div class="col-xs-12 col-sm-4">

			<h4> <?php the_field('social_title' , 'options' ); ?> </h4>

				
					<?php social_icon(); ?>	
			</div>
		</div>
	</div>
</footer>

		<?php wp_footer(); ?>

</body>
</html>