<?php
$heading = false;
$heading = get_sub_field('heading');
$preheading = false;
$preheading = get_sub_field('preheading_text');

$rows = false;
$rows = get_sub_field('rows');

echo '<div class="ifx-row-wrapper">';
echo '<div class="container">';

echo '<div class="purchase-example__wrapper">';

echo '<div class="row">';
echo '<div class="col-12">';
echo '<div class="purchase-example__introduction">';
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
echo '</div>';
echo '</div>';
echo '</div>';

if ($rows) {
	
	echo '<div class="row">';
	echo '<div class="col-12">';
	
	foreach($rows as $row) {
		
		// Check if header & preheading exist
		// If both don't exist, hide the heading col & expand the text col
		
		if ($row['preheading'] || $row['heading']) {
			$textCol = 'col-md-6';
			$headingCol = 'd-block';
			$purchaseCol = 'col-md-2';
		} else {
			$textCol = 'col-md-7';
			$headingCol = 'd-none';
			$purchaseCol = 'col-md-4';
		}
		
		
		echo '<div class="purchase-example__single">';
		echo '<div class="row align-items-center">';
		
		echo '<div class="col-12 col-md-1">';
		echo '<div class="purchase-example__single__icon">';
		echo wp_get_attachment_image($row['icon'], 'medium');
		echo '</div>';
		echo '</div>';
		
		echo '<div class="col-12 col-md-3 ' . $headingCol . '">';
		echo '<div class="purchase-example__single__heading">';
		echo '<div class="caps">' . $row['preheading'] . '</div>';
		echo '<h5 class="weight-700">' . $row['heading'] . '</h5>';
		echo '</div>';
		echo '</div>';
		
		echo '<div class="col-12 ' . $textCol . '">';
		echo '<div class="purchase-example__single__text">';
		echo '<h6 class="black-3">' . $row['text'] . '</h6>';
		echo '</div>';
		echo '</div>';
		
		echo '<div class="col-12 ' . $purchaseCol . '">';
		echo '<div class="purchase-example__single__price">';
		if ($row['price_preheading']) {
			echo '<div class="caps">' . $row['price_preheading'] . '</div>';
		}
		echo '<h3>' . $row['price'] . '</h3>';
		echo '</div>';
		echo '</div>';
		
		echo '</div>';
		echo '</div>';
		
	}
	
	echo '</div>';
	echo '</div>';
	
}

echo '</div>';

echo '</div>';
echo '</div>';