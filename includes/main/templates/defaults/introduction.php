<?php

echo '<section>';
echo '<div class="ifx-row ifx-row-' . $templateName . '">';

$title = false;
$title = get_field('alternative_title');
if (!$title) {
	$title = get_the_title();
}
$introduction = get_field('introduction_text');
echo '<div class="container">';
echo '<div class="row justify-content-center">';
echo '<div class="col-12 col-md-10 col-lg-6">';
echo '<div class="' . $templateName . '__introduction">';
echo '<h1 class="weight-700">' . $title . '</h1>';
if ($introduction) {
	echo '<h5 class="black-3">' . $introduction . '</h5>';
}
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';

echo '</div>';
echo '</section>';