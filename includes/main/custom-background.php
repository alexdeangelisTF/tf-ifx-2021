<?php

$customBackgroundValues = $customBackground[0];

$backgroundImageID = $customBackgroundValues['background_image'];
$backgroundPosition = $customBackgroundValues['background_position'];

if ($backgroundImageID) {

	echo '<style>';
	echo 'div#main section .ifx-row.ifx-row-' . $rowCount . ' .ifx-row-wrapper {';
	echo 'background-image:url( ' . wp_get_attachment_url($backgroundImageID) . ');';
	echo 'background-position: ' . $backgroundPosition . ';';
	echo '}';
	echo '</style>';

} 