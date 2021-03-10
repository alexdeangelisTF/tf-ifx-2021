<?php
$thisObject = get_queried_object();
$pageID = $thisObject->ID;
$formSelector = get_field('form_selector', $pageID);


if ($formSelector) {
	echo '<div class="ifx-row-form">';
	echo '<div class="form__wrapper">';
	echo '<div class="form__single">';
	gravity_form(
			$formSelector, //The ID of the form
			$display_title = false,
			$display_description = false,
			$display_inactive = false,
			$field_values = null,
			$ajax = false,
			//$tabindex,
			$echo = true
	);
	echo '</div>';
	echo '</div>';
	echo '</div>';
}
