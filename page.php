<?php

get_header();

echo '<div id="main">';

echo '<div class="default-background">';
echo '</div>';

// Get the ACF Flexible Rows Field
include __DIR__ . '/includes/main/flexible.php';

echo '</div>';

get_footer();

?>