<?php

// data dari database 
$username_db = "raihan";
$password_db = "permadi";
// end data dari database

// function yg akan digunakan
function userLoginV1($input_username, $input_password)
{
  global $username_db, $password_db;
  if ($input_username == $username_db && $input_password == $password_db) {
    $result = "Berhasil Login";
  } else {
    $result = "Username / Password Salah";
  }
  return $result;
}

function userLoginV2($input_username, $input_password)
{
  global $username_db, $password_db;
  if ($input_username <> $username_db) {
    $result = "Username Salah";
  } else if ($input_password <> $password_db) {
    $result = "Password Salah";
  } else {
    $result = "Berhasil Login";
  }
  return $result;
}
// end function code

// get data input
$input_username = @$_GET['user'];
$input_password = @$_GET['pass'];
// end get data input

// proses login
if (!empty($input_username) and !empty($input_password)) {
  echo "<h1><pre>Function userLoginV1() : ";
  echo userLoginV1($input_username, $input_password);
  echo "<br>Function userLoginV2() : ";
  echo userLoginV2($input_username, $input_password);
}
// end proses login
