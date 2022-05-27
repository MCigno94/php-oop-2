<?php

include_once __DIR__ . '/Models/Shop.php';
include_once __DIR__ . '/Models/Products.php';
include_once __DIR__ . '/Models/Croquettes.php';
include_once __DIR__ . '/Models/User.php';
include_once __DIR__ . '/Models/RegisteredUser.php';
include_once __DIR__ . '/Models/CreditCard.php';

$mattia = new RegisteredUser('Mattia','Cigno','Via Roma 1','mattiacigno@example.com','prova1');

var_dump($mattia);
