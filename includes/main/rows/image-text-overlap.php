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

/*if ($layout == 'text_image') {
	$rowReverse = 'flex-md-row-reverse';
} else {
	$rowReverse = false;
}*/

echo '<div class="ifx-row-wrapper">';

echo '<div class="image-text-overlap__wrapper">';

echo '<div class="container">';
echo '<div class="row">';
echo '<div class="col-12 col-md-8">';
echo '<div class="image-text__image" style="background-image:url(' . wp_get_attachment_image_url($imageID, 'full') . ')">';
echo '</div>';
echo '</div>';

echo '<div class="col-12 col-md-7 introduction-wrapper">';
echo '<div class="image-text-overlap__introduction">';
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

echo '</div>';

echo '</div>';




