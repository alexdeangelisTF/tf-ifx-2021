<?php

$heading = get_sub_field('heading');
$layout = get_sub_field('layout');
$text = get_sub_field('text');
$imageID = get_sub_field('image');
$button = get_sub_field('button');
$preheading = get_sub_field('preheading');

if ($layout == 'text_image') {
	$rowReverse = 'flex-md-row-reverse';
} else {
	$rowReverse = false;
}

echo '<div class="ifx-row-wrapper ' . $layout . '">';

echo '<div class="container">';
echo '<div class="row ' . $rowReverse . '">';
echo '<div class="col-12 col-md-6 col-lg-7 d-flex align-items-center">';
echo '<div class="image-text__image">';
echo  wp_get_attachment_image($imageID, 'full');
echo '</div>';
echo '</div>';
echo '<div class="col-12 col-md-6 col-lg-5 d-flex align-items-center">';
echo '<div class="image-text__introduction">';
if ($preheading) {
	echo '<div class="caps">' . $preheading . '</div>';
}
echo '<h2 class="weight-700">' . $heading . '</h2>';
echo '<h5 class="black-3">' . $text . '</h5>';

if ($button) {
	echo '<a href="' . $button['url'] . '" class="button" target="' . $button['target'] . '">' . $button['title'] . '</a>';
}
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';

echo '</div>';