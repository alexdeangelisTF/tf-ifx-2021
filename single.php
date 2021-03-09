<?php

get_header();

echo '<div id="main">';

echo '<div class="default-background">';
echo '</div>';

echo '<div class="page-container">';

include __DIR__ . '/includes/main/templates/defaults/headline.php';

include __DIR__ . '/includes/main/templates/defaults/contents.php';

echo '</div>';

get_footer();

?>