<?php get_header(); ?>
    <div id="primary" class="content-area">
        <main id="main" class="mx-auto w-50" role="main">
  
        <?php
        // Start the loop.
        while ( have_posts() ) : the_post();
  
            /*
             * Include the post format-specific template for the content. If you want to
             * use this in a child theme, then include a file called called content-___.php
             * (where ___ is the post format) and that will be used instead.
             */
            get_template_part( 'template-parts/content/content-single' );
  
            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;
  
            // Previous/next post navigation.
            the_post_navigation( array(
                'class' => "my-4",
                'screen_reader_text' => 'Navigasi laman',
                'next_text' => '<p aria-hidden="true">' . '</p> ' . '<span>' . __( 'Next post:' ) . '</span> ' .'<span>%title</span>',
                'prev_text' => '<p aria-hidden="true">' . '</p> ' . '<span>' . 'Previous post:' . '</span> ' . '<span>%title</span>',
            ) );
  
        // End the loop.
        endwhile;
        ?>
  
        </main><!-- .site-main -->
    </div><!-- .content-area -->

<?php get_footer(); ?>