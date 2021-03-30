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

if ($enableVariation) {
	$avatarImageID = get_sub_field('avatar_image');
	$subheading = get_sub_field('subheading');
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

echo '</div>';

echo '</div>';

echo '</div>';

echo '</div>';

echo '<div class="col-12 d-md-none d-lg-none d-xl-none">';
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
echo '</div>';

echo '</div>';

echo '</div>';