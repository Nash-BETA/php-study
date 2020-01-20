<?php

//ヘッダーの読み込み
require_once('C:\xampp\htdocs\php\general\header.php');
//DB情報の読み込み
require_once('C:\xampp\htdocs\php\general\db.php');

try{
    $pdo = new PDO(DB_DNS,DB_NAME,DB_PASS);
    $id  = $_SESSION['id'];
    echo $id;
}catch(PDOException $e){
    echo $e->getMessage;
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset='UTF-8'>
</head>
<body>
<form method="post" action="http://localhost/php/user/edit/">
    <h1>フォーム修正</h1>
    <input type="hidden" name="name" value=<?php $id;?>>    
    <input type="name" name="name">
    <input type="password" name="password">
<button type='submit' class="btn btn-default" name="edit">編集する</button>
</form>