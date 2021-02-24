<?php

$customPaddingValues = $customPadding[0];

$desktopPaddingTop = $customPaddingValues['desktop_padding_top'];
$desktopPaddingBottom = $customPaddingValues['desktop_padding_bottom'];
$mobilePaddingTop = $customPaddingValues['mobile_padding_top'];
$mobilePaddingBottom = $customPaddingValues['mobile_padding_bottom'];


// Fallback if padding is set to 0. Set the variable to true, instead of a number
if ($desktopPaddingTop == '0') {
	$desktopPaddingTop = true;
}
if ($desktopPaddingBottom == '0') {
	$desktopPaddingBottom = true;
}
if ($mobilePaddingTop == '0') {
	$mobilePaddingTop = true;
}
if ($mobilePaddingBottom == '0') {
	$mobilePaddingBottom = true;
}

if ($desktopPaddingTop || $desktopPaddingBottom || $mobilePaddingTop || $mobilePaddingBottom) {
	
	echo '<style>';
	// If desktop styles, add desktop styles
	if ($desktopPaddingTop || $desktopPaddingBottom) {
		echo '@media (min-width:992px) {';
		echo 'div#main section .ifx-row.ifx-row-' . $rowCount . ' .ifx-row-wrapper {';
		if (is_numeric($desktopPaddingTop)) {
			echo 'padding-top:' . $desktopPaddingTop / 10 . 'rem;';
		} elseif (is_bool($desktopPaddingTop)) {
			echo 'padding-top:0;';
		} else {}
		if (is_numeric($desktopPaddingBottom)) {
			echo 'padding-bottom:' . $desktopPaddingBottom / 10 . 'rem;';
		} elseif (is_bool($desktopPaddingBottom)) {
			echo 'padding-bottom:0;';
		} else {}
		echo '}';
		echo '}';
	}
	// If mobile styles, add mobile styles
	if ($mobilePaddingTop || $mobilePaddingBottom) {
		echo '@media (max-width:991px) {';
		echo 'div#main section .ifx-row.ifx-row-' . $rowCount . ' .ifx-row-wrapper {';
		if (is_numeric($mobilePaddingTop)) {
			echo 'padding-top:' . $mobilePaddingTop / 10 . 'rem;';
		} elseif (is_bool($mobilePaddingTop)) {
			echo 'padding-top:0;';
		} else {}
		if (is_numeric($mobilePaddingBottom)) {
			echo 'padding-bottom:' . $mobilePaddingBottom / 10 . 'rem;';
		} elseif (is_bool($mobilePaddingBottom)) {
			echo 'padding-bottom:0;';
		} else {}
		echo '}';
		echo '}';
	}
	
	echo '</style>';

}