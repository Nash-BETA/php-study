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

<h1><?php echo 'TOP'?></h1>
<a href='./user/creat'>新規会員登録</a>
<a href='./user/login'>ログイン</a>
<a id=test>ホームだよ</a>


<script type="text/javascript">
$(document).ready(function () {
    $.getJSON("https://holidays-jp.github.io/api/v1/date.json", function(data){
        for(var i in data){
        $("#output").append("<li><strong>" + data[i].division + "</strong></li>");
            for(var j in data[i].person){
                $("#output").append("<li>" + data[i].person[j].name + "（" + data[i].person[j].age + "才）</li>n");
            }
        }
    });
});
</script>

</body>
</html>