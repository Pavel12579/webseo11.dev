<?php
/**
 * @author Gutsulyak Vadim <guts.vadim@gmail.com>
 */

echo "PI: " . M_PI . '<br>';
echo 'Pages: ' . ceil(55 / 10) . '<br>';
echo '123123 to hex = ' . dechex(123123) . '<br>';
echo 'Current date: ' . date('d - F - Y - l') . '<br>';

$pageCount = 10;
$currentPage = 5;

echo sprintf('Page %d of %d', $currentPage, $pageCount);