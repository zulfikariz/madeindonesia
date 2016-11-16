<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<?php $id = get_the_ID();?>
		<div class="main-content">
			<div class="page-title green">
				<h1><?php the_title(); ?></h1>
				<div class="breadcrumbs">
					<a href="<?php $url = home_url();
									echo esc_url( $url );
									?> ">Home</a>//<span><?php the_title(); ?></span>
				</div>
			</div>
			<section id="page schools" class="bmee-widget">
				<div class="container">
					<div class="section-title">
						<h2> <span><?php the_title(); ?></span> </h2>
					</div>

					<div class="inner">
					<div class="wysiwyg">
					LOCATION : <br>
					Waktu 	  : Mulai Tanggal  <?php echo get_field('waktu_mulai'); ?> Sampai  <?php echo get_field('waktu_selesai'); ?><br>
					PENDANAAN : <br>
					PEMASUKAN <br>
				<?php 
					if(have_rows('pemasukan') ):
   						while (have_rows('pemasukan') ) : the_row(); ?>
   							<?php the_sub_field('nama_sumber_dana'); ?><br>
   							<?php the_sub_field('jumlah_dana'); ?><br>
   							<?php the_sub_field('keterangan'); ?><br>
   				<?php endwhile; endif; ?>

   					PENGELUARAN <br>
   					<?php 
					if(have_rows('pengeluaran') ):
   						while (have_rows('pengeluaran') ) : the_row(); ?>
   							<?php the_sub_field('nama_sumber_dana'); ?><br>
   							<?php the_sub_field('jumlah_dana'); ?><br>
   							<?php the_sub_field('keterangan'); ?><br>
   					<?php endwhile; endif; ?>

					<hr>
						<?php the_content(); ?>
				
					</div>
				</div>

				</div>
			</section>
		</div>
<?php endwhile; endif;?>

<?php get_footer(); ?>