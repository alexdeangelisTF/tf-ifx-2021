<?php
$heading = false;
$heading = get_sub_field('heading');
$preheading = false;
$preheading = get_sub_field('preheading');
$text = false;
$text = get_sub_field('text');

$directors = false;
$directors = get_sub_field('directors');

echo '<div class="ifx-row-wrapper">';
echo '<div class="container">';

echo '<div class="directors__wrapper">';

echo '<div class="row justify-content-center">';
echo '<div class="col-10 col-lg-6">';
echo '<div class="directors__introduction">';
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
echo '</div>';
echo '</div>';
echo '</div>';

echo '<div class="row directors-row justify-content-md-center">';

foreach($directors as $director) {
	echo '<div class="col-12 col-md-6 col-lg-4">';
	if ($director['link']) {
		echo '<a href="https://' . $director['link'] . '" target="_blank">';
	}
	echo '<div class="director-single">';
	echo  wp_get_attachment_image($director['image'], 'full');
	echo '<h4>' . $director['name'] . '</h4>';
	echo '<div class="caps">' . $director['role'] . '</div>';
	echo '<h6 class="black-3">' . $director['text'] . '</h6>';
	echo '</div>';
	echo '</div>';
	if ($director['link']) {
		echo '</a>';
	}
}

echo '</div>';

echo '</div>';

echo '</div>';
echo '</div>';