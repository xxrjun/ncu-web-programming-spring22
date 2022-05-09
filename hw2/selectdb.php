<?php

// Include php file
require_once 'connectdb.php';

$result = mysqli_query($link, "SELECT * FROM `student`");
if($result){
  // mysqli_fetch_assoc() : select one row rom the result
  while($row = mysqli_fetch_assoc($result)){
    echo "name: ". $row["name"]. " department: ". $row["department"]. " studentID: ". $row["studentID"].  "\n";
  } 
} else {
  die("Failure: ". mysqli_error($link). "\n");
}
mysqli_close($link);
