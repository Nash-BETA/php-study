<?php
//ヘッダーの読み込み
require_once('C:\xampp\htdocs\php\general\header.php');
//DB情報の読み込み
require_once('C:\xampp\htdocs\php\general\db.php');

if(isset($_POST['submit'])){
    $name   = $_POST['name'];
    $pass   = $_POST['password'];
    $gender = $_POST['gender'];
    try{
        $pdo                = new PDO(DB_DNS, DB_NAME, DB_PASS);
        $sql                = "INSERT INTO users(name,password,gender) VALUES ('$name','$pass','$gender')";
        $res                = $pdo->query($sql);
        $_SESSION['name']   = $name;
        //$_SESSION['id']を定義するためくえりを叩いてる
        $query           = "SELECT * FROM users WHERE name='$name'";
        $result          = $pdo->query($query);
        $row             = $result->fetch(PDO::FETCH_ASSOC);
        $_SESSION['id']  = $row['id'];
    }catch(PDOException $e){
        echo $e->getMessage();
        die();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset='UTF-8'>


<title>新規登録ぞっす。もっと送る</title>
<p>新規登録ぞっす。もっと送る</p>
内容確認
<p>名前：<?php echo $name;?></p>

<!--テーブル増やしたい-->
<a>追加情報</a>
<form action="../complete/index.php" method = 'post'>
    <input >
</form>