<?php
  session_start();

  if(isset($_POST['Submit'])){
    $logins = array('001' => 'abc123', '002' => 'abc321');

    $Username = isset($_POST['Username']) ? $_POST['Username'] : "";
    $Password = isset($_POST['Password']) ? $_POST['Password'] : "";

    if(isset($logins[$Username]) && $logins[$Username] == $Password) {
      $_SESSION['UserData']['Username'] = $logins[$Username];
      header("location:index.php");
      exit;
    } else {
      $msg="<span style='color:red'>Incorrect account or password.</span>"
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>
<body>
  <div id="frame1">
    <h1>PHP Login Script (hard coded)</h1>
    <p>You are <font color="green">Not authorized!</font></p>
  </div>
  <br>
  <form action="" method="POST" name="login_form">
    <table width="100%" border="0" align="left" cellpadding="5" cellspacing="1">
      <?php
        if(isset($msg)){
      ?>
      <tr>
        <td colspan="2" align="center" valign="top">
          <?php
            echo $msg;
          ?>
        </td>
      </tr>
      <tr>
        <td colspan="2" align="center" valign="top">
          <h3>Login</h3>
          </td>
      </tr>
      <?php
        }
      ?>
      <tr>
        <td align="right" valign="top">Username</td>
        <td><input type="text" name="Username"></td>
      </tr>
      <tr>
        <td align="right">Username</td>
        <td><input type="password" name="Password"></td>
      </tr>
      <tr>
        <!-- <td>$nbsp;</td> -->
        <td><input type="submit" name="Submit" value="Login"></td>
      </tr>
    </table>
  </form>
</body>
</html>