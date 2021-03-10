<?php

/* Template Name: News */


get_header();

$templateName = false;
$templateName = 'news';

echo '<div id="main">';

echo '<div class="default-background">';
echo '</div>';

echo '<div class="page-container template-news">';

include __DIR__ . '/includes/main/templates/defaults/headline.php';
include __DIR__ . '/includes/main/templates/news/news.php';
include __DIR__ . '/includes/main/templates/news/market-report.php';

echo '</div>';

//include __DIR__ . '/includes/main/templates/defaults/introduction.php';
//include __DIR__ . '/includes/main/templates/news/news.php';

echo '</div>';

get_footer();

?>