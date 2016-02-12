<?php
/**
 * @author Gutsulyak Vadim <guts.vadim@gmail.com>
 */

$arr = [34, 6, 44, 98, 10];

$arr[51] = 99;
$arr['color'] = 'green';

for($i = 0; $i < count($arr); $i++) {
    echo $arr[$i] . '; ';
}

echo '<br><br>';
foreach($arr as $key => $value) {
    echo $key . ': ' . $value . '; <br>';
}

echo '<br><br>';
foreach($arr as $value) {
    echo $value . '; ';
}