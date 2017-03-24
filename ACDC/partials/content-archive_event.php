<article class="event">
		<div class="row">
			<div class="col-xs-12">
					<?php portrait(); ?>
			</div>
			<div class="col-xs-10 col-xs-offset-1">
				<h3>
					<a href="<?php the_permalink(); ?>">
						<?php the_title(); ?>
					</a>
				</h3>				
					<?php the_content(); ?>
				<br />
				<?php the_event(); ?>
			</div>
		</div>
		</article>