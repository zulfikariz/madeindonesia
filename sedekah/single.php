<?php 
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Sedekah
 * @since sedekah 1.0
 */

get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<div class="main-content">
			<div class="page-title green">
				
				<div class="breadcrumbs">
					<a href="#">Home</a>//<span><?php the_title(); ?></span>
				</div>
			</div>
			<section id="page schools" class="bmee-widget">
				<div class="container">
					<?php 
					if( has_post_thumbnail($post->ID))
                                  {
                                   $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), array(250,2000));
                                       if ( ! empty( $large_image_url[0] ) ) 
                                       {
                                          echo '<a href="' . esc_url( $large_image_url[0] ) . '" title="' . the_title_attribute( array( 'echo' => 0 ) ) . '">';
                                          echo get_the_post_thumbnail( $post->ID, array(250,2000) ); 
                                          echo '</a>';
                                        }
                                   }
					?>
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