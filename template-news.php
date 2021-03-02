<?php

/* Template Name: News */


get_header();

$templateName = false;
$templateName = 'news';

echo '<div id="main">';

echo '<div class="default-background">';
echo '</div>';

include __DIR__ . '/includes/main/templates/defaults/introduction.php';

include __DIR__ . '/includes/main/templates/news/news.php';

echo '</div>';

get_footer();

?>