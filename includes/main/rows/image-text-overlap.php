<?php
$heading = false;
$heading = get_sub_field('heading');
$layout = false;
$layout = get_sub_field('layout');
$text = false;
$text = get_sub_field('text');
$imageID = false;
$imageID = get_sub_field('image');
$button = false;
$button = get_sub_field('button');
$preheading = false;
$preheading = get_sub_field('preheading');

if ($layout == 'text_image') {
	$rowReverse = 'rtl';
} else {
	$rowReverse = false;
}

echo '<div class="ifx-row-wrapper">';

echo '<div class="image-text-overlap__wrapper">';

echo '<div class="container">';
echo '<div class="row">';
echo '<div class="col-12 col-image">';

echo '<div class="image-text-overlap__container ' . $rowReverse . '">';

echo '<div class="one d-flex justify-content-end" style="background-image:url(' . wp_get_attachment_url($imageID) . ')">';

echo '<div class="two d-none d-md-block">';

echo '<div class="two-content">';

/* Introduction */
echo '<div class="image-text-overlap__introduction">';
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
	echo '<h5 class="black-3">';
	echo $text;
	echo '</h5>';
}

if ($button) {
	echo '<a href="' . $button['url'] . '" class="button" target="' . $button['target'] . '">' . $button['title'] . '</a>';
}

echo '</div>';


echo '</div>';

echo '</div>';

echo '</div>';

echo '</div>';

echo '</div>';

echo '<div class="col-12 d-md-none d-lg-none d-xl-none">';
echo '<div class="two-content two-content-mobile">';
/* Introduction */
echo '<div class="image-text-overlap__introduction">';
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
	echo '<h5 class="black-3">';
	echo $text;
	echo '</h5>';
}
if ($button) {
	echo '<a href="' . $button['url'] . '" class="button" target="' . $button['target'] . '">' . $button['title'] . '</a>';
}
echo '</div>';

echo '</div>';
echo '</div>';

echo '</div>';

echo '</div>';