<?php
$heading = false;
$heading = get_sub_field('heading');
$layout = false;
$layout = get_sub_field('layout');
$text = false;
$text = get_sub_field('text');
$imageID = false;
$imageID = get_sub_field('image');
$button = false;
$preheading = false;
$enableVariation = false;
$enableVariation = get_sub_field('enable_variation');
$avatarImageID = false;
$subheading = false;

$rowType = false;
$testimonials = false;
if ($enableVariation) {

	// If the variation has been enabled, we check what type of row this is

	$rowType = get_sub_field('row_type');

	if ($rowType == 'basic') {
		$avatarImageID = get_sub_field('avatar_image');
		$subheading = get_sub_field('subheading');
	} elseif($rowType == 'carousel') {
		$testimonials = get_sub_field('testimonials');
	} else {}

	
	$variationClass = 'variation';
} else {
	$button = get_sub_field('button');
	$preheading = get_sub_field('preheading');
	$variationClass = false;
}

if ($layout == 'text_image') {
	$rowReverse = 'rtl';
} else {
	$rowReverse = false;
}

echo '<div class="ifx-row-wrapper">';

echo '<div class="image-text-overlap__wrapper ' . $variationClass . '">';

echo '<div class="container">';

if ($enableVariation) {
	
	$introPreheading = get_sub_field('intro_preheading');
	$introTitle = get_sub_field('intro_title');
	$introText = get_sub_field('intro_text');
	
	echo '<div class="row align-items-md-end row__variation-intro">';
	echo '<div class="col-12 col-lg-6">';
	if ($introPreheading) {
		echo '<div class="caps">' . $introPreheading . '</div>';
	}
	if ($introTitle) {
		echo '<h2 class="weight-700">' . $introTitle . '</h2>';
	}
	echo '</div>';
	echo '<div class="col-12 col-lg-5">';
	if ($introText) {
		echo '<h5 class="black-3">' . $introText . '</h5>';
	}
	echo '</div>';
	echo '</div>';
	
}

echo '<div class="row">';
echo '<div class="col-12 col-image">';

echo '<div class="image-text-overlap__container ' . $rowReverse . '">';

echo '<div class="one d-flex justify-content-end" style="background-image:url(' . wp_get_attachment_url($imageID) . ')">';

echo '<div class="two d-none d-md-block">';

echo '<div class="two-content">';

/* Introduction */
echo '<div class="image-text-overlap__introduction">';

if (!$rowType || $rowType == 'basic') {
	if ($preheading) {
		echo '<div class="caps">';
		echo $preheading;
		echo '</div>';
	}
	if ($avatarImageID) {
		echo wp_get_attachment_image($avatarImageID,'medium');
	}
	if ($heading) {
		echo '<h2 class="weight-700">';
		echo $heading;
		echo '</h2>';
	}
	if ($enableVariation) {
		echo '<hr>';
	}
	if ($text) {
		echo '<h5 class="black-3">';
		echo $text;
		echo '</h5>';
	}
	if ($subheading) {
		echo '<div class="caps">';
		echo $subheading;
		echo '</div>';
	}
	if ($button) {
		echo '<a href="' . $button['url'] . '" class="button" target="' . $button['target'] . '">' . $button['title'] . '</a>';
	}
} elseif ($rowType == 'carousel') {

	if ($testimonials) {
		echo '<div class="glide glide-desktop">';
		echo '<div class="glide__track" data-glide-el="track">';
		echo '<ul class="glide__slides">';
		foreach ($testimonials as $testimonial) {
			echo '<li class="glide__slide">';
			if ($testimonial['image']) {
				echo wp_get_attachment_image($testimonial['image'],'medium');
			}
			if ($testimonial['heading']) {
				echo '<h2 class="weight-700">';
				echo $testimonial['heading'];
				echo '</h2>';
			}
			echo '<hr>';
			if ($testimonial['text']) {
				echo '<h5 class="black-3">';
				echo $testimonial['text'];
				echo '</h5>';
			}
			if ($testimonial['subheading']) {
				echo '<div class="caps">';
				echo $testimonial['subheading'];
				echo '</div>';
			}
			echo '</li>';
			
		}
		echo '</ul>';
		echo '</div>';
		echo '<div class="glide__arrows" data-glide-el="controls">';
    echo '<button class="glide__arrow glide__arrow--left" data-glide-dir="<">';
		echo '<img src="' . get_template_directory_uri() . '/img/blue/angle-down.svg" />';
		echo '</button>';
    echo '<button class="glide__arrow glide__arrow--right" data-glide-dir=">">';
		echo '<img src="' . get_template_directory_uri() . '/img/blue/angle-down.svg" />';
		echo '</button>';
  	echo '</div>';
		echo '</div>';

		echo '<script>';
		echo 'new Glide(".ifx-row-' . $rowCount . ' .glide-desktop", {
		type: "carousel",
		}).mount()';
		
		echo '</script>';

	}

} else {}


echo '</div>';


echo '</div>';

echo '</div>';

echo '</div>';

echo '</div>';

echo '</div>';

echo '<div class="col-12 d-md-none d-lg-none d-xl-none">';

if (!$rowType || $rowType == 'basic') {

	echo '<div class="two-content two-content-mobile">';
	/* Introduction */
	echo '<div class="image-text-overlap__introduction">';
	if ($preheading) {
		echo '<div class="caps">';
		echo $preheading;
		echo '</div>';
	}
	if ($avatarImageID) {
		echo wp_get_attachment_image($avatarImageID,'medium');
	}
	if ($heading) {
		echo '<h2 class="weight-700">';
		echo $heading;
		echo '</h2>';
	}
	if ($enableVariation) {
		echo '<hr>';
	}
	if ($text) {
		echo '<h5 class="black-3">';
		echo $text;
		echo '</h5>';
	}
	if ($subheading) {
		echo '<div class="caps">';
		echo $subheading;
		echo '</div>';
	}
	if ($button) {
		echo '<a href="' . $button['url'] . '" class="button" target="' . $button['target'] . '">' . $button['title'] . '</a>';
	}
	echo '</div>';

	echo '</div>';
} elseif ($rowType == 'carousel') {
	echo '<div class="two-content two-content-mobile two-content-mobile-carousel">';
	if ($testimonials) {
		echo '<div class="glide glide-mobile">';
		echo '<div class="glide__track" data-glide-el="track">';
		echo '<ul class="glide__slides">';
		foreach ($testimonials as $testimonial) {
			echo '<li class="glide__slide">';
			if ($testimonial['image']) {
				echo wp_get_attachment_image($testimonial['image'],'medium');
			}
			if ($testimonial['heading']) {
				echo '<h2 class="weight-700">';
				echo $testimonial['heading'];
				echo '</h2>';
			}
			echo '<hr>';
			if ($testimonial['text']) {
				echo '<h5 class="black-3">';
				echo $testimonial['text'];
				echo '</h5>';
			}
			if ($testimonial['subheading']) {
				echo '<div class="caps">';
				echo $testimonial['subheading'];
				echo '</div>';
			}
			echo '</li>';
			
		}
		echo '</ul>';
		echo '</div>';
		echo '<div class="glide__arrows" data-glide-el="controls">';
    echo '<button class="glide__arrow glide__arrow--left" data-glide-dir="<">';
		echo '<img src="' . get_template_directory_uri() . '/img/blue/angle-down.svg" />';
		echo '</button>';
    echo '<button class="glide__arrow glide__arrow--right" data-glide-dir=">">';
		echo '<img src="' . get_template_directory_uri() . '/img/blue/angle-down.svg" />';
		echo '</button>';
  	echo '</div>';
		echo '</div>';

		echo '<script>';
		echo 'new Glide(".ifx-row-' . $rowCount . ' .glide-mobile", {
		type: "carousel",
		}).mount()';
		
		echo '</script>';

	}
	echo '</div>';
} else {}
echo '</div>';

echo '</div>';

echo '</div>';