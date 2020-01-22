<header>
<?php
if (!isset($_SESSION)) {
    session_start();
    }

if (isset($_SESSION["name"])) {
    //ログイン中
    echo $_SESSION["name"] . "様";
    ?>
    <a href='http://localhost/php'>home</a>
    <a href='http://localhost/php\user\edit\index.php'>edit</a>
    <a href='http://localhost/php\user\logout\index.php'>削除</a>
    <?php
} else {
    //ログアウト
    ?>
    <a href='http://localhost/php'>home</a>
    <br>
    <a href='http://localhost\php\user\creat'>新規会員登録</a>
    <a href='http://localhost\php\user\login' >ログイン</a>
    <?php    
}
?>

<link rel="stylesheet" href=<?php echo 'http://' . $_SERVER['SERVER_NAME']."/php/css/header.css"?>>

</header>
