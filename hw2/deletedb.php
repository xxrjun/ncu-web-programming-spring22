<?php

require_once 'connectdb.php';

// Delete student 001
$result = mysqli_query($link, "DELETE FROM `student` WHERE `student`.`studentID` = '001'");
if ($result) {
  echo "Deleted Successfully.\n";
} else {
  die("Failure: " . mysqli_error($link) . "\n");
}

// Delete student 002
$result = mysqli_query($link, "DELETE FROM `student` WHERE `student`.`studentID` = '002'");
if ($result) {
  echo "Deleted Successfully.\n";
} else {
  die("Failure: " . mysqli_error($link) . "\n");
}
