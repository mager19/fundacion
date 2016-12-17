<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width,  minimum-scale=1,  maximum-scale=1">
	<title><?php wp_title('&raquo;', true, 'right'); ?><?php bloginfo('name'); ?></title>
	
	<?php wp_head(); ?>
	
</head>

<body>
<header>
	<div class="container">
		<div class="row">
			<?php 
				get_template_part('parts/menu','top');
			?>
		</div>
	</div>
</header>

<!-- Set up your HTML -->
<div class="slide">

	<?php
	$args = array('pagename' => 'inicio');
	$loop = new WP_Query($args);

	if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>
	<?php 
		$slide1 = get_field('slide_imagen_1');

	?>
	<!-- post -->
	<?php endwhile; ?>
	<!-- post navigation -->
	<?php else: ?>
	<!-- no posts found -->
	<?php endif; ?>


  <div class="slide__item" style="background-image: url(<?php echo $slide1['url'];?>);">
  		<div class="container">
  			<div class="row">
  				<div class="col-md-6">
  					<h3><?php the_title(); ?></h3>
  					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem in molestias animi doloremque nihil cum illo commodi, quae suscipit eveniet a tempore veniam quasi reiciendis. Minus placeat sequi, dolores nisi!</p>
  				</div>
  			</div>
  		</div>
  </div>
  <div class="slide__item">your content</div>
  <div class="slide__item">your content</div>
</div>
		


