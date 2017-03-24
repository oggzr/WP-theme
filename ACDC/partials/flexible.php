<?php 

if ( have_rows( 'sections' ) ) :

	while ( have_rows( 'sections' ) ) :

		the_row();

		if ( get_row_layout() == 'columns' ) :

			get_template_part( 'partials/section' , 'column' );

		elseif ( get_row_layout() == 'banner' ) :

			get_template_part( 'partials/section' , 'banner' );

		elseif ( get_row_layout() == 'quote' ) :

			get_template_part( 'partials/section' , 'quote' );

		endif;

	endwhile;

endif;