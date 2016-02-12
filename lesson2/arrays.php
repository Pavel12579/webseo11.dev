<?php
/**
 * @author Gutsulyak Vadim <guts.vadim@gmail.com>
 */

$arr = [2, 3, 12, 55, 'apple'];
// PHP 5.3 and <
//$arr = array(2, 3, 12, 55, 'apple');

echo $arr[0];
echo '<br>';
echo $arr[4];
echo '<br>';
$arr[101] = 213214;
array_push($arr, 'hello');
var_dump($arr);

echo '<br> Array size:' . count($arr) . '<br>';

// Ассоциативные массивы
$assoc = [
    'color' => 'green',
    'fruit' => 'apple'
];

echo '<br>';
echo $assoc['color'];