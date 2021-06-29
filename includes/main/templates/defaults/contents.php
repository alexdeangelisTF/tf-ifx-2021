<?php

if (is_singular('careers')) {
	$careersAboutIfxPayments = get_field('careers_about_ifx_payments','option');
	$careersRole = get_field('careers_role');
	$careersResponsibilities = get_field('careers_responsibilities');
	$careersPackage = get_field('careers_package');
	$post = get_post( get_the_ID() ); 
	$title = $post->post_name;
}

if (is_page_template('template-form.php')) {
	$bodyWrapperClass = 'col-12';
} else {
	$bodyWrapperClass = 'col-12 col-md-10';
}

echo '<div class="page-contents">';

echo '<div class="container">';
echo '<div class="row justify-content-md-center">';
echo '<div class="' . $bodyWrapperClass . '">';

echo '<div class="page-contents__inner">';


if (is_page_template('template-form.php')) {
	include __DIR__ . '/form.php';
} else {
	echo '<div class="page-contents__inner__text">';

	if (is_singular('careers')) {
		if ($careersAboutIfxPayments) {
			//echo '<h4 class="weight-700">About IFX Payments</h4>';
			echo $careersAboutIfxPayments;
		}
		if ($careersRole) {
			echo '<h4 class="weight-700">Role</h4>';
			echo $careersRole;
		}
		if ($careersResponsibilities) {
			echo '<h4 class="weight-700">Responsibilities</h4>';
			echo $careersResponsibilities;
		}
		if ($careersPackage) {
			echo '<h4 class="weight-700">Package</h4>';
			echo $careersPackage;
		}
	} else {
		echo wpautop(get_the_content());
	}
	echo '</div>';

	if (is_singular('careers')) {
		echo '<div class="button-wrap">';
		echo '<a href="/apply?id=' . get_the_ID() . '&job=' . $title . '" class="button button-career">Apply now</a>';
		echo '</div>';
	}
}





echo '</div>';

echo '</div>';
echo '</div>';
echo '</div>';

echo '</div>';