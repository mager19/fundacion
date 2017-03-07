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
