<?php
// Constants
define('DB_HOST', 'localhost');
define('DB_USER', 'tobi');
define('DB_PASS', 'password');
define('DB_NAME', 'php_dev');


// Connection
$connect = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Connection check
if ($connect->connect_error) {
  die('Connection failed ' . $connect->connect_error);
}
