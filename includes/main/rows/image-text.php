<?php

$heading = get_sub_field('heading');
$layout = get_sub_field('layout');
$text = get_sub_field('text');
$imageID = get_sub_field('image');
$button = get_sub_field('button');
$preheader = get_sub_field('preheader');

if ($layout == 'text_image') {
	$rowReverse = 'flex-md-row-reverse';
} else {
	$rowReverse = false;
}

echo '<div class="ifx-row-wrapper">';

echo '<div class="container">';
echo '<div class="row ' . $rowReverse . '">';
echo '<div class="col-12 col-md-7 d-flex align-items-center">';
echo '<div class="image-text__image">';
echo  wp_get_attachment_image($imageID, 'full');
echo '</div>';
echo '</div>';
echo '<div class="col-12 col-md-5 d-flex align-items-center">';
echo '<div class="image-text__content">';
if ($preheader == 'text') {
	echo '<div class="image-text__content__preheader">';
	echo '<div class="image-text__content__preheader__' . $preheader . '">';
	if ($preheader == 'text') {
		$preheaderText = get_sub_field('preheader_text');
		echo '<div class="caps">' . $preheaderText . '</div>';
	} else {}
	echo '</div>';
	echo '</div>';
}
echo '<div class="image-text__content__heading">';
echo '<h2 class="weight-700">' . $heading . '</h2>';
echo '</div>';
echo '<div class="image-text__content__text">';
echo '<h5 class="black-3">' . $text . '</h5>';
echo '</div>';
if ($button) {
	echo '<div class="image-text__content__button">';
	echo '<a href="' . $button['url'] . '" class="button" target="' . $button['target'] . '">' . $button['title'] . '</a>';
	echo '</div>';
}
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';

echo '</div>';