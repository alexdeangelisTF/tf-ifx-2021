<?php

// Get Desktop Images
$imageID = false;
$imageID = get_sub_field('image');
$imageHeight = false;
$imageHeight = get_sub_field('image_height');

// Get Mobile Images
$imageMobileID = false;
$imageMobileID = get_sub_field('image_mobile');
$imageMobileHeight = false;
$imageMobileHeight = get_sub_field('image_mobile_height');

// If we have a desktop image, show the row
if ($imageID) {

	// ifx-row-' . $rowCount
	echo '<style>';
	echo '.ifx-row-' . $rowCount . ' .full-screen-parallax__wrapper {';
	echo 'background-image:url(' . wp_get_attachment_url($imageID, 'full') . ');';
	echo 'height:' . $imageHeight . 'vh;';
	echo '}';
	if ($imageMobileID) {
		// If we have a mobile image, we need to add an extra style here
		echo '@media (max-width:767px) {';
		echo '.ifx-row-' . $rowCount . ' .full-screen-parallax__wrapper {';
		echo 'background-image:url(' . wp_get_attachment_url($imageMobileID, 'full') . ');';
		echo 'height:' . $imageMobileHeight . 'vh;';
		echo '}';
		echo '}';
	}
	echo '</style>';


	echo '<div class="ifx-row-wrapper">';
	echo '<div class="full-screen-parallax__wrapper">';
	echo '</div>';
	echo '</div>';

}

?>