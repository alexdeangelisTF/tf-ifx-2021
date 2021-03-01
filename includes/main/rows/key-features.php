<?php

$features = get_sub_field('features');

if ($features) {
	
	echo '<div class="ifx-row-wrapper">';

	echo '<div class="container">';
	echo '<div class="row">';
	echo '<div class="col-12">';

	echo '<div class="key-features__wrapper">';

	echo '<div class="row">';
	$featureCount = count($features);
	$columnWidth = 12 / $featureCount;
	foreach($features as $feature) {
		echo '<div class="col-12 col-sm-6 col-lg-' . $columnWidth . '">';
		echo '<div class="feature-single">';
		echo '<h2 class="blue-1">' . $feature['headline'] . '</h2>';
		echo '<h6 class="black-3">' . $feature['sub_headline'] . '</h6>';
		echo '</div>';
		echo '</div>';
	}
	echo '</div>';
	
	
	echo '</div>';

	echo '</div>';
	echo '</div>';
	echo '</div>';

	echo '</div>';
	
}

