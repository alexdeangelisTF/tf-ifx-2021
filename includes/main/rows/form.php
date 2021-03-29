<?php
$heading = false;
$heading = get_sub_field('heading');
$preheading = false;
$preheading = get_sub_field('preheading');
$text = false;
$text = get_sub_field('text');

$formID = false;
$formID = get_sub_field('form');

echo '<div class="ifx-row-wrapper">';
echo '<div class="container">';

echo '<div class="form__wrapper">';

echo '<div class="row justify-content-lg-between">';

echo '<div class="col-12 col-md-8 col-lg-5">';
echo '<div class="form__introduction">';
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

if ($formID) {
	echo '<div class="col-12 col-lg-6">';
	echo '<div class="form__single">';
	gravity_form(
			$formID, //The ID of the form
			$display_title = false,
			$display_description = false,
			$display_inactive = false,
			$field_values = null,
			$ajax = false,
			//$tabindex,
			$echo = true
	);
	echo '</div>';
	echo '</div>';
}


echo '</div>';

echo '</div>';

echo '</div>';
echo '</div>';