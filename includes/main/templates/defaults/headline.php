<?php
$location = false;
$location = get_field('careers_location');

echo '<div class="page-headline page-single-career">';
echo '<div class="container">';
echo '<div class="row justify-content-md-center">';
echo '<div class="col-9 col-md-10">';

echo '<h1 class="weight-700">' . get_the_title() . '</h1>';
if ($location) {
	echo '<div class="caps">' . $location . '</div>';
}
echo crunchify_social_sharing_buttons();
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';