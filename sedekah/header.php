<!DOCTYPE html>
<html lang="nl_NL">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="icon" type="image/png" href="<?php echo get_template_directory().'/images/logosc.png';?> ">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div class="main-wrapper">
		<header id="header">

			<!-- <div id="top-nav">
				<div class="container">
					<nav id="top-menu">
						<ul>
							<?php //$about_social_media = json_decode($this->setting_model->get_setting('other_contact_info')); ?>
							<li><a href="#"><i class="fa fa-phone"></i> <?php // echo $this->setting_model->get_setting('phone_info'); ?> ( 09:00 - 17:00 )</a></li>
							<li><a target="_blank" href="<?php //echo prep_url($about_social_media->facebook); ?>"><i class="fa fa-facebook"></i></a></li>
							<li><a target="_blank" href="<?php //echo prep_url($about_social_media->twitter); ?>"><i class="fa fa-twitter"></i></a></li>
							<li><a target="_blank" href="<?php //echo prep_url($about_social_media->googleplus); ?>"><i class="fa fa-google-plus"></i></a></li>
							<li><a target="_blank" href="<?php //echo prep_url($about_social_media->instagram); ?>"><i class="fa fa-instagram"></i></a></li>
							
							<?php// if($this->auth->is_signed())
							//{ ?>
							<li><a href="<?php //echo site_url('main/sign_out');?>"><i class="fa fa-lock "></i>Logout</a></li>
							<?php //}
							//else{ ?>
							<li><a href="<?php// echo site_url('main/login');?>"><i class="fa fa-lock "></i>Login</a></li>
							<?php	//} ?>

						</ul>
					</nav>
				</div>
			</div> -->

			<div id="slider" class="height">
				<?php		
			        $args=array(
			           'post_type' => 'wporg_slidder',
			           'posts_per_page' =>-1);
			        $wp_query= new WP_Query($args);
		      	?>
		        <?php
		         if($wp_query->have_posts()):
		           	while($wp_query->have_posts()) :
		              	$wp_query->the_post();?>

						<!-- shwo the slideshow -->
						<div class="slideritem">
							<?php
							 	if( has_post_thumbnail())
							 	{
									the_post_thumbnail();
								}
							?>
							<div class="container">
								<div class="in-slide-content">
									<p><?php  if(get_the_excerpt()){
												echo get_the_excerpt();
												} ?></p>
									<a href="<?php echo get_field('link_1'); ?>" class="button no-border orange"><i class="fa fa-lock"></i><?php echo get_field('nama_tombol_1'); ?></a>
									<a href="<?php echo get_field('link_2'); ?>" class="button"><?php echo get_field('nama_tombol_2'); ?></a>
								</div>
							</div>
						</div>
				<?php
				    endwhile;
				    endif;
				   wp_reset_query();
				?>

			</div>

			<div id="navigation">
				<div class="container">
					<div id="logo">
						<a href="<?php echo home_url(); ?>">
							<img src="<?php  echo get_field('logo_image',55); ?>"/>
						</a>
					</div>

            <nav id="main-menu">
                <ul>
                    <?php
             			wp_nav_menu( array(
		                 'theme_location'   => 'primary',
		                 'depth'            => 1,
		                 // 'menu_id'           => 'main-menu',
		                 'menu_class'       => 'list-inline'
		             	));
             		?>
             	</ul>
                            
            </nav>
            <div class="clearfix"></div>
                </div>
            </div>
        </header>
