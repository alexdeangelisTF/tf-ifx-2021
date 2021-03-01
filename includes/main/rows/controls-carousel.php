<?php

$heading = false;
$heading = get_sub_field('heading');
$preheading = false;
$preheading = get_sub_field('preheading');
$text = false;
$text = get_sub_field('text');

$slides = false;
$slides = get_sub_field('slides');

echo '<div class="ifx-row-wrapper">';
echo '<div class="container">';

echo '<div class="controls-carousel__wrapper">';
echo '<div class="row">';
echo '<div class="col-12">';
echo '<div class="controls-carousel__slider">';




echo '<div class="glide">';
echo '<div class="row">';

// Introduction
echo '<div class="col-12 col-lg-5">';
echo '<div class="controls-carousel__introduction">';
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

// Slider Controls
if ($slides) {
	echo '<div class="d-none d-md-block d-lg-block d-xl-block col-12 col-lg-7">';
	echo '<div class="slide-controls">';
	echo '<div data-glide-el="controls">';
	$slideCount = 0;
	foreach($slides as $slide) {
		echo '<button data-glide-dir="=' . $slideCount . '">Slide ' . $slideCount . '</button>';
		$slideCount++;
	}
	echo '</div>';
	echo '</div>';
	echo '</div>';
}

echo '</div>';

// Slide Contents
if ($slides) {
	echo '<div class="row">';
	echo '<div class="col-12">';
	echo '<div class="glide__track" data-glide-el="track">';
	echo '<ul class="glide__slides">';
	$slideCount = 0;
	foreach($slides as $slide) {
		//echo '<li class="glide__slide">Slide ' . $slideCount . '</li>';
		
		$preheading = false;
		$preheading = $slide['preheading'];
		$heading = false;
		$heading = $slide['heading'];
		$text = false;
		$text = $slide['text'];
		$imageID = false;
		$imageID = $slide['image'];
		
		echo '<div class="glide__slide">';
		echo '<div class="row">';
		echo '<div class="col-12 col-md-6 d-md-flex align-items-md-center">';
		echo '<div class="slide__image">';
		echo  wp_get_attachment_image($imageID, 'full');
		echo '</div>';
		echo '</div>';
		echo '<div class="col-12 col-md-5 d-md-flex align-items-md-center">';
		echo '<div class="slide__content">';
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
			echo '<h6 class="black-3">';
			echo $text;
			echo '</h6>';
		}
		echo '</div>';
		echo '</div>';
		echo '</div>';
		echo '</div>';
		$slideCount++;
	}
	echo '</ul>';
	echo '</div>';
	//echo '<div class="glide__bullets d-md-none d-lg-none d-xl-none" data-glide-el="controls[nav]">';
  //echo '<button class="glide__bullet" data-glide-dir="=0"></button>';
  //echo '<button class="glide__bullet" data-glide-dir="=1"></button>';
  //echo '<button class="glide__bullet" data-glide-dir="=2"></button>';
  //echo '</div>';
	echo '</div>';
	echo '</div>';
}

echo '</div>';

// JS Init
if ($slides) {
	echo '<script>';
	echo 'new Glide(".ifx-row-' . $rowCount . ' .glide", {
	type: "carousel",
	autoplay: 5000,
	}).mount()';
	echo '</script>';
}

echo '</div>';
echo '</div>';
echo '</div>';

echo '</div>';
echo '</div>';
echo '</div>';