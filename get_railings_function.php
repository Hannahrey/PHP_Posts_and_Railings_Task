<?php

/**
*  function for calculating number of posts/railings
*
* @param $result_length - the length of fence
*/

define("SECTION", 1.6);
function get_railings(int $result_length) {
    if ((is_numeric($result_length)) && ($result_length >= 1.7)) {
        $num_railings = ceil($result_length / SECTION);
        $num_posts = ceil($result_length / SECTION) + 1;
        echo '<p> Length in metres: ' . $result_length . '</p><br><p> You need: ' . $num_railings . ' railings and ' . $num_posts . ' posts.</p><br/>';
    } else {
        echo '<p>Enter a length- it must be 1.7 metres or longer.</p>';
    }
}


