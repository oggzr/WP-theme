<article class="band">
	<div class="row">
		<div class="col-sm-3 col-xs-12">
			<?php portrait(); ?>
		</div>
		<div class="col-sm-9 col-xs-12">
			<h3>
				<a href="<?php the_permalink(); ?>">
					<?php the_title(); ?>
				</a>
			</h3>				
				<?php the_content(); ?>
			<br />
			<?php the_bio(); ?>
		</div>
	</div>
</article>