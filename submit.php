<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Mail Form</title>
  </head>
  <body>
    <!-- <?php var_dump($_POST); ?> -->
    <?php
      $uname = $_POST["uname"];
      $email = $_POST["email"];
      $message = $_POST["message"];

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
    ?>
    <p>Mail has sent</p>
    <table border="1">
      <tr>
        <td>Name</td>
        <td><?php echo $uname; ?></td>
      </tr>
      <tr>
        <td>Email Address</td>
        <td><?php echo $email; ?></td>
      </tr>
      <tr>
        <td>Message</td>
        <td><?php echo nl2br($message); ?></td>
      </tr>
    </table>
  </body>
</html>