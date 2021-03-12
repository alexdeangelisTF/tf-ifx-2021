<?php

echo '<section>';
echo '<div class="ifx-row ifx-row-news">';

echo '<div class="container">';
echo '<div class="row">';
echo '<div class="col-12">';

echo '<div class="news-row-news">';
echo '<div class="row">';

$postCount = 1;
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
		$colWidth = false;
		if ($postCount == 1) {
			$colWidth = '8';
			$imageSize = 'double';
			$textLength = 80;
		} else {
			$colWidth = '4';
			$imageSize = 'single';
			$textLength = 40;
		}
		$content = get_the_content();
		$trimmed_content = wp_trim_words( $content, $textLength, '...' );
		$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
		echo '<div class="col-12 col-md-' . $colWidth . '">';
		echo '<div class="news-single">';
		echo '<div class="news-text">';
		echo '<a href="' . get_the_permalink() . '">';
		echo '<div class="caps">' . reading_time() . '</div>';
		echo '<h4>' . get_the_title() . '</h4>';
		echo '<h6 class="black-3">' . $trimmed_content . '</h6>';
		echo '</a>';
		echo '</div>';
		echo '</div>';
		echo '</div>';
		$postCount++;
	}
	echo '<div class="pagination-links">';
	archive_pagination( );
	echo '</div>';
} else {}


echo '</div>';
echo '</div>';

echo '</div>';
echo '</div>';
echo '</div>';

echo '</div>';
echo '</section>';