<?php
$pdo = require $_SERVER['DOCUMENT_ROOT'].'/store1/db.php';
///store

$name = $_POST['name'];
$price = $_POST['price'];
$article = $_POST['article'];
$amount = $_POST['amount'];

$pdo->query("insert into product (name, price, article, ammount_product) values ('$name', '$price', '$article', '$amount')");
header("Location: /store1/index.php");

