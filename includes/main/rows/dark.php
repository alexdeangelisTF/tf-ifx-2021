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

echo '<div class="ifx-row-wrapper">';
echo '<div class="container">';

echo '<div class="dark__wrapper">';

echo '<div class="row">';
echo '<div class="col-12 col-lg-7">';
echo '<div class="dark__text-col">';
if ($preheading) {
	echo '<div class="caps">' . $preheading . '</div>';
}
if ($heading) {
	echo '<h2 class="white">' . $heading . '</h2>';
}
echo '</div>';
echo '</div>';
echo '</div>';

echo '<div class="row">';
echo '<div class="col-12 col-lg-6 d-none d-md-none d-lg-block d-xl-block">';
echo '<div class="dark__text-col">';
echo '<h4>Streamline your company’s mass payment processes. Pre-screen and validate beneficiary data.</h4>';
echo '<div class="caps">Jane Adams - CEO Miki Travel</div>';
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