<?php

/**
* function for calculating length of fence, from the number of railings.
*
* @param $railings (number of railings)
*/

function get_length(int $railings) {
    $num_posts = $railings + 1;
    $length = ($railings * 1.5) + ($num_posts * 0.1);

    if ((is_numeric($railings)) && ($railings > 0)) {
        echo '<p>You have ' . $railings . ' railings' ;
        echo ' and ' . $num_posts . ' posts.</p> <br>' ;
        echo '<p>Therefore your total length of fence will be ' . $length . ' metres.</p>' ;
    } else {
        echo '<p>Enter a number! Must have at least one railing.</p>';
    }
}

