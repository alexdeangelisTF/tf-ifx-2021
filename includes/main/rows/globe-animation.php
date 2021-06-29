<?php
$heading = false;
$heading = get_sub_field('heading');
$text = false;
$text = get_sub_field('text');
$preheading = false;
$preheading = get_sub_field('preheading');
$mediaType = false;
$mediaType = get_sub_field('media_type');

echo '<div class="ifx-row-wrapper">';
echo '<div class="container">';
echo '<div class="row">';

echo '<div class="col-12">';
echo '<div class="globe-animation__wrapper">';

echo '<div class="row d-flex justify-content-center">';
echo '<div class="col-12 col-lg-6">';

echo '<div class="globe-animation__introduction">';

if ($preheading) {
	echo '<div class="caps">' . $preheading . '</div>';
}
echo '<h2 class="weight-700">' . $heading . '</h2>';
echo '<h5>' . $text . '</h5>';

echo '</div>';

echo '</div>';
echo '</div>';

if ($mediaType) {
	echo '<div class="row justify-content-lg-center">';
	echo '<div class="col-12 col-lg-8">';
	echo '<div class="globe-animation__media">';

	if ($mediaType == 'image') {
		$imageID = false;
		$imageID = get_sub_field('image');
		echo wp_get_attachment_image($imageID, 'full');
	} elseif ($mediaType == 'video') {
		$videoID = false;
		$videoID = get_sub_field('video');
		$video = false;
		$video = wp_get_attachment_url($videoID);
		
		echo '<video playsinline autoplay muted loop id="globe-animation-video">';
		echo '<source src="' . $video . '" type="video/mp4">';
		echo '</video>';
		
	} else {}
	echo '</div>';
	echo '</div>';
	echo '</div>';
}

echo '</div>';
echo '</div>';

echo '</div>';
echo '</div>';
echo '</div>';