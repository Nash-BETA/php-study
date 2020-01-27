<?php

//ヘッダーの読み込み
require_once('C:\xampp\htdocs\php\general\header.php');
//DB情報の読み込み
require_once('C:\xampp\htdocs\php\general\db.php');


try{
    $pdo = new PDO(DB_DNS,DB_NAME,DB_PASS);

}catch(PDOException $e){

}


?>
<!DOCTYPE html>
<html>
<head>
<meta charset='UTF-8'>


<title>完了</title>

</head>
<body>
