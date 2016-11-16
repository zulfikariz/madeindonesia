      <section id="bmee-testimoni-widget" class="bmee-widget">
        <div class="container">
          <div class="section-title">
            <h2>KELOLA LAH  <span>SEDEKAH</span> ANDA  </h2>
          </div>
          <!-- <div class="testimonial"> -->
           
                    <div class="left">
                      <h4> Seputar Keagamaan  </h4>
                      <div class="content"> 
                         <?php 
                         $args=array(
                         'post_type' => 'post',
                         'cat' =>20,
                         'posts_per_page' => 3,
                         // 'paged' => $paged
                         );
                        $wp_query= new WP_Query($args);
                        ?>
                        <?php
                         if($wp_query->have_posts()):?>
                        
                           <?php
                            while($wp_query->have_posts()) :
                              $wp_query->the_post();?>
                              <div class="artikel">
                                <div class="thumbnail">
                                <?php
                                    $permalink=get_permalink();
                                    if( has_post_thumbnail($post->ID))
                                    {
                                     $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), array( 350, 1500));
                                         if ( ! empty( $large_image_url[0] ) ) 
                                         {
                                            echo '<a href="' . $permalink . '" title="' . the_title_attribute( array( 'echo' => 0 ) ) . '">';
                                            echo get_the_post_thumbnail( $post->ID, array( 350,1500) ); 
                                            echo '</a>';
                                          }
                                     }
                                  ?>
                                </div>
                                <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                                <span><?php the_date(); ?></span>
                                <p><?php the_excerpt();?>[....]</p>
                              </div>
                            <?php
                            endwhile;
                          endif;
                          wp_reset_query();
                          ?>
                        <a href="" class="no-border orange">Berita Lainya</a>
                      </div>
                    </div>
                    <div class="midle">
                      <h4> Seputar Sosial Budaya </h4>
                      <div class="content"> 
                         <?php 
                         $args=array(
                         'post_type' => 'post',
                         'cat' =>21,
                         'posts_per_page' => 3,
                         // 'paged' => $paged
                         );
                        $wp_query= new WP_Query($args);
                        ?>
                        <?php
                        if($wp_query->have_posts()):?>
                           <?php
                            while($wp_query->have_posts()) :
                                $wp_query->the_post();?>
                              <div class="artikel">
                                <div class="thumbnail">
                                <?php
                                    $permalink=get_permalink();
                                    if( has_post_thumbnail($post->ID))
                                    {
                                     $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), array( 350, 1500));
                                         if ( ! empty( $large_image_url[0] ) ) 
                                         {
                                            echo '<a href="' .$permalink. '" title="' . the_title_attribute( array( 'echo' => 0 ) ) . '">';
                                            echo get_the_post_thumbnail( $post->ID, array( 350,1500) ); 
                                            echo '</a>';
                                          }
                                     }
                                  ?>
                                </div>
                                <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                                <span><?php the_date(); ?></span>
                                <p><?php the_excerpt();?>[....]</p>
                              </div>
                            <?php
                            endwhile;
                        endif;
                          wp_reset_query();
                          ?>
                       <a href="" class="no-border orange">Berita Lainya</a>
                      </div>
                    </div>
                    <div class="right">
                    <h4>AGENDA & PENGUMUMAN</h4>
                       <div class="agenda"> <!-- start of agenda  -->
                          <?php 
                          $args=array(
                            'post_type' => 'wporg_pengumuman',
                            'posts_per_page' => 5);
                          $wp_query=new WP_Query($args);
                          if($wp_query->have_posts()):
                            while ($wp_query->have_posts()):
                              $wp_query->the_post();
                              ?>
                              <div class="pengumuman">
                                <div class="bulan">
                                    <p><?php echo get_field('waktu_mulai');?>-<?php echo get_field('waktu_selesai');?></p>
                                </div>
                                <div class="content">
                                  <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </div>
                              </div>
                            <?php
                            endwhile;
                          endif;
                          wp_reset_query();
                        ?>

                       </div><!--  end of agenda -->
                       
                       <div class="sosok"> <!-- Start Sosok -->
                        <h4>SOSOK BULAN INI</h4>
                         <?php 
                         $args=array(
                         'post_type' => 'wporg_sosok',

                         'posts_per_page' => 1,
                         // 'paged' => $paged
                         );
                        $wp_query= new WP_Query($args);
                        ?>
                        <?php
                        if($wp_query->have_posts()):?>
                           <?php
                            while($wp_query->have_posts()) :
                                $wp_query->the_post();?>
                                <?php $id = get_the_ID();?>
                              <div class="artikel text-right">
                                <?php
                                  if( has_post_thumbnail($id))
                                  {
                                   $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'thumbnail' );
                                       if ( ! empty( $large_image_url[0] ) ) 
                                       {
                                          echo '<a href="' . esc_url( $large_image_url[0] ) . '" title="' . the_title_attribute( array( 'echo' => 0 ) ) . '">';
                                          echo get_the_post_thumbnail( $post->ID, 'thumbnail' ); 
                                          echo '</a>';
                                        }
                                   }
                                ?>
                                <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                                <p><?php the_excerpt();?>[.....]</p>
                              </div>
                            <?php
                            endwhile;
                        endif;
                          wp_reset_query();
                          ?>
                       <a href="<?php the_permalink(); ?>">Selengkapnya</a>
                      </div> <!-- end sosok -->

                    </div>

                        
                            
        <!--   </div> -->
                    <!-- end of main content-->


              <ul class="slides">
              <li>
                <img src="<?php //echo image_src($val->post_image); ?>"/>
                <div class="testimoni-item">
                  <span><?php //echo $val->post_title; ?></span>
                  <quote><?php //echo $val->post_content; ?></quote>
                  <cite> <?php //echo $val->post_excerpt; ?></cite>
                </div>
              </li>
              <?php //endforeach; ?>
            </ul>

                   


           
          </div>
        </div>




      </section>