<?php

echo '<div class="ifx-row-wrapper">';

echo '<div class="container">';
echo '<div class="row">';
echo '<div class="col-12">';

echo '<div class="logo-gallery__wrapper">';

//var_dump();
$imageGallery = get_sub_field('image_gallery');
foreach( $imageGallery as $imageID) {
	echo '<div class="logo-gallery__single">';
	echo wp_get_attachment_image($imageID, 'large');
	echo '</div>';
}

echo '</div>';

echo '</div>';
echo '</div>';
echo '</div>';

echo '</div>';