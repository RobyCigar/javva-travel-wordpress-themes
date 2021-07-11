<?php

get_header();
get_template_part("template-parts/hero");
?>

<?php if (have_posts()): ?>
<?php while (have_posts()):
  the_post(); ?>
    <div id="post">
        <h2><a href="<?php the_permalink(); ?>"></a><?php the_title(); ?></h2>
        <div>Penulis <?php the_author_posts_link(); ?>
            tanggal dibuat <a href="<?php the_permalink(); ?>"><?php the_time(
  "l F d, Y"
); ?></a>
    </div>
  <?php 
  the_content(); 
  next_post_link();
  ?>
<?php
endwhile; ?>
    <?php else: ?> 
            <p>No posts were found. Sorry!")</p>
    <?php endif; ?>
    </h1>

    <?php 
// the query
$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>
 
<?php if ( $wpb_all_query->have_posts() ) : ?>
 
<ul>
 
    <!-- the loop -->
    <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
    <?php endwhile; ?>
    <!-- end of the loop -->
 
</ul>
 
    <?php wp_reset_postdata(); ?>
 
<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>


<?php get_footer(); ?>
