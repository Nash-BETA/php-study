<?php

//ヘッダーの読み込み
require_once('C:\xampp\htdocs\php\general\header.php');
//DB情報の読み込み
require_once('C:\xampp\htdocs\php\general\db.php');

?>

<!DOCTYPE html>
<html>
<head>
<meta charset='UTF-8'>


<title>新規登録</title>

</head>
<body>

<!--後ほどバリデーション付ける-->
<h1>ユーザー登録</h1>
<form action="./confirm/index.php" method = 'post'>
    <input type='text' name='name'><br>
    <input type='text' name='password'><br> 
    <label for='gender'>性別</label><br>
    <!--nameが同じだと同じラジオとして処理される-->
    <input type='Radio' name='gender' value='Male' checked>Male
    <input type='Radio' name='gender' value='Female'>Female<br>
    <input type='submit' name='submit'>
</form>
</body>
</html>