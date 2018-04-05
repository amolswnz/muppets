<?php
define("HOST","localhost");
define("DATABASE","muppets");
define("USERNAME","root");
define("PASSWORD","");
error_reporting(E_ALL);
ini_set('display_errors', '1');
date_default_timezone_set('Pacific/Auckland');  // Set NZ TimeZone

try {
  $pdo = new PDO("mysql:host=" . HOST . ";dbname=" . DATABASE, USERNAME, PASSWORD);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  $pdo->exec("SET NAMES 'utf8'");
  return $pdo;
} catch(PDOException $e) {
  var_dump($e->getMessage());
  return null;
}
