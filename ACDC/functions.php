<?php 

require "includes/cpt.php";

/* Köa in css etc...*/

function theme_scripts(){
		wp_enqueue_style( 'fontawesome' , get_template_directory_uri().'/assets/css/font-awesome.css' );
		wp_enqueue_style( 'bootstrap' , get_template_directory_uri().'/assets/css/bootstrap.css' );
		wp_enqueue_style( 'style' , get_template_directory_uri().'/assets/css/style.css' );
		wp_enqueue_script('scripts', get_template_directory_uri().'/assets/js/script.js' , array('jquery'), false, true);
	}
	
	add_action('wp_enqueue_scripts', 'theme_scripts');


/* Options */

if ( function_exists( 'acf_add_options_page' ) ) {
	acf_add_options_page();
}

/* Menyer */

function register_my_menu() {
	register_nav_menu( 'huvudmeny' , 'Huvudmeny' );
}

add_action( 'after_setup_theme' ,  'register_my_menu' );

/* Theme Supports */

add_theme_support('post-thumbnails');
	add_post_type_support( 'post' , array( 'thumbnail' ) );
	add_post_type_support( 'page' , array( 'excerpt' , 'thumbnail' ) );
	add_post_type_support( 'post' , array( 'page-attributes' ) );


	function register_my_footermenu(){
	register_sidebar(array(
		'name' => 'sidebar',
		'id' => 'sidebar',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
		'class' => 'sidebar'
	)); }

	add_action( 'widgets_init' , 'register_my_footermenu' );

	/* Egna funktioner */

	function portrait() {
		if ( get_field('image') ) : ?>
			<img src="<?php the_field('image'); ?>" />
			<?php else : ?>
			<div class="placeholder"></div>
		<?php endif; 
	}

	function post_starter() {
		?>
		<h3>
			<a href="<?php the_permalink(); ?>">
				<?php the_title(); ?>
			</a>
				<br />
				<ul class="info">
					<li>
						<i class="fa fa-calendar"></i>
						<?php the_time('F j Y'); ?>
					</li>
				<li>
					<i class="fa fa-user"></i>
					<a href="<?php the_permalink(); ?>">
						<?php the_author_posts_link(); ?>
					</a>
				</li>
				<li>
					<i class="fa fa-tag"></i>
					<a href="<?php the_permalink(); ?>">
						<?php the_category(","); ?>
					</a>
				</li>
			</ul>
		</h3>	<?php			
	}

	function the_bio() {
		?>
		<p><strong>Born : </strong><span><?php the_field('age');?></span></p><br />
		<p><strong>Member since : </strong><span><?php the_field('joined');?></span></p><br />
		<p><strong>Role : </strong><span><?php the_field('role');?></span></p><br />
		<?php
	}

	function the_event() {
		?>
		<p><strong>Start : </strong><span><?php the_field('start');?></span></p><br />
		<p><strong>End : </strong><span><?php the_field('end');?></span></p><br />
		<p><strong>Location : </strong><span><?php the_field('location');?></span></p><br />
		<?php 
	}

	function social_icon() { ?>
		<ul class="social">

			<?php if (have_rows('social_footer' , 'options') ) :
				while (have_rows('social_footer' , 'options') ) : the_row(); ?>
								
					<li>
						<i class="fa fa-<?php the_sub_field('icon' , 'options'); ?>"></i>
						<a href="<?php the_sub_field('link' , 'options'); ?>">
							<?php the_sub_field('icon' , 'options'); ?>
						</a>
					</li>

				<?php endwhile; ?>			
			<?php endif; ?>

		</ul>							
	<?php }