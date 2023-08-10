<?php

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable("../");
$dotenv->load();

class Connection
{
  private static $conn;

  static function connect()
  {
    $hostname = $_ENV["HOST_DB"];
    $username = $_ENV["USERNAME_DB"];
    $password = $_ENV["PASSWORD_DB"];
    $uri = "mysql:host=$hostname;dbname=obs_db";
    try {
      self::$conn = new PDO($uri, $username, $password);
      echo ("Connected successfully");
      return self::$conn;
    } catch (PDOException $e) {
      echo ("Connected failed: " . $e->getMessage());
    }
  }

  static function getInstance()
  {
    if (self::$conn) {
      return self::$conn;
    } else {
      self::connect();
      return self::$conn;
    }
  }
}
