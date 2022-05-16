<?php
  $string = "Hello, this is rjun.";
  $pattern = "/is/i"; // i means case-insensitive search
  echo "preg_match: ";
  echo preg_match($pattern, $string);
  echo "preg_match_all";
  echo preg_match_all($pattern, $string);
?>
  