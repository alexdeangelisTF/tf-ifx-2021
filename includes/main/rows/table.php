<?php
$heading = false;
$heading = get_sub_field('heading');
$preheading = false;
$preheading = get_sub_field('preheading');
$text = false;
$text = get_sub_field('text');

$tableType = false;
$tableType = get_sub_field('table_type');

echo '<div class="ifx-row-wrapper">';
echo '<div class="container">';

echo '<div class="table__wrapper">';

echo '<div class="row">';

echo '<div class="col-12 col-md-8 col-lg-6">';
echo '<div class="table__introduction">';
if ($preheading) {
	echo '<div class="caps">';
	echo $preheading;
	echo '</div>';
}
if ($heading) {
	echo '<h2 class="weight-700">';
	echo $heading;
	echo '</h2>';
}
if ($text) {
	echo '<h5 class="black-3">';
	echo $text;
	echo '</h5>';
}
echo '</div>';
echo '</div>';

echo '</div>';

if ($tableType) {
	echo '<div class="row">';
	
	echo '<div class="col-12">';
	
	echo '<div class="table__single">';
	
	$rows = false;
	
	if ($tableType == 'team_members') {
		$rows = get_sub_field('team_members');
	} elseif ($tableType == 'jobs') {
		$rows = get_posts(array(
			'fields'          => 'ids',
			'posts_per_page'  => -1,
			'post_type' => 'careers'
		));
	}
	
	if ($rows) {
		foreach($rows as $row) {
			
			if ($tableType == 'team_members') {
				$col1 = $row['name'];
				$col2 = $row['job_title'];
				$col2Extra = false;
				$col3 = $row['location'];
				$link = $row['linkedin'];
				$linkTarget = '_blank';
			} elseif ($tableType == 'jobs') {
				$col1 = get_the_title($row);
				$col2 = get_field('careers_team',$row);
				$col2Extra = '<span> - ' . get_field('careers_location',$row) . '</span>';
				$col3 = get_field('careers_location',$row);
				$link = get_the_permalink($row);
				$linkTarget = '_self';
			}
			echo '<a href="' . $link . '" target="' . $linkTarget . '">';
			echo '<div class="table__row">';
			echo '<div class="row align-items-center">';
			echo '<div class="col-10 col-md-3">';
			echo '<h6 class="col1">' . $col1 . '</h6>';
			echo '</div>';
			echo '<div class="col-10 col-md-4">';
			echo '<h6 class="col2">' . $col2 . $col2Extra . '</h6>';
			echo '</div>';
			echo '<div class="col-12 col-md-4 d-none d-md-block">';
			echo '<h6 class="col3">' . $col3 . '</h6>';
			echo '</div>';
			echo '<div class="col-12 col-md-1 arrow-col">';
			echo '<i class="fas fa-arrow-right"></i>';
			echo '</div>';
			echo '</div>';
			echo '</div>';
			echo '</a>';
		}
	}
	
	echo '</div>';
	
	echo '</div>';
	
	echo '</div>';
}


echo '</div>';

echo '</div>';
echo '</div>';