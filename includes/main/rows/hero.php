<?php
$heading = false;
$heading = get_sub_field('heading');
$text = false;
$text = get_sub_field('text');
$imageID = false;
$imageID = get_sub_field('image');
$linkStyle = false;
$linkStyle = get_sub_field('link_style');
$allowImageOverlap = false;
$allowImageOverlap = get_sub_field('allow_image_overlap');
if ($allowImageOverlap) {
	$rowClass = false;
	$imageClass = 'image-absolute';
} else {
	$rowClass = 'align-items-center';
	$imageClass = false;
}

if ($linkStyle) {
	$link = get_sub_field('link');
	if ($linkStyle == 'Basic') {
		$linkClass = 'button basic';
	} elseif ($linkStyle == 'Button') {
		$linkClass = 'button';
	} else {}
	
} else {
	$link = false;
}

echo '<div class="ifx-row-wrapper">';

echo '<div class="container">';
echo '<div class="row flex-md-row-reverse ' . $rowClass . '">';
echo '<div class="col-12 col-md-6 col-lg-7">';
echo '<div class="hero__image ' . $imageClass . '">';
echo  wp_get_attachment_image($imageID, 'full');
echo '</div>';
echo '</div>';
echo '<div class="col-12 col-md-6 col-lg-5">';
echo '<div class="hero__introduction">';
echo '<h1 class="weight-700">' . $heading . '</h1>';
echo '<h5 class="black-3">' . $text . '</h5>';

if ($link) {
	echo '<a href="' . $link['url'] . '" class="' . $linkClass . '" target="' . $link['target'] . '">' . $link['title'] . '</a>';
}
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';

echo '</div>';