<?php

echo '<div class="social">';

$socialAccounts = array(
	'twitter',
	'facebook',
	'linkedin'
);

foreach($socialAccounts as $socialAccount) {
	
	if ($socialAccount == 'twitter') {
		$icon = '<i class="fab fa-twitter"></i>';
	} elseif($socialAccount == 'facebook') {
		$icon = '<i class="fab fa-facebook-f"></i>';
	} elseif($socialAccount == 'linkedin') {
		$icon = '<i class="fab fa-linkedin-in"></i>';
	}
	
	// Get the social account url from the options page
	$url = get_field('social_' . $socialAccount, 'option');
	
	// If the social url exists, display the icon
	if ($url) {
		echo '<div class="icon">';
		echo '<a href="' . $url . '" target="_blank">';
		echo $icon;
		echo '</a>';
		echo '</div>';
	}
	
}

echo '</div>';