<header class="site-header">
        
  <div class="wrapper">
  
  <h2 class="site-name"><a href="<?php echo esc_url( home_url() ); ?>"><?php bloginfo( 'name' ); ?></a></h2>
  
  <p class="toggle-menu" onclick="document.querySelector('body').classList.toggle('show-menu')"><?php _e( 'Menu', 'davis' ); ?></p>

  <?php if ( has_nav_menu( 'primary-menu' ) ) wp_nav_menu( array( 'theme_location' => 'primary-menu' ) ); ?>
  
  </div>

</header><!-- header -->