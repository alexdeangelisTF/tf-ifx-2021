<?php

/* Template Name: Reverse Header */

get_header();

echo '<div id="main" class="reverse-header">';

echo '<div class="default-background">';
echo '</div>';

// Get the ACF Flexible Rows Field
include __DIR__ . '/includes/main/flexible.php';

echo '</div>';

get_footer();

?>