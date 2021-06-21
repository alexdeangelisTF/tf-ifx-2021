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
	echo '<div class="col-12 col-md-6 col-lg-4 d-none d-md-block d-lg-block d-xl-block">';
	if ($director['link']) {
		echo '<a href="https://' . $director['link'] . '" target="_blank">';
	}
	echo '<div class="director-single">';
	echo  wp_get_attachment_image($director['image'], 'full');
	echo '<h4>' . $director['name'] . '</h4>';
	echo '<div class="caps">' . $director['role'] . '</div>';
	echo '<h6 class="black-3">' . $director['text'] . '</h6>';
	echo '</div>';
	if ($director['link']) {
		echo '</a>';
	}
	echo '</div>';
}

if ($directors) {
	echo '<div class="glide__track d-md-none d-lg-none d-xl-none" data-glide-el="track">';
	echo '<ul class="glide__slides">';
	foreach($directors as $director) {
		
		echo '<div class="glide__slide">';
		echo '<div class="director-single">';
		if ($director['link']) {
			echo '<a href="https://' . $director['link'] . '" target="_blank">';
		}
		echo  wp_get_attachment_image($director['image'], 'full');
		if ($director['link']) {
			echo '</a>';
		}
		echo '<div class="glide__arrows" data-glide-el="controls">';
		echo '<button class="glide__arrow glide__arrow--left" data-glide-dir="<">';
		echo '<img src="' . get_template_directory_uri() . '/img/blue/angle-down.svg" />';
		echo '</button>';
		echo '<button class="glide__arrow glide__arrow--right" data-glide-dir=">">';
		echo '<img src="' . get_template_directory_uri() . '/img/blue/angle-down.svg" />';
		echo '</button>';
		echo '</div>';
		
		if ($director['link']) {
			echo '<a href="https://' . $director['link'] . '" target="_blank">';
		}
		echo '<h4>' . $director['name'] . '</h4>';
		if ($director['link']) {
			echo '</a>';
		}
		echo '<div class="caps">' . $director['role'] . '</div>';
		echo '<h6 class="black-3">' . $director['text'] . '</h6>';
		echo '</div>';
		echo '</div>';
		
	}
	echo '</ul>';
	
	echo '</div>';
	// JS Init
	echo '<script>';
	echo 'new Glide(".ifx-row-' . $rowCount . ' .directors-row", {
	type: "carousel",
	}).mount()';
	echo '</script>';
}


echo '</div>';

echo '</div>';

echo '</div>';
echo '</div>';