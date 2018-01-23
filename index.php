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
			<div class="wrapper">
				
						<?php 
						// Title for archive pages
						if ( is_archive() ) {
						    get_template_part( 'template-parts/archive-title' );
						}
						
						 ?>

            <?php if ( have_posts() )  : 

                while ( have_posts() ) : the_post(); ?>

                    <div <?php post_class( 'post' ); ?>>

                      <h1 class="title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>

                      <?php 
                        
                        if ( has_post_thumbnail() ) : ?>
                        
                            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="featured-image">
                                <?php the_post_thumbnail( 'post-image' ); ?>    
                            </a>
                            
                        <?php endif; 
                        
                        echo '<div class="meta-content">';
                        
                        if ( get_post_type() == 'post' ) {
                        			
                        		get_template_part( 'template-parts/meta' );
                        			
                        	}
                        
                        ?>

                        <div class="content">
													<h2 class="description"><?php  
													_e( 'Description', 'designbriefs'); 
													?></h2>

                            <?php the_content(); ?>

                        		</div><!-- .content -->
												</div><!-- .meta+content -->

                        <?php 
                        
                        if ( is_singular() ) wp_link_pages();

                        if ( is_singular() ) comments_template(); ?>

                    </div><!-- .post -->

                    <?php 
                
                endwhile;

            else : ?>

                <div class="post">

                    <p><?php _e( 'Sorry, the page you requested cannot be found.', 'davis' ); ?></p>

                </div><!-- .post -->

            <?php endif;
            
            if ( ( ! is_singular() ) && ( $wp_query->post_count >= get_option( 'posts_per_page' ) ) ) : ?>
	        
		        <div class="pagination">
			        
					<?php previous_posts_link( '&larr; ' . __( 'Newer posts', 'davis' ) ); ?>
					<?php next_posts_link( __( 'Older posts', 'davis') . ' &rarr;' ); ?>
					
		        </div><!-- .pagination -->
	        
	        <?php endif; ?>
	        

	    	</div><!-- .wrapper -->
	    </div><!-- .container -->
			
		<?php get_footer(); ?>
	    	    
	  <?php wp_footer(); ?>
	        
	</body>
</html>