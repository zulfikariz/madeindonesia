<?php get_header() ?>

<h1>this index theme</h1>
<!-- OVERVIEW: Wat is Fresh? -->
 <div class="row wat-is-fresh bg-green" id="wat-is-fresh">
      <div class="col-sm-5 col-sm-offset-1 ">
          <h2 class="text-center"><?php the_field('judul_berita'); ?></h2>

          <?php the_field('content'); ?>

      </div>
      <div class="col-sm-5">
          <h2 class="text-center"><?php // the_field('overview_video_title'); ?></h2>
          <div class="videoWrapper">
              <?php // the_field('overview_video'); ?>
          </div><!-- .videoWrapper -->
      </div>

      <div class="col-xs-12 text-center wide-spacing">
          <a href="<?php // the_field('overview_button_link'); ?>" class="button bold"><?php //the_field('overview_button'); ?></a>
      </div>

 </div><!-- #wat-is-fresh -->

 <!-- END - OVERVIEW -->

<?php get_footer() ?>