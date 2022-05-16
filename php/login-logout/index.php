<?php
  session_start();

  if(!isset($_SESSION['UserData']['Username'])) {
    header("location:login.php");
    exit;
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Logout Session Practice</title>
</head>
<body>
    <div id="frame1">
      <h1>PHP Login Script (hard coded)</h1>
      <p>You are <font color="green">authorized!</font></p>
      <p><a href="./logout.php">Logout</a></p>
    </div>
</body>
</html>