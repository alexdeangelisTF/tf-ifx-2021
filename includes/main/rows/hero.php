<?php

$heading = get_sub_field('heading');
$text = get_sub_field('text');
$imageID = get_sub_field('image');

echo '<div class="ifx-row-wrapper">';
echo '<div class="container">';
echo '<div class="row flex-lg-row-reverse">';

echo '<div class="col-12 col-md-6">';
if ($imageID) {
	$image = wp_get_attachment_image($imageID, 'full');
	echo $image;
}
echo '</div>';

echo '<div class="col-12 col-md-6">';
if ($heading) {
	echo '<h1 class="weight-700">';
	echo $heading;
	echo '</h1>';
}
if ($text) {
	echo '<h5>';
	echo $text;
	echo '</h5>';
}
echo '</div>';

echo '</div>';
echo '</div>';
echo '</div>';