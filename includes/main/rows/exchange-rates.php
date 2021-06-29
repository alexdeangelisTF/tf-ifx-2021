<?php
$heading = false;
$heading = get_sub_field('heading');
$text = false;
$text = get_sub_field('text');
$jsonURL = false;
$jsonURL = get_sub_field('json_url');

echo '<div class="ifx-row-wrapper">';
echo '<div class="container">';

echo '<div class="exchange-rates__wrapper">';

echo '<div class="row justify-content-center">';
echo '<div class="col-10 col-lg-6">';
echo '<div class="exchange-rates__introduction">';
if ($heading) {
	echo '<h1 class="weight-700">';
	echo $heading;
	echo '</h1>';
}
if ($text) {
	echo '<h5 class="black-3">';
	echo $text;
	echo '</h5>';
}
echo '</div>';
echo '</div>';
echo '</div>';

if ($jsonURL) {
	//echo '<div class="row currency-pairs-row">';

	?>
	

<div class="row">
	<div class="col-12">
		<div id="exchangeRatesComponent">
			<div id="animContent" class="animContent">
				<table class="ratesTable">
					<thead>
						<tr>
							<th id="currency">Currency</th>
							<th id="bid">Bid</th>
							<th id="ask">Ask</th>
							<th id="percent">%</th>
							<th id="high">High</th>
							<th id="low">Low</th>
							<th id="open">Open</th>
							<th id="time">UK Time</th>
						</tr>
					</thead>

					<tbody>

						<?php
	
						$current_dateTime = false;
						//This gets the current time
						$current_dateTime = new DateTime();
						if ( is_object($current_dateTime) ) {
								$hour = $current_dateTime->format('H');
								$minute = $current_dateTime->format('i');
								$second = $current_dateTime->format('s');
						} else {} 
						$the_time = $hour . ':' . $minute . ':' . $second;

						$request = false;
						/*THE JSON CALL!*/
						$request = wp_remote_get( $jsonURL );

						if( is_wp_error( $request ) ) {
								return false; // Bail early
						}

						$body = wp_remote_retrieve_body( $request );
						$data = json_decode( $body );

						if( ! empty( $data ) ) {
								$json_rates = $data->rates;
								$json_active = true;
						} else {
								$json_active = false;
						}
						$pair_count = 0;

						include __DIR__ . '/exchange-rates/ajax-json.php';

						foreach($currencyPairs as $currencyPair) {

							$ifx_exchange_rates_currency_1 = false;
							$ifx_exchange_rates_currency_1 = $currencyPair['currency_1_name'];
							$ifx_exchange_rates_currency_2 = false;
							$ifx_exchange_rates_currency_2 = $currencyPair['currency_2_name'];
							$ifx_exchange_rates_currency_pair_code = false;
							$ifx_exchange_rates_currency_pair_code = $ifx_exchange_rates_currency_1 . $ifx_exchange_rates_currency_2;

							$ifx_exchange_rates_currency_1_img = false;
							$ifx_exchange_rates_currency_1_img = wp_get_attachment_url($currencyPair['currency_1_flag']);
							$ifx_exchange_rates_currency_2_img = false;
							$ifx_exchange_rates_currency_2_img = wp_get_attachment_url($currencyPair['currency_2_flag']);

							//This gets the correct JSON object from the currency pair specified
							$currency_pair_object = $json_rates->$ifx_exchange_rates_currency_pair_code;

							if ($currency_pair_object) {
								$currency_pair_bid = substr($currency_pair_object->bid,0,6);
								$currency_pair_ask = substr($currency_pair_object->ask,0,6);
								$currency_pair_open = substr($currency_pair_object->open,0,6);
								$currency_pair_low = substr($currency_pair_object->low,0,6);
								$currency_pair_high = substr($currency_pair_object->high,0,6);
								$currency_pair_net = substr($currency_pair_object->net,0,6);
								$currency_pair_percentage = substr($currency_pair_object->percentage,0,4);

								// We will need to check the length of the percentage to make sure that its 3 numbers long.
								// First we put the length of the percent into a variable.
								$currency_percent_length = strlen($currency_pair_percentage);

								// Then we check whether the percentage has a '-' in the string.
								// This is to check whether the number is a negative number.
								$hyphen_check = false;
								$hyphen_check = strpos($currency_pair_percentage,"-");

								// Here we do an if statement to check if a hyphen has been found.
								// We do '$hyphen_check === 0' because the hypen will always come at the front of the string, therefore the 0 position.
								// If this check fails, it means that the hypen has not been found at the start of the string.
								if ($hyphen_check === 0) {
										// Once a hyphen has been found, we need to create an extra if statement, to test for the length of the string, and add 0s.
										if ($currency_percent_length == 4) {
												// If the length is 4, e.g. '-1.1', add '0' to the end of this string
												$currency_pair_percentage = $currency_pair_percentage . '0';
										} elseif ($currency_percent_length == 2) {
												// If the length is 2, e.g. '-1' add '.00' to the end of this string
										} else {
												// If the length is anything else i.e. not a 4 or 5 length string, do nothing.
												// There will never be a case of length 1, e.g. '-', or length 3, e.g. '-1.'.
												// Anything longer has already been trimmed by the substr() function above.
										}
								} else {
										// If a hyphen has not been found, this extra if statement will 
										if ($currency_percent_length == 1) {
												// If the length of the string is 1, e.g. '1', add '.00' to the end of this string
												$currency_pair_percentage = $currency_pair_percentage . '.00';
										} elseif($currency_percent_length == 3) {
												// If the length of the string is 3, e.g. '1.1', add '0' to the end of this string
												$currency_pair_percentage = $currency_pair_percentage . '0';
										} else {
												// If the length is anything else i.e. not a 1 or 3 length string, do nothing.
												// There will never be a case of length 2, e.g. '1.'
												// Anything longer has already been trimmed by the substr() function above.
										}
								}

								?>

							<tr data-pairs="<?php echo $ifx_exchange_rates_currency_pair_code; ?>" id="#tableRow">
								<td><span class="currency-flag currency-flag-<?php echo $ifx_exchange_rates_currency_1 . '_' . $pair_count; ?>"></span><?php echo $ifx_exchange_rates_currency_1; ?><span class="currency-flag currency-flag-<?php echo $ifx_exchange_rates_currency_2 . '_' . $pair_count; ?>"></span><?php echo $ifx_exchange_rates_currency_2; ?></td>
								<td data-value="<?php echo $currency_pair_bid; ?>" class="bid" id="<?php echo $ifx_exchange_rates_currency_pair_code; ?>_bid"><?php echo $currency_pair_bid; ?></td>
								<td data-value="<?php echo $currency_pair_ask; ?>" class="ask" id="<?php echo $ifx_exchange_rates_currency_pair_code; ?>_ask"><?php echo $currency_pair_ask; ?></td>
								<td data-value="<?php echo $currency_pair_percentage; ?>" class="percentage"  id="<?php echo $ifx_exchange_rates_currency_pair_code; ?>_percentage"><?php echo $currency_pair_percentage; ?></td>
								<td data-value="<?php echo $currency_pair_high; ?>" class="high"><?php echo $currency_pair_high; ?></td>
								<td data-value="<?php echo $currency_pair_low; ?>" class="low"><?php echo $currency_pair_low; ?></td>
								<td data-value="<?php echo $currency_pair_open; ?>" class="open"><?php echo $currency_pair_open; ?></td>
								<td class="time" id="<?php echo $ifx_exchange_rates_currency_pair_code; ?>_time"><?php echo $the_time; ?></td>
								<?php if ($ifx_exchange_rates_currency_1_img || $ifx_exchange_rates_currency_2_img) { ?>
								<style>
										.currency-flag-<?php echo $ifx_exchange_rates_currency_1 . '_' . $pair_count;; ?> {
												background-image:url(<?php echo $ifx_exchange_rates_currency_1_img; ?>);
										}
										.currency-flag-<?php echo $ifx_exchange_rates_currency_2 . '_' . $pair_count;; ?> {
												background-image:url(<?php echo $ifx_exchange_rates_currency_2_img; ?>);
										}
								</style>
								<?php } else {} ?>
							</tr>
						<?php
							} else { }
							$pair_count++;
						}

						?>

					</tbody>
				</table>
			<?php 
			// If the URL can't find any JSON, show this message
			if (!$json_active) { ?>
			<p>Rates are temporarily unavailable. Please try again later.</p>
			<?php } else {} ?>
			</div>
		</div>
		<?php
		 $termsConditionsText = get_sub_field('terms_conditions_text');
		 if ($termsConditionsText) {
			 echo '<div class="exchange-rates__toc">';
			 echo wpautop($termsConditionsText);
			 echo '</div>';
		 }
		?>
	</div>
</div>

<?php

	//echo '</div>';
}

echo '</div>';

echo '</div>';
echo '</div>';