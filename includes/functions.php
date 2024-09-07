<?php

function getAllProducts(PDO $dbh) {
    $stmt = $dbh->query('SELECT * FROM products');
    return $stmt->fetchAll();
}

function saveProduct(PDO $dbh, array $data) {
    $stmt = $dbh->prepare('INSERT INTO products (id, name, description, amount, price) VALUES(NULL, ?, ?, ?, ?)');
    $stmt->execute([$data['name'], $data['description'], $data['amount'], $data['price']]);
}