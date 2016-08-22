<?php get_header(); ?>

				<?php
					if ( have_posts() ) :
						while ( have_posts()): 
							the_post();
				?>
					<h1  class="page-heading max-width"><?php the_title(); ?></h1>	
					<main class="max-width">
							<article class="max-width">								
								<div class="block__title">Escrito por: <?php the_author(); ?> </div>
								<div class="block__body">
								<p> <?php the_content(); ?></p>
								<footer>
									<div>
									<small><?php the_tags(); ?></small>
									</div>
									<div>
									<small><?php the_date(); ?></small>
									</div>
								</footer>
							</article>
					</main>
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
	</div>
<?php get_footer("single"); ?>