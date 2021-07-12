if ( is_single() ) :
the_post_thumbnail( 'full' );
else :
the_post_thumbnail( 'thumbnail' );
endif;