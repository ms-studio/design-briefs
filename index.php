<?php get_header(); ?>
		
		<div class="container">
				
			<?php 
			
			// Title for archive pages
			if ( is_archive() ) {
			
					echo '<div class="wrapper title-wrapper">';
			    get_template_part( 'template-parts/archive-title' );
			    
			    echo '</div><!-- .wrapper -->';
			}
			
			 ?>
			
      <?php if ( have_posts() )  : 

          while ( have_posts() ) : the_post(); ?>

              <div <?php post_class( 'post' ); ?>>
								
								<div class="wrapper">
                
                <?php 
                  
                 	get_template_part( 'content' );
                 
                ?>
								
								</div><!-- .wrapper -->
                  
								<?php 
                  if ( is_singular() ) {
                  
                  		// test for child-posts
                  		
                  		get_template_part( 'content', 'child' );
                  	
                  } else {
                  
                  		get_template_part( 'content', 'child' );
                  		
                  }
                  
                  ?>

              </div><!-- .post -->

              <?php 
          
          endwhile;

      else : ?>

          <div class="wrapper">

              <p><?php _e( 'Sorry, the page you requested cannot be found.', 'davis' ); ?></p>

          </div><!-- .post -->

      <?php endif; ?>

			
    </div><!-- .container -->
			
		<?php get_footer(); ?>
	    	    
	  <?php wp_footer(); ?>
	        
	</body>
</html>