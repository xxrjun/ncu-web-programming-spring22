<?php

// Set the info of database
$host = 'localhost';

// Set user
$dbuser = '109403019';

// Password
$dbpassword = '123456';

// Assign DB
$dbname = 'testDB';

$link = mysqli_connect($host, $dbuser, $dbpassword, $dbname);
if ($link) {
  echo "Datebase connected successfully.\n";
} else {
  die("Connection failure: " . mysqli_connect_error($link) . "\n");
}
