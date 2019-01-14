<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
	<head>
		
		<meta http-equiv="content-type" content="<?php bloginfo( 'html_type' ); ?>" charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" >
        
    <link rel="profile" href="http://gmpg.org/xfn/11">
		 
		<?php wp_head(); ?>
	
	</head>
	
	<body <?php body_class(); ?>>
		
		<a class="skip-link screen-reader-text" href="#site-content"><?php _e( 'Skip to the content', 'koji' ); ?></a>
				<a class="skip-link screen-reader-text" href="#menu-menu"><?php _e( 'Skip to the main menu', 'koji' ); ?></a>
    
		<header class="site-header" role="banner">
	        
		  <div class="wrapper">
		  
			  <h1 class="site-name site-title"><a href="<?php echo esc_url( home_url() ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
			  
			  <button type="button" class="toggle-menu" onclick="document.querySelector('body').classList.toggle('show-menu')"><?php _e( 'Menu', 'davis' ); ?></button>
			
			  <?php if ( has_nav_menu( 'primary-menu' ) ) : ?> 
			  
  				<nav role="navigation">
  					<?php wp_nav_menu( array( 'theme_location' => 'primary-menu' ) ); ?>
  				</nav>
			  
			  <?php endif; ?>
		  
		  </div>

		</header><!-- header -->