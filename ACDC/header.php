<!DOCTYPE html>
<html>
<head>
	<title><?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

	<header>
		<div class="container">
			<div class="row">
				<div class="col-xs-4">
					<a href="<?php bloginfo('url'); ?>" class="logo">
						AC/DC
					</a>
				</div>
				<div class="col-xs-8 hidden-sm hidden-xs">
					<?php wp_nav_menu(array(
						'menu_class' => 'standard'
					)); ?>
				</div>
				<div class="col-sm-8 hidden-md hidden-lg">
						<button type="button" class="resp btn btn-default" aria-label="Left Align">
	  						<span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
						</button>
						<?php wp_nav_menu(array(
							'menu_class' => 'respnav'
						)); ?>
			</div>
		</div>
	</header>
	<section class="hero" style="background-image: url('<?php the_field('hero' , 'options')?>');">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
				</div>
			</div>
		</div>
	</section>

	<main>