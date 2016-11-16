<?php get_header(); ?>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<div class="main-content">
			<div class="page-title green">
				<h2> <span><?php the_title(); ?></span> </h2>
				<div class="breadcrumbs">
					<a href="#">Home</a>//<span><?php the_title(); ?></span>
				</div>
			</div>
			<section id="page schools" class="bmee-widget">
				<div class="container">
					<div class="section-title">
						<h2> <span><?php the_title(); ?></span> </h2>
					</div>
					<div class="inner">
					<div class="wysiwyg">
						<?php the_content(); ?>

					</div>
				</div>

				</div>
			</section>
		</div>

	<?php endwhile; endif;?>

<?php get_footer(); ?>