<?php

//ヘッダー
require_once('C:\xampp\htdocs\php\general\header.php');
//DB情報の読み込み
require_once('C:\xampp\htdocs\php\general\db.php');
?>



<!DOCTYPE html>
<html>
<head>
<meta charset='UTF-8'>
<title><?php echo 'hello'?></title>
</head>

<body>
<h1><?php echo 'TOP'?></h1>
<a href='./user/add'>新規会員登録</a>
<a href='./user/login'>ログイン</a>
</body>
</html>