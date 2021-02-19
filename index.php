<?php

get_header();
echo '<section>';
echo '<div class="container">';
echo '<div class="row">';
echo '<div class="col-12">';

echo '<h1>This is a H1 element</h1>';
echo '<h1 class="blue-1">This is a blue H1 element</h1>';
echo '<h2>This is a H2 element</h2>';
echo '<h3>This is a H3 element</h3>';
echo '<h4>This is a H4 element</h4>';
echo '<h5>This is a H5 element</h5>';
echo '<h6>This is a H6 element</h6>';
echo '<p>This is a p element</p>';
echo '<p>This is a p element with <a href="#">a link</a></p>';
echo 'I have no wrapping element!<br/>';
echo '<label>This is a label element</label>';
echo '<ul><li>This is a li in a ul</li></ul>';
echo '<button>This is a button element</button>';
echo '<a href="#" class="button">This is a link with the button class</a>';
echo '<input type="submit" value="This is a submit input">';

echo '</div>';
echo '</div>';
echo '</div>';
echo '</section>';
get_footer();

?>