//スクレイピングの基本
//https://for-ne.info/gas

//ログインに関する記述
//https://katsulog.tech/get-the-source-after-logging-in-to-the-site-when-scraping-with-googlespreadsheet/
//https://yokonoji.work/gas-scraping-login


function myFunction() {
    //ログイン情報をセット
    var payload = {
      MAIL_ADDRESS: "ysk@ii-na.jp",
      PASSWORD: "LS85jN59",
      followRedirects: false
    };
    
    //メソッドにPOSTを指定しログイン情報を設定
    var options = {
      method : "post",
      payload : payload ,
    };
    
    //アクセス先URLにPOSTリクエストを送信し、レスポンスを取得
    var response = UrlFetchApp.fetch("http://agent.pure-c.jp/Z/LOGIN/LOGIN/", options);
    
    //レスポンスからクッキー(ログイン中の情報)を取得
    var cookies = response.getHeaders()["Set-Cookie"];
      
    //クッキーをヘッダにセット
    var headers = { Cookie: cookies };
      
      
    //メソッドにGETを指定しヘッダを設定
    var get_options = {
      method : "get",
      headers : headers,
    };
      
    //アクセス先URLにGETリクエストを送信し、レスポンスを取得
    var response_data = UrlFetchApp.fetch("http://agent.pure-c.jp/Z/PROMOTIONTOTAL/INDEX/PID/3501/",get_options);
    
    //レスポンスからページソース(内容)を取得
    var content = response_data.getContentText("UTF-8");
    
      
    //var html =  "プロモーション集計";
      var html = /<td>(.*)<\/td>/g;
    //var data = content.data(html).from('<td>').to('</td>').iterate();
    
      
    var scraping = content.match(html);
    Logger.log(scraping);
      
    //while((match = html.exec(content)) !== null){
      //Logger.log(match);
      //data[ct] = match[1];
      //ct++;
    //}  
      
    var ss = SpreadsheetApp.getActiveSpreadsheet();
    var sheet = ss.getSheetByName("ピュアリ");
    
    //内容の書き込み
      //特定セル(setValueの所に変数で表示させるものを入れる)
      sheet.getRange("A1").setValue(scraping);
      //特定範囲(二次元配列)
      //sheet.getRange("A1:B2").setValues(dataArr);
      //全て(二次元配列)
      //sheet.getDataRange().setValues(dataArr);
    
    //内容の読み込み
      //特定セル
      var read = sheet.getRange("A1").getValue();
      //特定範囲(二次元配列)
      //var readArr = sheet.getRange("A1:B2").getValues();
      //全て(二次元配列)
      //var readArr = sheet.getDataRange().getValues();
    }