<?php
/**
 * Template Name: Keywords
 *
 * Description: List of keywords (tags)
 *
 * @package WordPress
 * @subpackage Pictonet
 */

get_header(); ?>
		
		<div class="container">
			
      <?php if ( have_posts() )  : 

          while ( have_posts() ) : the_post(); ?>

              <div <?php post_class( 'post' ); ?>>
								
								<div class="wrapper">
									
									
                
                <?php 
                  
                 	get_template_part( 'content' );
                 
                ?>
								
								<div class="post-tags meta-content">
									<div class="content">
									
										<br/>
								<?php 
								
								// Produce a list of all existing Tags
								
								$tags = get_tags();
								
								$html = '';
								
								$counter = 1;
								
								foreach ( $tags as $tag ) {
									
									$tag_link = get_tag_link( $tag->term_id );
											
									$html .= "<a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug}'>";
									$html .= "{$tag->name}</a>";
									
									if ( $counter === count($tags) ) {
										// echo 'LAST';
									
									} else {
										$html .= ', ';
									}
									
									$counter++;
								
								}

								echo $html;
								  
								  ?>
										</div>
									</div><!-- .meta-content -->
								</div><!-- .wrapper -->
                  
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