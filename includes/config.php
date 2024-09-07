<?php

$options = [
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
];

try {
    $dbh = new PDO('mysql:host=localhost;dbname=praktikum;port=3306', 'root', 'root', $options);
}
catch(Exception $e) {
    print 'Probleme mit der Datenbank!';
    die(); // Programm beenden
}