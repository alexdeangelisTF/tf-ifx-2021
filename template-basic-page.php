<?php

/* Template Name: Basic Page */


get_header();

$templateName = false;
$templateName = 'basic';

echo '<div id="main">';

echo '<div class="default-background">';
echo '</div>';

echo '<div class="page-container template-basic">';

include __DIR__ . '/includes/main/templates/defaults/headline.php';
include __DIR__ . '/includes/main/templates/defaults/contents.php';

echo '</div>';

echo '</div>';

get_footer();

?>