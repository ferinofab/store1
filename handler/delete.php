<?php
$pdo = require $_SERVER['DOCUMENT_ROOT'].'/store/store/db.php';

$id = $_GET['id'];
$pdo->query("delete from characteristics where id='$id'");
header("Location: /store/store/index.php");
