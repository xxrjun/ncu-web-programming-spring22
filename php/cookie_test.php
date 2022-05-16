<?php
  $cookie_name = "rjun";
  $cookie_value = "109403019";
  setcookie($cookie_name, $cookie_value, time() + (5), "/");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>cookie practice</title>
</head>
<body>
  <div id="frame1">
    <h1>PHP Cookie</h1>
  </div>
  <?php
  if(!isset($_COOKIE[$cookie_name])) {
      echo "No cookie found, please refresh this page.";
    } else {
      echo "Found cookie: ". $cookie_name . "(" . $_COOKIE[$cookie_name]. ")";
    }
  ?>
</body>
</html>