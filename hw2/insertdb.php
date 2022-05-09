<?php

// Include php file
require_once 'connectdb.php';

// $link is the connection with DB. This function return True or false.
$result = mysqli_query($link, "INSERT INTO `student` (`name`, `deparment`, `studentID) VALUES ('小傑', '資管系', '002)");

if ($result) {
  // Insert successfully
  echo "Insert a student successfully.";
} else {
  // Insert failed
  die("Failure: " . mysqli_error($link) . "\n");
}

// Insert my student info
$result = mysqli_query($link, "INSERT INTO `student` (`name`, `deparment`, `studentID) VALUES ('鄒翔宇', '資管系', '109403019)");

if ($result) {
  // Insert successfully
  echo "Insert a student successfully.";
} else {
  // Insert failed
  die("Failure: " . mysqli_error($link) . "\n");
}
