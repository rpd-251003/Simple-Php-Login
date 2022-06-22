<?php

// class login with version
class Login
{
  static $username_db = "raihan", $password_db = "permadi";
  public $input_username, $input_password;

  static function v1($input_username, $input_password)
  {
    if ($input_username == self::$username_db && $input_password == self::$password_db) {
      $result = "Berhasil Login";
    } else {
      $result = "Username / Password Salah";
    }
    return $result;
  }

  static function v2($input_username, $input_password)
  {
    if ($input_username <> self::$username_db) {
      $result = "Username Salah";
    } else if ($input_password <> self::$password_db) {
      $result = "Password Salah";
    } else {
      $result = "Berhasil Login";
    }
    return $result;
  }
}
// end of clas

// get data input
$input_username = @$_GET['user'];
$input_password = @$_GET['pass'];
// end get data input

// proses login
if (!empty($input_username) and !empty($input_password)) {
  echo "<h1><pre>Function userLoginV1() : ";
  echo Login::v1($input_username, $input_password);
  echo "<br>Function userLoginV2() : ";
  echo Login::v2($input_username, $input_password);
}
// end proses login
