<?php
  if(empty($_POST)){
    echo "Ended this process";
    exit;
  }
  // Session Start
  session_start();
  
  var_dump($_SESSION);
?>

<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Mail Form_3.Submit</title>
  </head>
  <body>
    <?php
      // Sanitize
      function h($a) {
        return htmlspecialchars($a, ENT_QUOTES, 'UTF-8');
      }

      $uname = h($_SESSION["uname"]);
      $email = h($_SESSION["email"]);
      $message = h($_SESSION["message"]);

      // メール本文の組み立て
      $to = "bbb@gmail.com";
      $title = "■ From Mail Foam";
      $ext_header = "From:{$email}";

      // 本文を組み立てるヒヤドキュメント
      $body = <<<EOM
      ----------------------------------------------
      【Mail from website】

      Name: {$uname}
      Mail Address: {$email}
      Message: {$message}
      ----------------------------------------------
      EOM;

      // メール送信の実行
      $rc = mb_send_mail($to, $title, $body, $ext_header);
      
      if(!$rc){
        exit;
      } else {
        $_SESSION = NULL;
      }
    ?>
    <!-- 処理結果を表示 -->
    <p>Mail has sent</p>
    <table border="1">
      <tr>
        <td>Name</td>
        <td　width="300"><?php echo $uname; ?></td>
      </tr>
      <tr>
        <td>Email Address</td>
        <td　width="300"<?php echo $email; ?></td>
      </tr>
      <tr>
        <td>Message</td>
        <td　width="300"><?php echo nl2br($message); ?></td>
      </tr>
    </table>
  </body>
</html>