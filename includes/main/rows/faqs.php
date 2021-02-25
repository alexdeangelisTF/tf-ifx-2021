<?php
$heading = false;
$heading = get_sub_field('heading');
$preheading = false;
$preheading = get_sub_field('preheading');
$text = false;
$text = get_sub_field('text');

$questions = false;
$questions = get_sub_field('questions');

echo '<div class="ifx-row-wrapper">';
echo '<div class="container">';

echo '<div class="faqs__wrapper">';

echo '<div class="row justify-content-center">';
echo '<div class="col-12 col-lg-6">';
echo '<div class="faqs__introduction">';
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

if ($questions) {
	echo '<div class="row justify-content-center">';
	echo '<div class="col-12 col-lg-10">';
	echo '<div class="faqs__questions">';
	echo '<div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">';
	$questionCount = 1;
	foreach($questions as $question) {
		$questionText = $question['question'];
		$answerText = $question['answer'];
		
		if ($questionText && $answerText) {
			
			
			
			if ($questionCount == 1) {
				$cardOpen = 'open';
				$headerLink = '<a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne' . $questionCount . '" aria-expanded="true" aria-controls="collapseOne' . $questionCount . '">';
				$bodyDiv = '<div id="collapseOne' . $questionCount . '" class="collapse show" role="tabpanel" aria-labelledby="headingOne' . $questionCount . '" data-parent="#accordionEx">';
			} else {
				$cardOpen = false;
				$headerLink = '<a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne' . $questionCount . '"
        aria-expanded="false" aria-controls="collapseOne' . $questionCount . '">';
				$bodyDiv = '<div id="collapseOne' . $questionCount . '" class="collapse" role="tabpanel" aria-labelledby="headingOne' . $questionCount . '"
      data-parent="#accordionEx">';
			}
			
			echo '<div class="card ' . $cardOpen . '">';
			
			// Accordion Header
			echo '<div class="card-header" role="tab" id="headingOne' . $questionCount . '">';
			echo $headerLink;
			echo '<h5 class="weight-700 d-flex justify-content-between align-items-center">';
			echo $questionText;
			echo ' <img src="' . get_template_directory_uri() . '/img/angle-down.svg" />';
			echo '</h5>';
			echo '</a>';
			echo '</div>';
			
			// Accordion Body
			echo $bodyDiv;
			echo '<div class="card-body">';
			echo '<h6 class="black-3">' . $answerText . '</h6>';
			echo '</div>';
			echo '</div>';
			
			echo '</div>';
			
		}
		$questionCount++;
	}
	echo '</div>';
	echo '</div>';
	echo '</div>';
	echo '</div>';
}
echo '</div>';

echo '</div>';
echo '</div>';