<?php

//ヘッダーの読み込み
require_once('C:\xampp\htdocs\php\general\header.php');
//DB情報の読み込み
require_once('C:\xampp\htdocs\php\general\db.php');


if(isset($_POST['edit']) || isset($_PUT['edit'])){
    $id   = $_SESSION['id'];
    if(empty(!$_POST['name']) && empty(!$_POST['password'])){
        $pass = $_POST['password'];
        $name = $_POST['name'];
        try{
            $pdo    = new PDO(DB_DNS,DB_NAME,DB_PASS);
            $query  = "UPDATE users SET name = '$name', password = '$pass'  WHERE id='$id' ";
            $resurt = $pdo->query($query)->fetch(PDO::FETCH_ASSOC);
            $_SESSION['name'] = $name;
            header('Location: http://localhost/php');
        }catch(PDOException $e){
            echo $e->getMessage;
        }
    }else{
        echo "名前・パスワード両方入力ください";
    }  
}elseif(isset($_POST['send'])  || isset($_PUT['send'])){
    $id   = $_SESSION['id'];
    try{
        $pdo    = new PDO(DB_DNS,DB_NAME,DB_PASS);
        $filename = $_POST['file'];
        $query  = "UPDATE users SET image = '$filename'  WHERE id='$id' ";
        $resurt = $pdo->query($query)->fetch(PDO::FETCH_ASSOC);
        header('Location: http://localhost/php');
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


<form method="post" action="http://localhost/php/user/edit/">
    <input type="file" name="file"><br><br>
<button type='submit' class="btn btn-default" name="send">画像を変える</button>
</form>

<form method="post" action="http://localhost/php/user/edit/">
    <h1>フォーム修正</h1>
    <input type="name" name="name"><br><br>
    <input type="password" name="password"><br><br>
<button type='submit' class="btn btn-default" name="edit">編集する</button>
</form>
</body>
</html>