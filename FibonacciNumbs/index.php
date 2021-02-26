<?php
for($i = 0, $first = 0, $second = 1; $i < 62; $i++ ) {
    if ($i == 0) {
        echo $first . ", " . $second . ", ";
    }
    $third = $first + $second;
    $first = $second;
    $second = $third;
    if ($i < 61) {
        echo $third . ", ";
    } else {
        echo $third;
    }
}
