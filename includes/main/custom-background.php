<?php
$customBackgroundValues = false;
$customBackgroundValues = $customBackground[0];
$backgroundImageID = false;
$backgroundImageID = $customBackgroundValues['background_image'];
$backgroundPosition = false;
$backgroundPosition = $customBackgroundValues['background_position'];
$backgroundSize = false;
$backgroundSize = $customBackgroundValues['background_size'];
$backgroundParallax = false;
$backgroundParallax = $customBackgroundValues['background_parallax'];
if ($backgroundParallax) {
	$parallaxClass = 'rellax';
	$backgroundParallaxSpeed = $customBackgroundValues['background_parallax_speed'];
} else {
	$parallaxClass = false;
	$backgroundParallaxSpeed = false;
}

if ($backgroundImageID) {

	if (!$backgroundSize) {
		$backgroundSize = 'auto';
	}
	echo '<style>';
	echo 'div#main section .ifx-row.ifx-row-' . $rowCount . ' .ifx-row-wrapper-bg {';
	echo 'background-image:url( ' . wp_get_attachment_url($backgroundImageID) . ');';
	echo 'background-position: ' . $backgroundPosition . ';';
	echo 'background-size:' . $backgroundSize . ';';
	echo '}';
	echo '</style>';

	
	
	echo '<div class="ifx-row-wrapper-bg ' . $parallaxClass . '" data-rellax-percentage="0.5"></div>';
	
	if ($backgroundParallax) {
		echo '<script>
		var rellax_row_' . $rowCount . ' = new Rellax("div#main section .ifx-row.ifx-row-' . $rowCount . ' .ifx-row-wrapper-bg.rellax", {
			speed: ' . $backgroundParallaxSpeed . ',
			center: true,
		});
		</script>';
	}
	
} 