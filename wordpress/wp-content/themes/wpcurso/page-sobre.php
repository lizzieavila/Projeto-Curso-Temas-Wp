<?php get_header(); ?>

<div class="conteudo">
	<main>		
				<section class="meio container">
					<div class="noticias">
						<?php 

							if(have_posts()) :
								while(have_posts()) : the_post();
						?>

						<h1><?php the_title(); ?></h1>
						<p>Publicado em <?php echo get_the_date(); ?> Por <?php the_author(); ?></p>
						<p>Categorias: <?php the_category(''); ?></p>
						<p>Tags: <?php the_tags(''); ?></p>
						<p><?php the_content(); ?></p>

					<?php endwhile;
					else:
					   ?>

					   <p>Não há nada publicado</p>
					<?php endif; ?>
					</div>            
			</section>

	</main>
</div>
<?php get_footer(); ?>
