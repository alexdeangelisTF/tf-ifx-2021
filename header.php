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
			echo '<div class="container">';
			echo '<div class="row">';
			echo '<div class="col-12">';
			wp_nav_menu( 
				array(
					'theme_location' => 'main-menu'
				)
			);
			echo '</div>';
			echo '</div>';
			echo '</div>';
			echo '</header>';
				
				
			?>