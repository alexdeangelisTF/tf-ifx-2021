<?php
$heading = false;
$heading = get_sub_field('heading');
$text = false;
$text = get_sub_field('text');
$heroHeight = false;
$heroHeight = get_sub_field('hero_height');
// If hero height is set to default 100, reset the variable to false
if ($heroHeight == '100') {
	$heroHeight = false;
}
$videoBackgroundID = false;
$videoBackgroundID = get_sub_field('video_background');
$videoBackground = wp_get_attachment_url($videoBackgroundID);


if ($videoBackground) {
	echo '<video autoplay muted loop id="myVideo">';
	echo '<source src="' . $videoBackground . '" type="video/mp4">';
	echo '</video>';
}

echo '<div class="ifx-row-wrapper">';

if ($heroHeight) { 


echo '<style>';
	echo 'section .ifx-row.ifx-row-hero_video_background.ifx-row-' . $rowCount . ' {';
		echo 'height:' . $heroHeight . 'vh;';
	echo '}';
echo '</style>';


}
	echo '<div class="container">';
		echo '<div class="hero-video-background__wrapper">';
			echo '<div class="row">';
				echo '<div class="col-12">';
					echo '<div class="hero-video-background__introduction">';
						echo '<div class="row justify-content-md-center">';
							echo '<div class="col-12 col-md-10">';
								echo '<h1 class="weight-700">' . $heading . '</h1>';
							echo '</div>';
						echo '</div>';
						echo '<div class="row justify-content-md-center">';
							echo '<div class="col-12 col-md-6">';
								echo '<h5 class="black-3">' . $text . '</h5>';
							echo '</div>';
						echo '</div>';
					echo '</div>';
				echo '</div>';
			echo '</div>';
		echo '</div>';
	echo '</div>';

echo '</div>';