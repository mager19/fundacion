<?php
/*
	Tema fundacion mis años bellos
	Creado mager19
	Index
*/

get_header();
?>

<section class="slide">
	<?php
	$args = array('post_type' => 'slides_post_type', 'order'   => 'ASC');
	$loop = new WP_Query($args);

	if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>
		<div class="slide__item" style="background-image: url(<?php the_post_thumbnail_url();?>);">
		  		<div class="container">
		  			<div class="row">
		  			<?php 
		  				if( get_field('formulario_ayudanos')):?>
							<div class="col-md-7">
			  					<h1><?php the_title(); ?></h1>
			  					<p><?php the_excerpt(); ?></p>
			  					<?php if( get_field('boton_slide') ): 
			  						$enlace_boton = get_field('enlace_boton');
			  						$nombre_boton = get_field('nombre_boton');
			  					?>
									<a href="<?php echo esc_url($enlace_boton);  ?>"><?php echo $nombre_boton; ?></a>
								<?php endif; ?>
		  					
		  					</div>
			  				<div class="col-md-5">
			  					<div class="form__ayudanos">
			  						<h3>Ayúdanos</h3>
			  						<?php echo do_shortcode('[contact-form-7 id="27" title="Sin título"]'); ?>
			  					</div>
			  				</div>
					
					<?php else:?>
							<div class="col-md-12">
			  					<h1><?php the_title(); ?></h1>
				  				<p><?php the_excerpt(); ?></p>
				  				<?php if( get_field('boton_slide') ): 
				  					$enlace_boton = get_field('enlace_boton');
				  					$nombre_boton = get_field('nombre_boton');
				  				?>
									<a href="<?php echo esc_url($enlace_boton);  ?>"><?php echo $nombre_boton; ?></a>
								<?php endif; ?>
			  				</div>
					<?php		
		  				endif;
		  			?>		  				
		  			</div>
		  		</div>
			</div>
	<!-- post -->
	<?php endwhile; ?>
	<!-- post navigation -->
	<?php else: ?>
	<!-- no posts found -->
	<?php wp_reset_query();?>
	<?php endif; ?>
</section>

<section class="contenedor hacemos">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3>Esto es lo que hacemos</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui eum perferendis excepturi hic enim voluptate natus recusandae tenetur placeat necessitatibus, praesentium! Tempora, quos quibusdam quod aperiam nulla voluptates dolorem enim.</p>
			</div>
			<div class="col-md-4">
				<div class="hacemos__item">
					<img src="<?php get_template_directory_uri()?>/hand.png" alt="">
					<h4>Programas de Desarrollo Social</h4>
					<p>En niños, jovenes y adultos mayores, buscando mejorar su calidad de vida.</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="hacemos__item">
					<img src="http://127.0.0.1/fundacion/wp-content/uploads/2016/12/educacion.png" alt="">
					<h4>Programas de Alimentación Básica</h4>
					<p>En niños, jovenes y adultos mayores, buscando mejorar su calidad de vida.</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="hacemos__item">
					<img src="http://127.0.0.1/fundacion/wp-content/uploads/2016/12/familia.png" alt="">
					<h4>Programas de Tejido social</h4>
					<p>En niños, jovenes y adultos mayores, buscando mejorar su calidad de vida.</p>
				</div>
			</div>

			<div class="col-md-12 aliados">
				<?php 
					get_template_part('parts/aliados','carrusel');
				?>
			</div>
		</div>
	</div>
</section>

<section class="contenedor cifras">
	<div class="container">
		<div class="row">
			<div class="col-md-5">
				<h3 class="subtitulo">Llevamos 30 Años realizando una labor humanitaria, mostrando un camino distinto a la comunidad y creando ciudad.</h3>
			</div>
			<div class="col-md-6 col-md-offset-1">
				<div class="row">
					<div class="col-md-4 col-xs-4">
						<div class="cifras__item">
							<i class="icon-stats-dots"></i><br>
							<span class="counter">30</span>
							<h4>Años <br>de labor</h4>
						</div>
					</div>

					<div class="col-md-4 col-xs-4">
						<div class="cifras__item">
							<i class="icon-list2"></i><br>
							<span class="counter">300</span>
							<h4>Proyectos terminados</h4>
						</div>
					</div>

					<div class="col-md-4 col-xs-4">
						<div class="cifras__item">
							<i class="icon-man-woman"></i><br>
							<span class="counter">5000</span>
							<h4>Personas<br> Ayudadas</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="contenedor noticias">
	<div class="container">
		<div class="row">
			<?php get_template_part('parts/noticias','recientes'); ?>
		</div>
	</div>
</section>

<?php
get_footer();
