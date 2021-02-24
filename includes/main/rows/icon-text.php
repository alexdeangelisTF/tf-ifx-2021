<?php

echo '<div class="ifx-row-wrapper">';

echo '<div class="container">';
echo '<div class="row">';
echo '<div class="col-12">';

echo '<div class="icon-text__wrapper">';

$columns = get_sub_field('columns');
if ($columns) {
	$colCount = count($columns);
	foreach( $columns as $column) {
		echo '<div class="icon-text__single icon-text__single-' . $colCount . '">';
		if ($column['icon']){
			echo '<div class="icon-text__single__icon">';
			echo wp_get_attachment_image($column['icon'], 'medium');
			echo '</div>';
		}
		if ($column['heading']){
			echo '<div class="icon-text__single__heading">';
			echo '<h4 class="h1-991">' . $column['heading'] . '</h4>';
			echo '</div>';
		}
		if ($column['text']){
			echo '<div class="icon-text__single__text">';
			echo '<h6 class="black-3">' . $column['text'] . '</h6>';
			echo '</div>';
		}
		echo '</div>';
	}
}

echo '</div>';

echo '</div>';
echo '</div>';
echo '</div>';

echo '</div>';