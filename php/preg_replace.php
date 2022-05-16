<?php
  $string = "Hello, this is rjun.";
  $pattern = "/is/i"; // i means case-insensitive search
  $string_new = "REPLACE";
  echo 'preg_replace(): ';
  echo preg_replace($pattern, $string_new, $string);
?>
  