<?php 
 // Define our WP Query Parameters
 $the_query = new WP_Query( 'posts_per_page=5' ); ?>

<h1 class="wacana text-center my-5">Wacana</h1>

<div class="d-flex my-5 justify-content-center flex-wrap">
 <?php 
 // Start our WP Query
 while ($the_query -> have_posts()) : $the_query -> the_post(); 
 // Display the Post Title with Hyperlink
 ?>

<div class="card mx-4 my-3" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h5>
    <p class="card-text"><?php 
 // Display the Post Excerpt
 the_excerpt(__('(more…)')); ?></p>
    <a href="<?php the_permalink() ?>" class="btn btn-primary">Delok Wacana</a>
  </div>
</div>
  
 <?php 
 // Repeat the process and reset once it hits the limit
 endwhile;
 wp_reset_postdata();
 ?>

</div>