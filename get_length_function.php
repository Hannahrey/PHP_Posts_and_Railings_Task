<?php

//function for calculating length
function get_length(int $result) {
    $num_posts = $result + 1;
    $length = ($result * 1.5) + ($num_posts * 0.1);

    if ((is_numeric($result)) && ($result > 0)) {
        echo '<p>You have ' . $result . ' railings' ;
        echo ' and ' . $num_posts . ' posts.</p> <br>' ;
        echo '<p>Therefore your total length of fence will be ' . $length . ' metres.</p>' ;
    } else {
        echo '<p>Enter a number! Must have at least one railing.</p>';
    }
}

