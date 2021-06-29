<script>
    
function fun() {
    //This is the start of the Ajax request
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange=function() {
        if(this.readyState == 4) {
            // The myArr variable parses the JSON text string into a JavaScript object
            var myArr = JSON.parse(this.responseText);
            // The rates variable gets the rates property from the myArr JavaScript object, which is in itself a JavaScript object
            var rates = myArr.rates;
            
            <?php
            // Here we start the foreach statement within the Ajax request, which will create the JavaScript for each row of the exchange table
            $currencyPairs = false;
						$currencyPairs = get_sub_field('currency_pairs');
            foreach($currencyPairs as $currencyPair) {
                $ifx_exchange_rates_currency_1 = false;
                $ifx_exchange_rates_currency_1 = $currencyPair['currency_1_name'];
                $ifx_exchange_rates_currency_2 = false;
                $ifx_exchange_rates_currency_2 = $currencyPair['currency_2_name'];
                $ifx_exchange_rates_currency_pair_code = false;
                $ifx_exchange_rates_currency_pair_code = $ifx_exchange_rates_currency_1 . $ifx_exchange_rates_currency_2;
                ?>
            
                // The bid_currentValue variable gets the value of whatever is in the 'data-value' attribute for that currency pair's bid column, e.g. #GBPEUR_bid
                var bid_currentValue = jQuery('#<?php echo $ifx_exchange_rates_currency_pair_code; ?>_bid').attr("data-value");
                // The bid_newValue variable gets the latest bid value in the rates JavaScript object
                var bid_newValue = rates.<?php echo $ifx_exchange_rates_currency_pair_code; ?>.bid;

                // This if statement compares the current and new values of the data for bid
                if (bid_currentValue > bid_newValue) {
                    // If the current value of bid is greater than the latest value of bid, add the 'down' class & remove the 'up' class
                    jQuery('#<?php echo $ifx_exchange_rates_currency_pair_code; ?>_bid').addClass('down');
                    jQuery('#<?php echo $ifx_exchange_rates_currency_pair_code; ?>_bid').removeClass('up');
                } else if (bid_currentValue < bid_newValue) {
                    // If the current value of bid is less than the latest value of bid, add the 'up' class & remove the 'down' class
                    jQuery('#<?php echo $ifx_exchange_rates_currency_pair_code; ?>_bid').addClass('up');
                    jQuery('#<?php echo $ifx_exchange_rates_currency_pair_code; ?>_bid').removeClass('down');
                } else {
                    // Otherwise, e.g. if the current and new values of bid are the same, remove both the 'up' and down' classes
                    jQuery('#<?php echo $ifx_exchange_rates_currency_pair_code; ?>_bid').removeClass('up');
                    jQuery('#<?php echo $ifx_exchange_rates_currency_pair_code; ?>_bid').removeClass('down');
                }
                // The bid_newValue_strip variable checks the new value & limits the number to 6 characters, e.g. '11.377'
                var bid_newValue_strip = bid_newValue.substr(0, 6);
                // We then add the bid_newValue_strip variable to both the inner HTML of the correct row within the bid column & the data-value attribute of the same row,
                // in order to then use that as the current value once the Ajax loops again
                document.getElementById("<?php echo $ifx_exchange_rates_currency_pair_code; ?>_bid").innerHTML = '<span>' + bid_newValue_strip + '</span>';
                jQuery('#<?php echo $ifx_exchange_rates_currency_pair_code; ?>_bid').attr('data-value', bid_newValue_strip);


                // The ask_currentValue variable gets the value of whatever is in the 'data-value' attribute for that currency pair's ask column, e.g. #GBPEUR_ask
                var ask_currentValue = jQuery('#<?php echo $ifx_exchange_rates_currency_pair_code; ?>_ask').attr("data-value");
                // The ask_newValue variable gets the latest ask value in the rates JavaScript object
                var ask_newValue = rates.<?php echo $ifx_exchange_rates_currency_pair_code; ?>.ask;

                // This if statement compares the current and new values of the data for ask
                if (ask_currentValue > ask_newValue) {
                    // If the current value of ask is greater than the latest value of ask, add the 'down' class & remove the 'up' class
                    jQuery('#<?php echo $ifx_exchange_rates_currency_pair_code; ?>_ask').addClass('down');
                    jQuery('#<?php echo $ifx_exchange_rates_currency_pair_code; ?>_ask').removeClass('up');
                } else if (ask_currentValue < ask_newValue) {
                    // If the current value of ask is less than the latest value of ask, add the 'up' class & remove the 'down' class
                    jQuery('#<?php echo $ifx_exchange_rates_currency_pair_code; ?>_ask').addClass('up');
                    jQuery('#<?php echo $ifx_exchange_rates_currency_pair_code; ?>_ask').removeClass('down');
                } else {
                    // Otherwise, e.g. if the current and new values of ask are the same, remove both the 'up' and down' classes
                    jQuery('#<?php echo $ifx_exchange_rates_currency_pair_code; ?>_ask').removeClass('up');
                    jQuery('#<?php echo $ifx_exchange_rates_currency_pair_code; ?>_ask').removeClass('down');
                }
                // The ask_newValue_strip variable checks the new value & limits the number to 6 characters, e.g. '11.377'
                var ask_newValue_strip = ask_newValue.substr(0, 6);
                // We then add the ask_newValue_strip variable to both the inner HTML of the correct row within the ask column & the data-value attribute of the same row,
                // in order to then use that as the current value once the Ajax loops again
                document.getElementById("<?php echo $ifx_exchange_rates_currency_pair_code; ?>_ask").innerHTML = '<span>' + ask_newValue_strip + '</span>';
                jQuery('#<?php echo $ifx_exchange_rates_currency_pair_code; ?>_ask').attr('data-value', ask_newValue_strip);


                // The percent_currentValue variable gets the value of whatever is in the 'data-value' attribute for that currency pair's percentage column, e.g. #GBPEUR_percentage
                var percent_currentValue = jQuery('#<?php echo $ifx_exchange_rates_currency_pair_code; ?>_percentage').attr("data-value");
                // The percent_newValue variable gets the latest ask value in the rates JavaScript object
                var percent_newValue = rates.<?php echo $ifx_exchange_rates_currency_pair_code; ?>.percentage;

                // This if statement compares the current and new values of the data for percentage
                if (percent_currentValue > percent_newValue) {
                    // If the current value of percentage is greater than the latest value of percentage, add the 'down' class & remove the 'up' class
                    jQuery('#<?php echo $ifx_exchange_rates_currency_pair_code; ?>_percentage').addClass('down');
                    jQuery('#<?php echo $ifx_exchange_rates_currency_pair_code; ?>_percentage').removeClass('up');
                } else if (percent_currentValue < percent_newValue) {
                    // If the current value of percentage is less than the latest value of percentage, add the 'up' class & remove the 'down' class
                    jQuery('#<?php echo $ifx_exchange_rates_currency_pair_code; ?>_percentage').addClass('up');
                    jQuery('#<?php echo $ifx_exchange_rates_currency_pair_code; ?>_percentage').removeClass('down');
                } else {
                    // Otherwise, e.g. if the current and new values of percentage are the same, remove both the 'up' and down' classes
                    jQuery('#<?php echo $ifx_exchange_rates_currency_pair_code; ?>_percentage').removeClass('up');
                    jQuery('#<?php echo $ifx_exchange_rates_currency_pair_code; ?>_percentage').removeClass('down');
                }

                // Before we can add the percentage value to the table, we will need to make sure that it is the correct length, e.g. '1.23' or '-1.23'
                // As you can tell from the examples, the negative value is longer than the positive value, so we will need to check if it is positive or negative first,
                // before adding the correct amount of zeros to make it the correct length.
                // The hyphen_included variable tests to see if there is a hyphen in the value. We use toString() to convert the interger or float to a string as the includes() method only allows strings to be tested
                var hyphen_included = percent_newValue.toString().includes("-");
                // If the hyphen_included variable is true, we now need to test for the length.
                if (hyphen_included) {
                    if (percent_newValue.toString().length == '2') {
                        // If the length of percent_newValue is 2, e.g. '-1', add '.00'
                        percent_newValue = percent_newValue.toString() + ".00";
                    } else if (percent_newValue.toString().length == '4') {
                        // If the length of percent_newValue is 4, e.g. '-1.2', add '0'
                        percent_newValue = percent_newValue.toString() + "0";
                    } else {
                        // Otherwise, the length should be fine. The length is not going to be 1 e.g. '-', and its not going to be 3 e.g. '-1.'
                    }
                } else {
                    if (percent_newValue.toString().length == '1') {
                        // If the length of percent_newValue is 1, e.g. '1', add '.00'
                        percent_newValue = percent_newValue.toString() + ".00";
                    } else if (percent_newValue.toString().length == '3') {
                        // If the length of percent_newValue is 3, e.g. '1.2', add '0'
                        percent_newValue = percent_newValue.toString() + "0";
                    } else {
                        // Otherwise, the length should be fine. The length is not going to be 2 e.g. '1.'
                    }
                }
                // We then add the percent_newValue variable to both the inner HTML of the correct row within the percent column & the data-value attribute of the same row,
                // in order to then use that as the current value once the Ajax loops again
                document.getElementById("<?php echo $ifx_exchange_rates_currency_pair_code; ?>_percentage").innerHTML = '<span>' + percent_newValue + '</span>';
                jQuery('#<?php echo $ifx_exchange_rates_currency_pair_code; ?>_percentage').attr('data-value', percent_newValue);

                // The timeNow variable gets the date now, with hourNow, minuteNow & secondNow getting the correct value within timeNow
                // We use slice() in order to put a 0 to the start of the value if the hour, minute or second is only 1 character long
                var timeNow = new Date();
                var hourNow = timeNow.getHours();
                hourNow = ("0" + hourNow).slice(-2);
                var minuteNow = timeNow.getMinutes();
                minuteNow = ("0" + minuteNow).slice(-2);
                var secondNow = timeNow.getSeconds();
                secondNow = ("0" + secondNow).slice(-2);


                // This if statement checks if any value from bid, ask or percent has changed, & if it has the new time will be added to the time column in the correct row
                if (bid_currentValue > bid_newValue || bid_currentValue < bid_newValue || ask_currentValue > ask_newValue || ask_currentValue < ask_newValue || percent_currentValue > percent_newValue || percent_currentValue < percent_newValue) {
                    document.getElementById("<?php echo $ifx_exchange_rates_currency_pair_code; ?>_time").innerHTML = "<span>" + hourNow + ":" + minuteNow + ":" + secondNow + '</span>';
                } else {}
            
            <?php
            } //End for each
            ?>
            
        }
    }
    // This gets the JSON file from the given URL
    xhttp.open("GET","<?php echo $jsonURL; ?>",true);
    xhttp.send(null);
}
setInterval(function(){
    fun();
}, 3000);
    

    
</script>