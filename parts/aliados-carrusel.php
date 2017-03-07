<?php 
/*
	Tema fundacion mis años bellos
	Creado mager19
	Aliados - Carrusel
*/
?>


	<h4>Nuestros Aliados</h4>
	<div class="col-md-12 co">
		<div class="slide2">

			<?php
			$args = array('post_type' => 'aliados_post_type', 'order'   => 'ASC');
			$loop = new WP_Query($args);


			if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<div class="slide__item2">
					  	<?php
							the_post_thumbnail($size = 'aliados');

					  		$enlace_aliado = get_field('enlace_aliado'); ?>
					  		<!-- <a href="<?php echo esc_url($enlace_aliado); ?>" target=_blank> -->
					  		
					  		<!-- </a> -->
					</div>
						<!-- post -->
			<?php endwhile; ?>
			<!-- post navigation -->
			<?php else: ?>
			<!-- no posts found -->
			<?php endif; ?>
		</div>
	</div>



