<?php


get_header();

echo '<div id="main">';

echo '<div class="default-background">';
echo '</div>';

echo '<div class="page-container template-news">';

include __DIR__ . '/includes/main/templates/defaults/headline.php';
include __DIR__ . '/includes/main/templates/news/loop.php';

echo '</div>';

echo '</div>';

get_footer();

?>