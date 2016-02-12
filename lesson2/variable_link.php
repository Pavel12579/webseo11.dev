<?php
/**
 * @author Gutsulyak Vadim <guts.vadim@gmail.com>
 */

$a = 10;
$b = &$a;
echo 'b: ' . $b . '<br> a: ' . $a . '<br>';

$b = 4;
echo 'b: ' . $b . '<br> a: ' . $a . '<br>';