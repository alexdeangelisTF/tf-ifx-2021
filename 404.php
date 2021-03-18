<?php


get_header();

echo '<div id="main">';

echo '<div class="default-background">';
echo '</div>';

echo '<div class="page-container template-404">';

echo '<div class="template-404-wrap">';
echo '<div class="container">';
echo '<div class="row align-items-md-center flex-md-row-reverse">';
echo '<div class="col-12 col-md-7">';
echo '<div class="template-404__image">';
echo '<img src="' . get_template_directory_uri() . '/img/404.svg">';
echo '</div>';
echo '</div>';
echo '<div class="col-12 col-md-5">';
echo '<div class="template-404__introduction">';
echo '<h1 class="weight-700">Sorry, page not found</h1>';
echo '<h5>Sorry, this page could not be found.</h5>';
echo '<a class="button" href="' . get_site_url() . '">Return to home</a>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';

echo '</div>';

echo '</div>';

get_footer();

?>