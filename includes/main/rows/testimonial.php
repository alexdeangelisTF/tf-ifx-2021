<?php
$heading = false;
$heading = get_sub_field('heading');
$preheading = false;
$preheading = get_sub_field('preheading');
$text = false;
$text = get_sub_field('text');
$subheading = false;
$subheading = get_sub_field('subheading');

$variation = false;
$variation = get_sub_field('variation');

$imageID = false;
$imageID = get_sub_field('image');

$statistics = get_sub_field('statistics');

echo '<div class="ifx-row-wrapper">';

if ($statistics && $variation == 'type_2') {
	echo '<div class="container-fluid statistics-container">';
	echo '<div class="testimonial-statistics">';
	echo '<div class="row">';
	
	foreach($statistics as $statistic) {
		echo '<div class="col-12 col-md-4">';
		echo '<div class="statistics__single">';
		echo '<h2>' . $statistic['heading'] . '</h2>';
		echo '<h6>' . $statistic['subheading'] . '</h6>';
		echo '</div>';
		echo '</div>';
	}
	
	echo '</div>';
	echo '</div>';
	echo '</div>';
}

echo '<div class="container">';

echo '<div class="testimonial__wrapper">';

echo '<div class="row">';

echo '<div class="col-12">';

echo '<div class="testimonial testimonial-' . $variation . '">';

if ($imageID && $variation != 'type_2' && $variation != 'type_1') {
	echo '<div class="testimonial__image">';
	echo  wp_get_attachment_image($imageID, 'full');
	echo '</div>';
}
echo '<div class="testimonial__content">';
echo '<div class="testimonial__content__inner">';
if ($preheading) {
	echo '<div class="caps preheading">';
	echo $preheading;
	echo '</div>';
}
if ($heading) {
	echo '<h2 class="weight-700">';
	echo $heading;
	echo '</h2>';
}
echo '<hr>';
if ($text) {
	echo '<h5 class="black-3">';
	echo $text;
	echo '</h5>';
}
if ($subheading) {
	echo '<div class="caps black-4 subheading">';
	echo $subheading;
	echo '</div>';
}
echo '</div>';

if ($imageID && $variation == 'type_1') {
	echo '<div class="testimonial__content__image ratio" style="background-image:url(' . wp_get_attachment_url($imageID) . ')">';
	echo '<div class="content">';
	echo '</div>';
	//echo '<h3>Sample text</h3>';
	echo '</div>';
}

echo '</div>';

if ($variation == 'type_1') {
	$ctaText = get_sub_field('cta_text');
	$ctaButton = get_sub_field('cta_button');
	if ($ctaText) {
		echo '<div class="testimonial__cta">';
		echo '<h4>' . $ctaText . '</h4>';
		if ($ctaButton) {
			echo '<a href="' . $ctaButton['url'] . '" class="button" target="' . $ctaButton['target'] . '">' . $ctaButton['title'] . '</a>';
		}
		echo '</div>';
	}
}

echo '</div>';
echo '</div>';

echo '</div>';




echo '</div>';

echo '</div>';
echo '</div>';