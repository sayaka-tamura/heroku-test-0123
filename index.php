<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Mail Form</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <h1>Mail Form</h1>
    <form method="post" action="check.php">
      <table border="1">
        <tr>
          <td>Name</td>
          <td><input type="text" name="uname" size="30" class="validate required max30"></td>
        </tr>
        <tr>
          <td>Email Address</td>
          <td><input type="text" name="email" size="30" class="validate required mail"></td>
        </tr>
        <tr>
          <td>Message</td>
          <td>
            <textarea name="message" cols="30" rows="5" class="validate required max100"></textarea>
          </td>
        </tr>
        <tr>
          <td colspan="2">
            <input type="submit" name="sub1" value="Confirm">
          </td>
        </tr>
      </table>
    </form>

  </body>
</html>