<?php

//ヘッダーの読み込み
require_once('C:\xampp\htdocs\php\general\header.php');
//DB情報の読み込み
require_once('C:\xampp\htdocs\php\general\db.php');


//$_SESSIONの削除
$_SESSION = array();
//COOKIY
if(isset($_COOKIE["PHPSESSID"])){
    setcookie("PHPSESSID" , '' ,time() - 1800 , '/');
}

session_destroy();

?>


<!DOCTYPE html>
<html>
<head>
<meta charset='UTF-8'>
</head>
<body>
<h1>ログアウト完了</h1>
</body>
</html>
