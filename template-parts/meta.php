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
    
        <p><?php
        
        _e( 'Keywords: ', 'designbriefs'); 
        
        the_tags( 
        	'', // before
        	', ', // separator
        	'' // after
        	); ?></p>
        
    <?php endif; ?>

</div><!-- .meta -->