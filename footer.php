<?php

echo '<footer>';
echo '<div class="container">';
echo '<div class="row">';
echo '<div class="col-12 col-lg-4">';
echo '<div class="logo">';
echo '<a href="' . get_site_url() . '">';
echo '<img src="https://via.placeholder.com/88x108">';
echo '</a>';
echo '</div>';
echo '</div>';
echo '<div class="col-12 col-lg-8">';
echo '<div class="row">';

$menus = array(
	'menu-footer-company',
	'menu-footer-solutions',
	'menu-footer-markets',
	'menu-footer-legal',
);

foreach($menus as $menu) {
	echo '<div class="col-6 col-lg-3">';
	$menuName = wp_get_nav_menu_name($menu);
	echo '<h5>';
	echo $menuName;
	echo '</h5>';
	wp_nav_menu( 
		array(
			'theme_location' => $menu,
		)
	);
	echo '</div>';
}

echo '</div>';
echo '</div>';
echo '</div>';

echo '<div class="row">';
echo '<div class="col-6">';
echo '<div class="copyright">';
echo '<h6 class="black-3">';
echo '&copy; ' . date("Y") . ' IFX (UK) Ltd';
echo '</h6>';
echo '</div>';
echo '</div>';
echo '<div class="col-6">';
echo '<div class="row">';
echo '<div class="col-12 col-lg-4 offset-lg-8">';
// Include Social part
include __DIR__ . '/includes/footer/social.php';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';

echo '</div>';
echo '</footer>';

wp_footer();

echo '</body>';
echo '</html>';