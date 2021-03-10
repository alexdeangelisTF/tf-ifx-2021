<?php

$args = array(
	'posts_per_page'    => 1,
	'post_type'         => 'post',
	'category_name'			=> 'market-reports',
);


$the_query = new WP_Query( $args );

if ( $the_query->have_posts() ) {

	echo '<section>';
	echo '<div class="ifx-row ifx-row-market-report">';

	echo '<div class="container">';
	echo '<div class="row">';
	echo '<div class="col-12">';

	echo '<div class="news-market-report">';

	echo '<div class="market-report__title">';
	echo '<div class="caps">markets</div>';
	echo '<h2 class="weight-700">Market report</h2>';
	echo '<hr>';
	echo '</div>';

	while( $the_query->have_posts() ) {

		$the_query->the_post();

		$title = get_the_title();
		$title = str_replace("IFX Market Report: ","",$title);
		
		echo '<div class="market-report__content">';
		echo '<h4 class="weight-700">' . $title . '</h4>';
		echo '<h5 class="black-3">' . get_the_content() . '</h5>';
		echo '</div>';
	}
	
	echo '</div>';

	echo '</div>';
	echo '</div>';

	echo '</div>';
	echo '</section>';
	
} else { }
wp_reset_postdata();