<?php

$heading = get_sub_field('heading');
$text = get_sub_field('text');
$button = get_sub_field('button');
$preheading = get_sub_field('preheading');

$text_colour = get_sub_field('text_colour');
$cardBackgroundType = get_sub_field('card_background_type');

if ($cardBackgroundType) {
	
	$cardBackgroundColour = get_sub_field('card_background_colour');
	$cardBackgroundImageID = get_sub_field('card_background_image');
	
	echo '<style>';
	echo '.ifx-row.ifx-row-cta_card.ifx-row-' . $rowCount . ' .cta-card__wrapper {';

	if ($cardBackgroundType == 'colour') {
		if ($cardBackgroundColour) {
			echo 'background:' . $cardBackgroundColour;
		} else {
			echo 'background:#ffffff';
		}
	} elseif ($cardBackgroundType == 'image') {
		
		if ($cardBackgroundImageID) {
			
			$cardBackgroundImage = wp_get_attachment_url($cardBackgroundImageID);
			if ($cardBackgroundColour) {
				echo 'background-color:' . $cardBackgroundColour . ';';
				echo 'background-image:url(' . $cardBackgroundImage . ');';
			} else {
				echo 'background-color:#ffffff;';
				echo 'background-image:url(' . $cardBackgroundImage . ');';
			}
			
		}
		
	} else {}
	
	echo '}';
	echo '</style>';

}

echo '<div class="ifx-row-wrapper">';
echo '<div class="container">';
echo '<div class="row">';

echo '<div class="col-12">';
echo '<div class="cta-card__wrapper ' . $cardBackgroundType . '">';

echo '<div class="row d-flex justify-content-md-center align-items-lg-center">';

if ($cardBackgroundType == 'video') {
	$cardBackgroundVideoID = get_sub_field('card_background_video');
	
	if ($cardBackgroundVideoID) {
		$cardBackgroundVideo = wp_get_attachment_url($cardBackgroundVideoID);
		
		echo '<video playsinline autoplay muted loop id="cta-card-video">';
		echo '<source src="' . $cardBackgroundVideo . '" type="video/mp4">';
		echo '</video>';
		
	}
	
}

echo '<div class="col-12 col-md-10 col-lg-6">';

echo '<div class="cta-card__content ' . $text_colour . '">';

if ($preheading) {
	echo '<div class="caps">' . $preheading . '</div>';
}
echo '<h2 class="weight-700">' . $heading . '</h2>';
echo '<h5>' . $text . '</h5>';

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
echo '</div>';