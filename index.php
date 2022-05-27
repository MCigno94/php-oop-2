<?php

include_once __DIR__ . '/Models/Shop.php';
include_once __DIR__ . '/Models/Products.php';
include_once __DIR__ . '/Models/Croquettes.php';
include_once __DIR__ . '/Models/User.php';
include_once __DIR__ . '/Models/RegisteredUser.php';
include_once __DIR__ . '/Models/CreditCard.php';

$mattia = new RegisteredUser(33115566,'Via Roma 1','mattiacigno@example.com','prova1');

$mattia->name = 'Mattia Cigno';
var_dump($mattia);



$products =  new Croquettes('Animali', 10, 5, true, 'nuove crocchette rosse', ['proteine', 'carbo', 'grassi']);

var_dump($products);
var_dump('Prezzo pieno: ' . $products->getPrice());
$products->name = 'Crocchette - Royal Canin';

try {
    $products->discountPartnership($mattia, 10);
    echo ' - Prezzo scontato: ' . $products->getPrice();
} catch (Exception $e) {
    echo $e->getMessage();
}
var_dump($products);
