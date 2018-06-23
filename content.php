<?php

/*
 * Display Post Content
*/



if ( is_singular() ) {

	?>
	
	<h1 class="title"><?php the_title(); 
	
	// if user is admin
	if ( current_user_can( 'publish_posts' ) ) {
		echo '&nbsp;';
		edit_post_link('🖋️');
	}
	
	?></h1>
	
	<?php

} else {

	?>
	
	<h1 class="title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a><?php 
	
	// if user is admin
	if ( current_user_can( 'publish_posts' ) ) {
		echo '&nbsp;';
		edit_post_link('🖋️');
	}
	
	 ?></h1>
	
	<?php

}

if ( has_post_thumbnail() ) { ?>

    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="featured-image">
        <?php the_post_thumbnail( 'post-image' ); ?>    
    </a>
    
<?php }


echo '<div class="meta-content">'; // Meta + Content.
                        
if ( get_post_type() == 'post' ) {
			
		get_template_part( 'template-parts/meta' );
}

?>

<div class="content">
		<?php 
		
		if ( get_post_type() == 'post' ) {
		
			echo '<h2 class="description">';
			_e( 'Description', 'designbriefs'); 
			echo '</h2>';
		
		}
		
			the_content(); ?>

		</div><!-- .content -->
</div><!-- .meta+content -->

<?php


