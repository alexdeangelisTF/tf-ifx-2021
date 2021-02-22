<?php

if( have_rows('ifx_flexible_rows') ) {
	while ( have_rows('ifx_flexible_rows') ) {
		the_row();
		$rowType = get_row_layout();
		echo '<section>';
		echo '<div class="ifx-row ifx-row-' . $rowType . '">';
		if( $rowType == 'hero' ) {
			include __DIR__ . '/rows/hero.php';
		} else {}
		echo '</div>';
		echo '</section>';
	}
}