<?php get_header(); ?>

	<h1  class="page-heading max-width">Categoría Especial: Ilustraciones (id 5)</h1>
	<div class="grid max-width">
		<div class="block grid--item-9">
			<div class="block__body grid">
				<?php
					if ( have_posts() ) :
						while ( have_posts()): 
							the_post();
				?>
							<article class="block grid--item-4">								
								<h2 class="block__title"> <?php the_title(); ?> </h2>
								<div class="block__body">
								<p> <?php the_excerpt(); ?></p>
								<footer>
									<div>
									<small><?php the_tags(); ?></small>
									</div>
									<div>
									<small><?php the_date(); ?></small>
									</div>
									<div>
									<b><?php the_author(); ?></b>
									</div>									
									<a href="<?php the_permalink(); ?>">Leer Más</a>
								</footer>
							</article>
				<?php						
						endwhile;
						else :
				?>
						<h4>Huy, no encontramos entradas</h4>
				<?php
					endif;
					wp_reset_postdata();
				?>
			</div>
		</div>
		<?php get_sidebar(); ?>
	</div>
<?php get_footer(); ?>