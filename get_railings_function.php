<?php

define("SECTION", 1.6);

//function for calculating number of posts/railings
function get_railings($result_length) {
    if ((is_numeric($result_length)) && ($result_length >= 1.7)) {
        $num_railings = ceil($result_length / SECTION);
        $num_posts = ceil($result_length / SECTION) + 1;
        echo '<p> Length in metres: ' . $result_length . '</p><br><p> You need: ' . $num_railings . ' railings and ' . $num_posts . ' posts.</p><br/>';
    } else {
        echo '<p>Enter number! Needs to be 1.7 metres or longer.</p>';
    }
}


