<?php

$contactTiles = false;
$contactTiles = get_sub_field('contact_tiles');

echo '<div class="ifx-row-wrapper">';
echo '<div class="container">';

echo '<div class="contact-tiles__wrapper">';

if ($contactTiles) {
	$contactTilesCount = count($contactTiles);
	$colWidth = 12 / $contactTilesCount;
	echo '<div class="row">';
	foreach($contactTiles as $contactTile) {
		echo '<div class="col-12 col-md-' . $colWidth . ' d-md-flex">';
		echo '<div class="contact-tile d-md-flex flex-md-column">';
		echo '<div class="contact-tile__content flex-grow-1">';
		if ($contactTile['image']) {
			echo '<div class="contact-tile__image">';
			echo wp_get_attachment_image($contactTile['image'], 'medium');
			echo '</div>';
		}
		if ($contactTile['heading']) {
			echo '<h4 class="weight-700">' . $contactTile['heading'] . '</h4>';
		}
		if ($contactTile['text']) {
			echo '<h6 class="black-3">' . $contactTile['text'] . '</h6>';
		}
		echo '</div>';
		if ($contactTile['link']) {
			echo '<div class="contact-tile__link">';
			echo '<a class="button weight-700" href="' . $contactTile['link']['url'] . '" target="' . $contactTile['link']['target'] . '">';
			echo $contactTile['link']['title'] . ' <i class="fas fa-arrow-right"></i>';
			echo '</a>';
			echo '</div>';
		}
		echo '</div>';
		echo '</div>';
	}
	echo '</div>';
}
echo '</div>';

echo '</div>';
echo '</div>';