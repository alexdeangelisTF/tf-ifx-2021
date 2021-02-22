<?php

$heading = get_sub_field('heading');
$text = get_sub_field('text');
$image = get_sub_field('image');
if ($text) {
	echo '<h1 class="weight-700">';
	echo $text;
	echo '</h1>';
}