<?php

  $h = $_SERVER['HTTP_HOST'];
  $r = $_SERVER['HTTP_REFERER'];

  if(empty($_POST)){
    echo "Ended this process";
    exit;
  }
  // Session Start
  session_start();
  
  require 'validation.php';  //関数のファイルの読み込み

  //POSTされたデータをチェック
  $_POST = checkInput($_POST);

?>


<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Mail Form</title>
    <link rel="stylesheet" href="css/style.css">
  </head>

  <body>
    <h1>Mail Form</h1>
    <p>Please confirm your input</p>
    
    <?php
      /*
      // 入力エラーチェック
      $temp_array = errorCheck($_POST); 
      */
    ?>
    
    <form method="post" action="submit.php">
      <table border="1">
        <tr>
          <td>Name</td>
          <td width="300"><?php echo $temp_array['uname']; ?></td>
        </tr>
        <tr>
          <td>Email Address</td>
          <td width="300"><?php echo $temp_array['email']; ?></td>
        </tr>
        <tr>
          <td>Message</td>
          <td width="300"><?php echo nl2br($temp_array['message']); ?></td>
        </tr>
        <tr>
          <td align="right" colspan="2">
            <input type="submit" name="sub1" value="Submit">

            <?php
              // これがボタンの記述だよ
              if (!empty($r) && (strpos($r, $h) !== false)) :
            ?>
              <div>
                <button type="button" onclick="location.href='<?= $r ?>'">前のページに戻る</a>
              </div>
            <?php endif ?>
          </td>
        </tr>
      </table>
    </form>
  </body>
</html>