<?php
$heading = false;
$heading = get_sub_field('heading');
$preheading = false;
$preheading = get_sub_field('preheading');
$tiles = false;
$tiles = get_sub_field('tiles');

echo '<div class="ifx-row-wrapper">';
echo '<div class="container">';

echo '<div class="tiles__wrapper">';

echo '<div class="row">';
echo '<div class="col-12">';
echo '<div class="tiles__introduction">';
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
echo '</div>';
echo '</div>';
echo '</div>';

if ($tiles) {
	$tilesCount = count($tiles);
	$colWidth = 12 / $tilesCount;
	echo '<div class="row">';
	foreach($tiles as $tile) {
		echo '<div class="col-12 col-md-' . $colWidth . ' d-md-flex">';
		echo '<div class="tile d-md-flex flex-md-column">';
		echo '<div class="tile__images">';
		if ($tile['image']) {
			echo '<div class="tile__image">';
			// Check if the image is svg
			$imageURL = false;
			$imageURL = wp_get_attachment_image_url($tile['image']);
			$imageExt = false;
			$imageExt = substr($imageURL, strrpos($imageURL, '.') + 1);
			if ($imageExt == 'svg') {
				echo file_get_contents($imageURL);
			} else {
				echo wp_get_attachment_image($tile['mimage'], 'medium');
			}
			echo '</div>';
		}
		echo '</div>';
		echo '<div class="tile__content">';
		if ($tile['heading']) {
			echo '<h4 class="weight-700">' . $tile['heading'] . '</h4>';
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
echo '</div>';