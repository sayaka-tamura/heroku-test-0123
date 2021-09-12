<html>

<!--
  form内は自動的にurlエンコードされるので、urlエンコード不要。下記のように「あああ」とそのまま書けばよい。
  a タグのhref属性では下記のようにurlエンコードが必要。
  <a href="〜?MT=%82%a0%82%a0%82%a0">xxx</a>
-->

  <head>
    <title>URLエンコード・デコード</title>
    <meta http-equiv="Content-Type" content="text/html; charset=Shift_JIS">
  </head>

  <body bgcolor="#FFFFFF" text="#000000">
    URLエンコードを行う文字列を入力してください。
    <form name="formform" method="post" action="urlende.php">
      <input type="text" name="moziretu" size="50">
      <input type="submit" name="encode" value="エンコード">
    </form>

  <?php
    if($_POST['encode']){
      $str=$_POST['moziretu'];
      echo $str."<br>";
      echo "↓↓↓　URLエンコード　↓↓↓<br>";
      $enstr=urlencode($str); //URLエンコード
      echo($enstr);
      echo "<br>";
      echo "↓↓↓　URLデコード　↓↓↓<br>";
      $destr=urldecode($enstr); //$enstrをデコード
      echo($destr);
    }
  ?>

  </body>

</html>