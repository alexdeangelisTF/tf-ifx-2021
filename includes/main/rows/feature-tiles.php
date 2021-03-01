<?php

echo '<div class="background-shape">';
echo '</div>';

$heading = get_sub_field('heading');
$preheading = get_sub_field('preheading');
$text = get_sub_field('text');
$tiles = get_sub_field('tiles');

echo '<div class="ifx-row-wrapper">';
echo '<div class="container">';
echo '<div class="row">';
echo '<div class="col-12 col-md-5">';
echo '<div class="feature-tiles__introduction">';
if ($preheading) {
	echo '<div class="caps">';
	echo $preheading;
	echo '</div>';
}
if ($heading) {
	echo '<h2 class="weight-700">';
	echo $heading;
	echo '</h2>';
}
if ($text) {
	echo '<h5>' . $text . '</h5>';
}
echo '</div>';
echo '</div>';
echo '</div>';
if ($tiles) {
	echo '<div class="row">';
	foreach($tiles as $tile) {
		echo '<div class="col-12 col-md-6 d-md-flex">';
		echo '<div class="feature-tile d-md-flex flex-md-column">';
		echo '<div class="feature-tile__images flex-md-grow-1 d-md-flex justify-content-md-center align-items-md-center">';
		if ($tile['mobile_image']) {
			echo '<div class="feature-tile__mobile-image d-md-none">';
			echo wp_get_attachment_image($tile['mobile_image'], 'medium');
			echo '</div>';
		}
		if ($tile['desktop_image']) {
			echo '<div class="feature-tile__desktop-image d-none d-md-block">';
			echo wp_get_attachment_image($tile['desktop_image'], 'full');
			echo '</div>';
		}
		echo '</div>';
		echo '<div class="feature-tile__content">';
		if ($tile['heading']) {
			echo '<h3 class="weight-700">' . $tile['heading'] . '</h3>';
		}
		if ($tile['text']) {
			echo '<h6 class="black-3">' . $tile['text'] . '</h6>';
		}
		echo '</div>';
		echo '</div>';
		echo '</div>';
	}
	echo '</div>';
}
echo '</div>';
echo '</div>';