<?php
$rowCount = 1;
if( have_rows('ifx_flexible_rows') ) {
	while ( have_rows('ifx_flexible_rows') ) {
		the_row();
		$rowType = get_row_layout();
		
		// Check for custom display
		$customDisplay = get_sub_field('custom_display');
		if ($customDisplay) {
			include __DIR__ . '/custom-display.php';
		} else {
			$displayClass = 'd-block';
		}
		// If row type is hero, check if image is allowed to overlap
		$allowImageOverlap = false;
		if ( $rowType == 'hero' ) {
			$allowImageOverlap = get_sub_field('allow_image_overlap');
			if ($allowImageOverlap) {
				$overlapClass = 'overlap';
			} else {
				$overlapClass = false;
			}
		} else {
			$overlapClass = false;
		}
		echo '<section class="' . $displayClass . ' ' . $overlapClass . '">';
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
		} elseif ( $rowType == 'html' ) {
			include __DIR__ . '/rows/html.php';
		} elseif ( $rowType == 'logo_gallery' ) {
			include __DIR__ . '/rows/logo-gallery.php';
		} elseif ( $rowType == 'icon_text' ) {
			include __DIR__ . '/rows/icon-text.php';
		} elseif ( $rowType == 'tiles' ) {
			include __DIR__ . '/rows/tiles.php';
		} elseif ( $rowType == 'faqs' ) {
			include __DIR__ . '/rows/faqs.php';
		} elseif ( $rowType == 'full_screen_parallax' ) {
			include __DIR__ . '/rows/full-screen-parallax.php';
		} elseif ( $rowType == 'contact_tiles' ) {
			include __DIR__ . '/rows/contact-tiles.php';
		} elseif ( $rowType == 'image_text_overlap' ) {
			include __DIR__ . '/rows/image-text-overlap.php';
		} elseif ( $rowType == 'purchase_example' ) {
			include __DIR__ . '/rows/purchase-example.php';
		} elseif ( $rowType == 'form' ) {
			include __DIR__ . '/rows/form.php';
		} elseif ( $rowType == 'table' ) {
			include __DIR__ . '/rows/table.php';
		} elseif ( $rowType == 'controls_carousel' ) {
			include __DIR__ . '/rows/controls-carousel.php';
		} elseif ( $rowType == 'directors' ) {
			include __DIR__ . '/rows/directors.php';
		} elseif ( $rowType == 'key_features' ) {
			include __DIR__ . '/rows/key-features.php';
		} else {}
		echo '</div>';
		echo '</section>';
		$rowCount++;
	}
}