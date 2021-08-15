<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Form Sample for practice</title>
  </head>
  <body>
    <p>Please Check Input Contents</p>
    <?php
      $uname = $_POST["uname"];
      $email = $_POST["email"];
      $message = $_POST["message"];
    ?>
    <?php print_r($_POST); ?>
    <form method="post" action="submit.php">
      <table border="1">
        <tr>
          <td>Name</td>
          <td><?php echo $uname; ?></td>
        </tr>
        <tr>
          <td>Email Address</td>
          <td><?php echo $emal; ?></td>
        </tr>
        <tr>
          <td>Message</td>
          <td><?php echo nl2br($message); ?></td>
        </tr>
        <tr>
          <td colspan="2">
            <input type="submit" name="sub1" value="Submit">
          </td>
        </tr>
      </table>
    </form>
  </body>
</html>