<?php
$location = false;
$careerID = false;
$careerName = false;
$title = false;
$pageClass = false;
if (is_page('apply')) {
	$careerID = $_GET['id'];
	$careerName = $_GET['job'];
	$title = 'Application form';
	$pageClass = 'page-apply';
	$wrapperClass = 'col-12 col-md-10';
} elseif (is_singular('careers')) {
	$location = get_field('careers_location');
	$title = get_the_title();
	$pageClass = 'page-single-career';
	$wrapperClass = 'col-9 col-md-10';
} elseif (is_singular('post')) {
	$title = get_the_title();
	$pageClass = 'page-single-post';
	$wrapperClass = 'col-11 col-md-10';
} else {
	$wrapperClass = 'col-12 col-md-10';
}



echo '<div class="page-headline ' . $pageClass . '">';
echo '<div class="container">';
echo '<div class="row justify-content-md-center">';
echo '<div class="' . $wrapperClass . '">';
if ($title) {
	echo '<h1 class="weight-700">' . $title . '</h1>';
}
if (is_page('apply')) {
	if ($careerID) {
		$post = get_post( $careerID ); 
		$jobName = $post->post_title;
		echo '<div class="caps weight-700">' . $jobName . '</div>';
	}
} elseif (is_singular('careers')) {
	if ($location) {
		echo '<div class="caps weight-700">' . $location . '</div>';
	}
	echo ifx_social_sharing_buttons();
} else {
	echo ifx_social_sharing_buttons();
}
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';