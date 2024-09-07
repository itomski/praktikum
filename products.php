<?php

require_once './includes/config.php';
require_once './includes/functions.php';

$nav = 'products';
$headline = 'Produkte';
$subtpl = './templates/product-table.html';

$products = getAllProducts($dbh);

/*
echo '<pre>';
print_r($products);
echo '</pre>';
*/

require_once './templates/standard.html';