<?php
/**
 * Default Blog Template
 *
 */

get_header(); ?>

<div class="container index-content py-4" role="main">
  <div class="row">
<div class="col-12 col-lg-8">
  <?php
  if ( have_posts() ) :
    while ( have_posts() ) : the_post();

      get_template_part( 'partials/post', 'index' );
    endwhile;
    get_template_part( 'partials/post', 'nav' );
  endif;
  ?>
 </div>
 <div class="col-12 col-lg-4">
 <?php  get_sidebar(); ?>
 </div>
 </div>
</div><!-- end content -->


<?php get_footer(); ?>
