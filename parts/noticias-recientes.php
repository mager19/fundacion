<?php
/*
	Tema fundacion mis años bellos
	Creado mager19
	Noticias recientes
*/
?>

<h3 class="subtitulo">Noticias Recientes</h3>

<?php 
	$args = array('posts_per_page' => '4', 'order' => 'DESC');
	$loop = new WP_Query($args);
	$contador = 0;
	?>

	<div class="row">

	<?php if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>

		<div class="col-md-6">
			<div class="noticias__elemento">
				<?php the_post_thumbnail($size = 'imagen-post') ?>
				<div class="col-md-1">
					<?php the_date( 'd M', '<span>', '</span>' );  ?>
				</div>
				<div class="col-md-offset-1 col-md-10">
					<h4><?php the_title(); ?></h4>
				</div>
				<div class="col-md-12">
					<p><?php the_excerpt(); ?></p>
					<a href="<?php the_permalink(); ?>">Leer mas.</a>
				</div>

			</div>
		</div>

		<?php
			$contador++;
  			if($contador %2 == 0) {echo '</div> <div class="row">';}	  

  		?>  
	<!-- post -->
	<?php endwhile; ?>
	<!-- post navigation -->
	<?php else: ?>
	<!-- no posts found -->

		<?php wp_reset_query();?>
	<?php endif; ?>	
	</div>
