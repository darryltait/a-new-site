<article class="border border-muted bg-light p-3 mb-4 rounded"<?php post_class( 'group' ); ?> role="article">
  <!-- <header> -->
    
  

   
    <h2 class="display-4"><a href="<?php the_permalink(); ?>" class="link-dark "><?php the_title(); ?></a></h2>
    <p class="text-muted">Posted on: <time class="text-muted" datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_time( 'F j, Y' ); ?></time> by <?php the_author(); ?></p>
  <!-- </header> -->
  
  <?php the_excerpt(); ?>

  
  <a href="<?php the_permalink(); ?>" class="btn btn-sm btn-info">Read more</a>



</article>
