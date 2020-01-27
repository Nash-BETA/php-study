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
<!-- jqueryの読み込み -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<!--後ほどバリデーション付ける-->
<h1>ユーザー登録</h1>
<form action="./confirm/index.php" method = 'post'>
    <input type='text' name='name'><br>
    <input type='password' name='password'><br> 
    <label for='gender'>性別</label><br>
    <!--nameが同じだと同じラジオとして処理される-->
    <input type='Radio' name='gender' value='Male' checked>Male
    <input type='Radio' name='gender' value='Female'>Female<br>
    <input type='submit' name='submit'>
</form>


    <script type="text/javascript">

        var file = 'C:\xampp\htdocs\php\user\creat\index.php';
        $(function(){
            // Ajax button click
            $('#ajax').on('click',function(){
                $.ajax({
                    url:file,
                    type:'POST',
                    data:{
                        'name':$('#name').val(),
                        'passward':$('#passward').val()
                    }
                })
                // Ajaxリクエストが成功した時発動
                .done( (data) => {
                    $('.result').html(data);
                    console.log(data);
                })
                // Ajaxリクエストが失敗した時発動
                .fail( (data) => {
                    $('.result').html(data);
                    console.log(data);
                })
                // Ajaxリクエストが成功・失敗どちらでも発動
                .always( (data) => {

                });
            });
        });

    </script>

</body>
</html>