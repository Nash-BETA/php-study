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
        header('Location: http://localhost/php/user/creat/confirm');
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


<title>新規登録</title>

</head>
<body>

<!--後ほどバリデーション付ける-->
<h1>ユーザー登録</h1>
<form action="<?php $_SERVER['PHP_SELF']?>" method = 'post'>
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