<!doctype html>
<html <?php language_attributes(); ?> class="no-js no-svg">
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<?php wp_head(); ?>
		
		<?php
		// Get the custom icons
		$icons = false;
		$icons = get_field('icons','option');
		if ($icons) {
			echo '<style>';
			foreach($icons as $icon) {
				echo 'ul li.' . $icon['class_name'] . ' a:before {';
				echo 'background-image: url("' . wp_get_attachment_url($icon['icon_image']) . '");';
				echo '}';
				
			}
			echo '</style>';
		}
		
		?>
	</head>

	<body <?php body_class(); ?>>

		<?php

		echo '<header>';

		echo '<div class="mobile-menu-dropdown">';
		wp_nav_menu( 
			array( 
				'theme_location' => 'main-menu-mobile' 
			) 
		);

		echo '<button class="mobile-close" type="button">';
		echo '<span class="sr-only">Close navigation</span>';
		echo '<span class="icon-bar top-bar"></span>';
		echo '<span class="icon-bar middle-bar"></span>';
		echo '<span class="icon-bar bottom-bar"></span>';
		echo '</button>';

		echo '</div>';

		echo '<nav class="navbar navbar-expand-lg" role="navigation">';
		echo '<div class="container">';
		echo '<div class="mobile-header d-lg-none">';
		// Hide this logo on desktop
		echo '<div class="logo d-lg-none">';
		echo '<a href="' . get_site_url() . '">';
		echo '<img src="' . get_template_directory_uri() . '/img/ifx-logo.svg" class="black">';
		echo '<img src="' . get_template_directory_uri() . '/img/ifx-logo-white.svg" class="white">';
		echo '</a>';
		echo '</div>';
		echo '<button class="navbar-toggler" type="button">';
		echo '<span class="sr-only">Toggle navigation</span>';
		echo '<span class="icon-bar top-bar"></span>';
		echo '<span class="icon-bar middle-bar"></span>';
		echo '<span class="icon-bar bottom-bar"></span>';
		echo '</button>';
		echo '</div>';

		echo '<div class="menu-wrapper d-none d-lg-block d-xl-block">';
		echo '<div class="d-lg-flex align-content-lg-center collapse navbar-collapse" id="ifx-navbar-collapse">';
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
		// Hide this logo on mobile/tablet
		echo '<div class="logo d-none d-lg-block">';
		echo '<a href="' . get_site_url() . '">';
		echo '<img src="' . get_template_directory_uri() . '/img/ifx-logo.svg" class="black">';
		echo '<img src="' . get_template_directory_uri() . '/img/ifx-logo-white.svg" class="white">';
		echo '</a>';
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