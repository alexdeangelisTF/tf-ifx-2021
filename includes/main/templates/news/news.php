<?php

echo '<section>';
echo '<div class="ifx-row ifx-row-' . $templateName . '">';

echo '<div class="container">';
echo '<div class="row">';
echo '<div class="col-12">';

echo '<div class="news-row-' . $templateName . '">';
echo '<div class="row">';

$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array(
	'posts_per_page'    => get_option( 'posts_per_page' ),
	'post_type'         => 'post',
	'category_name'			=> $templateName,
	'paged' => $paged,
);
$postCount = 1;
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ) {
	while( $the_query->have_posts() ) {
		$the_query->the_post();
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
		echo '<div class="news-image">';
		echo '<a href="' . get_the_permalink() . '">';
		echo '<div class="ratio ' . $imageSize . '" style="background-image:url(' . $url . ')">';
		echo '<div class="content"></div>';
		echo '</div>';
		echo '</a>';
		echo '</div>';
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
	wp_query_pagination( $the_query );
	echo '</div>';
} else {}
wp_reset_postdata();

echo '</div>';
echo '</div>';

echo '</div>';
echo '</div>';
echo '</div>';

echo '</div>';
echo '</section>';