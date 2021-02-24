<?php
$rowCount = 1;
if( have_rows('ifx_flexible_rows') ) {
	while ( have_rows('ifx_flexible_rows') ) {
		the_row();
		$rowType = get_row_layout();
		echo '<section>';
		echo '<div class="ifx-row ifx-row-' . $rowType . ' ifx-row-' . $rowCount . '">';
		
		// Check for custom padding
		$customPadding = get_sub_field('custom_padding');
		if ($customPadding) {
			include __DIR__ . '/custom-padding.php';
		}
		// Check for custom background
		$customBackground = get_sub_field('custom_background');
		if ($customBackground) {
			include __DIR__ . '/custom-background.php';
		}
		if ( $rowType == 'hero' ) {
			include __DIR__ . '/rows/hero.php';
		} elseif ( $rowType == 'image_text' ) {
			include __DIR__ . '/rows/image-text.php';
		} elseif ( $rowType == 'feature_tiles' ) {
			include __DIR__ . '/rows/feature-tiles.php';
		} else {}
		echo '</div>';
		echo '</section>';
		$rowCount++;
	}
}