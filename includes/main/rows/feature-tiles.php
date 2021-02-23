<?php

$heading = get_sub_field('heading');
$preheading = get_sub_field('preheading');
$introductionText = get_sub_field('introduction_text');
$tiles = get_sub_field('tiles');

echo '<div class="ifx-row-wrapper">';
echo '<div class="container">';
echo '<div class="row">';
echo '<div class="col-12 col-md-6">';
echo '<div class="feature-tiles__introduction">';
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
if ($introductionText) {
	echo '<h5 class="black-3">';
	echo $introductionText;
	echo '</h5>';
}
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';