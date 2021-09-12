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
  // $_POST = checkInput($_POST);
  
  // 配列かどうかのチェック
  if(is_array($_POST)){
    //$var が配列の場合、checkInput()関数をそれぞれの要素について呼び出す
    return array_map('checkInput', $_POST);
  } else {
    //NULLバイト攻撃（文字コードの値が0の文字を使いプログラムを誤作動させる攻撃）対策
    if(preg_match('/\0/', $_POST)){  
      die('不正な入力です。'); // die(): メッセージを出力し、現在のスクリプトを終了する
    }
    //文字エンコードのチェック
    if(!mb_check_encoding($_POST, 'UTF-8')){ 
      die('不正な入力です。');
    }
    //改行以外の制御文字及び最大文字数のチェック
    if(preg_match('/\A[\r\n\t[:^cntrl:]]{0,100}\z/u', $_POST) === 0){  
      die('不正な入力です。最大文字数は100文字です。また、制御文字は使用できません。');
    }
    // return $_POST;
  }

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