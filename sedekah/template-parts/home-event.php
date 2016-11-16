<div class="main-content">
<section id="bmee-student-testimonial-widget" class="bmee-widget orange">
				<div class="container">
					<div class="student-testimonial">
						<div class="left-title">
							GALERI KEGIATAN
						</div>
						<div class="student-testi">
							<ul class="slides green">
								<?php
								//$testi_student_query = $this->post_model->select('post_title,post_excerpt,post_image,post_content')->get(array('post_type' => 'testi_student'));

								//foreach($testi_student_query->result() as $val):
								?>

								<?php 
						         $args=array(
						           'post_type' => 'wporg_event',
						           'posts_per_page' =>-1);
						         $wp_query= new WP_Query($args);
						      ?>
						      <?php
						         if($wp_query->have_posts()):
						           while($wp_query->have_posts()) :
						              $wp_query->the_post();?>
						          	 
						          	 <li>
						          	 <?php
						          	 if( has_post_thumbnail()){

									the_post_thumbnail();

									}
									?>
									<div class="detail">
										<quote>
											<cite>~ <?php echo get_field('waktu_mulai'); ?></cite>
											<?php echo get_field('nama_event'); ?><br>
											<?php if(get_the_excerpt()){
												echo get_the_excerpt();
												} ?>
										</quote>
										<br>
										<a href="<?php echo get_permalink(); ?>" >Selengkapnya</a>
									</div>
									</li>
						         <?php
						           endwhile;
						         endif;
						         wp_reset_query();
						      ?>






							
								<?php // endforeach; ?>


							</ul>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
	</section>
</div>