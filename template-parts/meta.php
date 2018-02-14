<?php

/**
 * Template part for displaying post metadata
 *
 */
?>
<div class="meta">

    <p><?php 
    
    _e( 'Brief submitted by: ', 'designbriefs');
    the_author();
    echo ', ';
    
    ?><span class="date"><?php the_time( get_option( 'date_format' ) ); ?></span>
    </p>

    <?php if (  'post' == get_post_type() ) : ?>
    
        <?php
        
        // Test if tags are present
        
        $the_tags = get_the_tag_list( 
	        '', // before
	        ', ', // separator
	        '' // after )
	      );
	      
	      if ( $the_tags ) {
	      
		      echo '<p>';
	        _e( 'Keywords: ', 'designbriefs'); 
	        echo $the_tags;
	        echo '</p>';
        
        }
        
        ?>
        
    <?php endif; ?>

</div><!-- .meta -->