<?php
$heading = false;
$heading = get_sub_field('heading');
$text = false;
$text = get_sub_field('text');
$preheading = false;
$preheading = get_sub_field('preheading');
$subheading = false;
$subheading = get_sub_field('subheading');
$features = false;
$features = get_sub_field('features');

echo '<div class="ifx-row-wrapper dark-wrapper-top">';
echo '<div class="container">';

echo '<div class="dark__wrapper">';
echo '<div class="row">';

echo '<div class="col-12 col-lg-7 col-xl-5">';
echo '<div class="dark__text-col">';
if ($preheading) {
	echo '<div class="caps">' . $preheading . '</div>';
}
if ($heading) {
	echo '<h2>' . $heading . '</h2>';
}
echo '</div>';
echo '</div>';
echo '</div>';

echo '</div>';

echo '</div>';
echo '</div>';


// Middle Section




echo '<div class="ifx-row-wrapper dark-wrapper-bottom">';
echo '<div class="container">';

echo '<div class="dark__wrapper">';
echo '<div class="row align-items-lg-center justify-content-lg-between">';
echo '<div class="col-12 col-lg-6 col-xl-4 d-none d-md-none d-lg-block d-xl-block">';
echo '<div class="dark__text-col">';
echo '<h4>' . $text . '</h4>';
echo '<div class="caps">' . $subheading . '</div>';
echo '</div>';
echo '</div>';
echo '<div class="col-12 col-lg-6">';
echo '<div class="dark__features-col">';
if ($features) {
	foreach($features as $feature) {
		echo '<div class="dark__features-col__single">';
		echo '<h4>' . $feature['title'] . '</h4>';
		echo '<h6 class="black-3">' . $feature['text'] . '</h6>';
		echo '</div>';
	}
}
echo '</div>';
echo '</div>';
echo '</div>';

echo '</div>';

echo '</div>';
echo '</div>';