<?php

if( have_rows('ifx_flexible_rows') ) {
	while ( have_rows('ifx_flexible_rows') ) {
		the_row();
		echo '<section>';
		echo '<div class="ifx-row">';
		if( get_row_layout() == 'hero' ) {
			include __DIR__ . '/rows/hero.php';
		} else {}
		echo '</div>';
		echo '</section>';
	}
}