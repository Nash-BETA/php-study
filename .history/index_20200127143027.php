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
$(function(){
  $('#btn1').click(function(){
    //JSONデータへのパス
    var path = "https://holidays-jp.github.io/api/v1/date.json";  //httpから始まるURL型式でもOKです。
 
    //JSONデータを取得し、配列に格納する
    $.getJSON(path, function(data){
      var arr = [];
      $.each(data, function(key, val){
        arr.push("key⇒" + key + " val⇒" + val);
      });
 
      //取得したJSONデータをコンソールに表示する
      for(let i in arr){
        console.log(arr[i]);
      }
 
    });
 
  });
});
</script>

</body>
</html>