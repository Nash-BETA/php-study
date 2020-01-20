<?php

//ヘッダーの読み込み
require_once('C:\xampp\htdocs\php\general\header.php');
//DB情報の読み込み
require_once('C:\xampp\htdocs\php\general\db.php');


if(isset($_POST['login'])){
    $name = $_POST['name'];
    $pass = $_POST['password'];
    try{
        $pdo = new PDO(DB_DNS,DB_NAME,DB_PASS);
        $query = "SELECT * FROM users WHERE name='$name'";
        $result = $pdo->query($query);
        if($row = $result->fetch(PDO::FETCH_ASSOC)){
            if($pass == $row['password']){
                $_SESSION['name'] = $name;
                $_SESSION['id'] = $row['id'];
                header('Location: http://localhost/php');
                exit();  // 処理終了
            }else {
                // 認証失敗
                $errorMessage = 'ユーザーIDあるいはパスワードに誤りがあります。';
            }
        }
    }catch(PDOException $e){
        echo $e->getMessage;

    }
}


?>


<!DOCTYPE html>
<html>
<head>
<meta charset='UTF-8'>
</head>
<body>

<form method="post" action="http://localhost/php/user/login/">
    <h1>ログインフォーム</h1>
    <div class="form-group">
        <input type="name"  class="form-control" name="name" placeholder="name" required />
        <input type="password"  class="form-control" name="password" placeholder="password" required />
    </div>
    <button type="submit" class="btn btn-default" name="login">ログインする</button>
</form>
</body>
</html>
