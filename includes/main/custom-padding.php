<?php

$customPaddingValues = $customPadding[0];

$desktopPaddingTop = $customPaddingValues['desktop_padding_top'];
$desktopPaddingBottom = $customPaddingValues['desktop_padding_bottom'];
$mobilePaddingTop = $customPaddingValues['mobile_padding_top'];
$mobilePaddingBottom = $customPaddingValues['mobile_padding_bottom'];

if ($desktopPaddingTop || $desktopPaddingBottom || $mobilePaddingTop || $mobilePaddingBottom) {
	
	echo '<style>';
	// If desktop styles, add desktop styles
	if ($desktopPaddingTop || $desktopPaddingBottom) {
		echo '@media (min-width:992px) {';
		echo 'div#main section .ifx-row.ifx-row-' . $rowCount . ' .ifx-row-wrapper {';
		if ($desktopPaddingTop) {
			echo 'padding-top:' . $desktopPaddingTop / 10 . 'rem;';
		}
		if ($desktopPaddingBottom) {
			echo 'padding-bottom:' . $desktopPaddingBottom / 10 . 'rem;';
		}
		echo '}';
		echo '}';
	}
	// If mobile styles, add mobile styles
	if ($mobilePaddingTop || $mobilePaddingBottom) {
		echo '@media (max-width:991px) {';
		echo 'div#main section .ifx-row.ifx-row-' . $rowCount . ' .ifx-row-wrapper {';
		if ($mobilePaddingTop) {
			echo 'padding-top:' . $mobilePaddingTop / 10 . 'rem;';
		}
		if ($mobilePaddingBottom) {
			echo 'padding-bottom:' . $mobilePaddingBottom / 10 . 'rem;';
		}
		echo '}';
		echo '}';
	}
	
	echo '</style>';

}