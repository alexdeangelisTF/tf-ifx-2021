<?php

$customDisplayValues = $customDisplay[0];

$displayDesktop = $customDisplayValues['desktop'];
$displayMobile = $customDisplayValues['mobile'];

$displayClass = '';

if ($displayMobile == 'hide') {
	$displayClass .= ' d-none d-sm-none ';
} elseif ($displayMobile == 'show') {
	$displayClass .= ' d-block d-sm-block ';
}

if ($displayDesktop == 'hide') {
	$displayClass .= ' d-md-none d-lg-none d-xl-none ';
} elseif ($displayDesktop == 'show') {
	$displayClass .= ' d-md-block d-lg-block d-xl-block ';
}