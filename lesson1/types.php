<?php

$x = 120;
$f = 120.10;
$b = true;
$str = 'some \' string';
$str = "some ' string";

echo gettype($x) . '<br>';
echo gettype($f) . '<br>';
echo gettype($b) . '<br>';
echo gettype($str) . '<br>';