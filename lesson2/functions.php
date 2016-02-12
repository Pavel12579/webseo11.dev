<?php

/**
 * @author Gutsulyak Vadim <guts.vadim@gmail.com>
 * @param $a
 * @param $b
 */
function sum($a, $b) {
    return $a + $b;
}

$result = sum(19, 8);
echo sum(19, 8);

function sumAll() {
    $args = func_get_args();
    $result = 0;

    foreach($args as $argument) {
        $result += $argument;
    }

    return $result;
}

echo '<br>';
echo sumAll(10, 4, 5, 8, 43);