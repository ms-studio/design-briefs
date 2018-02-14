<?php

/*
 * Display Post Content
*/



if ( is_singular() ) {

	?>
	
	<h1 class="title"><?php the_title(); ?></h1>
	
	<?php

} else {

	?>
	
	<h1 class="title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
	
	<?php

}

if ( has_post_thumbnail() ) { ?>

    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="featured-image">
        <?php the_post_thumbnail( 'post-image' ); ?>    
    </a>
    
<?php }


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


