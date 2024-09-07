<?php

require_once './includes/config.php';
require_once './includes/functions.php';

$nav = 'admin';

$headline = 'Admin';
$subtpl = './templates/product-form.html';

if(count($_POST) > 0) {

    // Daten validieren
    saveProduct($dbh, $_POST);

    /*
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';
    */

    header('Location: products.php'); // Umleiten nach dem Speichern
    die();
}

require_once './templates/standard.html';