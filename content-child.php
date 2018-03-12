<?php

/*
 * Display Sub-Post Content
*/

$args = array(
	    'post_type'      => 'post',
	    'posts_per_page' => -1,
	    'post_parent'    => $post->ID,
	    'order'          => 'ASC',
	    'orderby'        => 'menu_order'
	 );
	
	$children = new WP_Query( $args );
	
	if ( $children->have_posts() ) : ?>
		
	<section class="child-posts">
		<header class="child-posts-header">
			<h1 class="wrapper"><?php
			
			_e( 'reports for  ', 'designbriefs');
			
			the_title(); 
			 
			?></h1>
		</header>
		
		<div class="wrapper">
	
	    <?php while ( $children->have_posts() ) : $children->the_post(); ?>
	
	        <article id="parent-<?php the_ID(); ?>" class="child-post">
	
	<h2><?php the_title(); ?> <?php 
	
	// if user is admin
	if ( current_user_can( 'publish_posts' ) ) {

		edit_post_link('🖋️', '', '');
		
	}
	
	 ?></h2>
	
	            <div class="content"><?php the_content(); ?></div>
	
	        </article>
	
	    <?php endwhile; ?>
			
		</div>
			
	</section>
			
			
			
	
	<?php endif; 
	wp_reset_postdata(); 
