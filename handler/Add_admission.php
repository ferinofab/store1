<?php
$pdo = require $_SERVER['DOCUMENT_ROOT'] . '/store1/db.php';
///store
$date_time = $_POST['date_time'];
$amount = $_POST['amount'];
$id =$_POST['id']??null;

if($id == null){
    $select = $_POST['select'];
    $pdo->query("update product set ammount_product = ammount_product + '$amount' where id = '$select' ");
    $pdo->query("insert into characteristics (date_time, product_id, amount) values ('$date_time', '$select', '$amount')");
    header("Location: /store1/index.php");

}else{
    $pdo->query("update product set ammount_product = ammount_product + '$amount' where id = '$id' ");
    $pdo->query("insert into characteristics (date_time, product_id, amount) values ('$date_time', '$id', '$amount')");
    header("Location: /store1/index.php");


}

