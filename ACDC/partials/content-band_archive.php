<div class="col-xs-3 box text-center">
					<?php if ( get_field('image') ) : ?>
					<img src="<?php the_field('image'); ?>" />
					<?php else : ?>
					<div class="placeholder"></div>
					<?php endif; ?>
					<h3>
					<a href="<?php the_permalink(); ?>">
						<?php the_title(); ?>
					</a>
				</h3>
			</div>