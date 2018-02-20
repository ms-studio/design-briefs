<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>
		
		<meta http-equiv="content-type" content="<?php bloginfo( 'html_type' ); ?>" charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" >
        
        <link rel="profile" href="http://gmpg.org/xfn/11">
		 
		<?php wp_head(); ?>
	
	</head>
	
	<body <?php body_class(); ?>>
    
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
                  	
                  };
                  
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