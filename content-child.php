<?php

/*
 * Display Sub-Post Content
*/

$args = array(
	    'post_type'      => 'post',
	    'posts_per_page' => -1,
	    'post_parent'    => $post->ID,
	    'order'          => 'ASC',
	    'orderby'        => 'date'
	 );
	
	$children = new WP_Query( $args );
	
	$children_count = $children->post_count;
		
	if ( $children->have_posts() ) : ?>
	
	<?php 
	
	// Define counter:
	$post_count = 1;
	
	 ?>
		
	<section class="child-posts">
		<header class="child-posts-header">
			<h1 class="wrapper"><?php
			
			echo sprintf( _n( '%s report for ', '%s reports for ', $children_count, 'designbriefs' ), $children_count );
						
			the_title(); 
			 
			?></h1>
		</header>
		
		<div class="wrapper">
	
	    <?php while ( $children->have_posts() ) : $children->the_post(); ?>
	
	        <article id="parent-<?php the_ID(); ?>" class="child-post">
	
						<h2><?php 
						
						echo '#'.$post_count.' &ndash; ';
						
						$post_count++;
						
						the_title(); 
						
						// if user is admin
						if ( current_user_can( 'publish_posts' ) ) {
							echo '&nbsp;';
							edit_post_link('🖋️');
						}
						
						 ?></h2>
	
	            <div class="content"><?php the_content(); ?></div>
	
	        </article>
	
	    <?php endwhile; ?>
			
		</div>
			
	</section>
			
			
			
	
	<?php endif; 
	wp_reset_postdata(); 
