<?php
$preheading = false;
$preheading = get_sub_field('preheading');
$heading = false;
$heading = get_sub_field('heading');
$text = false;
$text = get_sub_field('text');
$button = false;
$button = get_sub_field('button');
$features = false;
$features = get_sub_field('features');
$extraBox = false;
$extraBox = get_sub_field('extra_box');

echo '<div class="ifx-row-wrapper">';
echo '<div class="container">';

echo '<div class="text-features__wrapper">';

echo '<div class="row align-items-lg-center justify-content-lg-between">';
echo '<div class="col-12 col-lg-6">';

echo '<div class="text-features__introduction">';
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
	echo '<h5 class="black-3">' . $text . '</h5>';
}
if ($button) {
	echo '<a href="' . $button['url'] . '" class="button" target="' . $button['target'] . '">' . $button['title'] . '</a>';
}
echo '</div>';

echo '</div>';

if ($features) {
	$featureWidth = false;
	$featureWidth = get_sub_field('feature_width');
	echo '<div class="col-12 col-lg-5">';
	echo '<div class="feature__wrapper width_' . $featureWidth . '">';
	
	foreach($features as $feature) {
		$featureTitle = $feature['title'];
		$featureText = $feature['text'];
		$featureIconID = $feature['icon'];
		
		echo '<div class="feature__single d-md-flex">';
		if ($featureWidth == 'column_1') {
			echo '<div class="feature__single__image">';
			echo wp_get_attachment_image($featureIconID, 'medium');
			echo '</div>';
		}
		echo '<div class="feature__single__content">';
		echo '<h4>' . $featureTitle . '</h4>';
		echo '<h6 class="black-3">' . $featureText . '</h6>';
		echo '</div>';
		echo '</div>';
		
	}
	
	echo '</div>';
	echo '</div>';
}

echo '</div>';

if ($extraBox) {
	
	$boxPreheading = get_sub_field('box_preheading');
	$boxSubheading = get_sub_field('box_subheading');
	$boxHeading = get_sub_field('box_heading');
	$boxText = get_sub_field('box_text');
	$boxImageID = get_sub_field('box_image');
	
	echo '<div class="row">';
	echo '<div class="col-12">';

	echo '<div class="text-feature__box">';

	echo '<div class="row flex-md-row-reverse">';
	
	echo '<div class="col-12 col-md-6">';
	echo '<div class="text-feature__image" style="background-image:url(' . wp_get_attachment_url($boxImageID) . ')">';
	echo '</div>';
	echo '</div>';
	
	echo '<div class="col-12 col-md-6">';
	echo '<div class="text-feature__content">';
	
	if ($boxPreheading) {
		echo '<div class="caps">';
		echo $boxPreheading;
		echo '</div>';
	}
	if ($boxHeading) {
		echo '<h4>' . $boxHeading . '</h4>';
	}
	echo '<hr>';
	if ($boxText) {
		echo '<h5 class="black-3">' . $boxText . '</h5>';
	}
	if ($boxSubheading) {
		echo '<div class="caps">';
		echo $boxSubheading;
		echo '</div>';
	}
	
	echo '</div>';
	echo '</div>';
	
	echo '</div>'; //row

	echo '</div>'; //box

	echo '</div>'; // col-12
	echo '</div>'; //row
}

echo '</div>';

echo '</div>';
echo '</div>';