<?php 

$themeURL = get_template_directory_uri();

?>

<!doctype html>
<html <?php language_attributes(); ?> class="no-js no-svg">
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <?php wp_head(); ?>

    </head>
    
    <body <?php body_class(); ?>>
			
			<?php
			
			echo '<header>';
			echo '<nav class="navbar navbar-expand-lg" role="navigation">';
			echo '<div class="container">';
			echo '<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#ifx-navbar-collapse" aria-controls="bs-example-navbar-collapse" aria-expanded="false">';
			echo '<span class="sr-only">Toggle navigation</span>';
			echo '<span class="icon-bar top-bar"></span>';
			echo '<span class="icon-bar middle-bar"></span>';
			echo '<span class="icon-bar bottom-bar"></span>';
			echo '</button>';
			echo '<div class="row">';
			echo '<div class="col-12 d-lg-flex justify-content-lg-between align-content-lg-center collapse navbar-collapse" id="ifx-navbar-collapse">';
			echo '<div class="ifx-main-menu d-lg-flex">';
			wp_nav_menu( 
				array(
					'theme_location' => 'main-menu',
					'depth'           => 2,
					'container'       => 'div',
					'container_class' => '',
					'container_id'    => 'bs-example-navbar-collapse-1',
					'menu_class'      => 'nav navbar-nav',
					'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
					'walker'          => new WP_Bootstrap_Navwalker(),
				)
			);
			echo '</div>';
			echo '<div class="ifx-right-menu">';
			wp_nav_menu( 
				array(
					'theme_location' => 'main-menu-right',
					'depth'           => 1,
					'container'       => 'div',
					'container_class' => '',
					'container_id'    => 'bs-example-navbar-collapse-2',
					'menu_class'      => 'nav navbar-nav',
					'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
					'walker'          => new WP_Bootstrap_Navwalker(),
				)
			);
			echo '</div>';
			echo '</div>';
			echo '</div>';
			echo '</div>';
			echo '</header>';
			?>