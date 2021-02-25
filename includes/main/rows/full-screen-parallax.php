<?php

$imageID = false;
$imageID = get_sub_field('image');

$imageHeight = false;
$imageHeight = get_sub_field('image_height');

// If an image height has not been specified, set it to 100
if (!$imageHeight) {
	$imageHeight = '100';
}

if ($imageID && $imageHeight) {
	
	$image = wp_get_attachment_url($imageID, 'full');
	
	echo '<div class="ifx-row-wrapper">';

	echo '<div class="full-screen-parallax__wrapper" style="background-image:url(' . $image . '); height:' . $imageHeight . 'vh;">';
	
	echo '</div>';

	echo '</div>';
}

?>