<?php /* Template Name: Home Template */ get_header();?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<div class="container-fluid">   
				<main>
						<?php
							 get_template_part('template-parts/home', 'feature');
							 get_template_part('template-parts/home', 'overview');
							 get_template_part('template-parts/home', 'event');
						?>
				</main>
		</div>
<?php endwhile; ?>
<?php endif; ?>				

<?php get_footer(); ?>
