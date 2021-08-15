<?php
  if(empty($_POST)){
    echo "Ended this process";
    exit;
  }
  // Session Start
  session_start();

  var_dump($_POST);
?>

<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Mail Form_2.Confirm</title>
  </head>
  
  <body>
    <p>Please Check Input Contents</p>
    <?php
      if(empty($_POST["uname"])){
        echo "Please type your name";
        exit;
      }
      if(empty($_POST["email"])){
        echo "Please type your email";
        exit;
      }
      if(empty($_POST["message"])){
        echo "Please type your message";
        exit;
      }

      function h($a) {
        return htmlspecialchars($a, ENT_QUOTES, 'UTF-8');
      }

      $uname = h($_POST["uname"]);
      $email = h($_POST["email"]);
      $message = h($_POST["message"]);

      $_SESSION["uname"] = $uname;
      $_SESSION["email"] = $email;
      $_SESSION["message"] = $message;
    ?>
    
    <form method="post" action="submit.php">
      <table border="1">
        <tr>
          <td>Name</td>
          <td width="300"><?php echo $uname; ?></td>
        </tr>
        <tr>
          <td>Email Address</td>
          <td width="300"><?php echo $email; ?></td>
        </tr>
        <tr>
          <td>Message</td>
          <td width="300"><?php echo nl2br($message); ?></td>
        </tr>
        <tr>
          <td align="right" colspan="2">
            <input type="submit" name="sub1" value="Submit">
          </td>
        </tr>
      </table>
      <!-- hidden field -> Deleted -->
    </form>
  </body>
</html>