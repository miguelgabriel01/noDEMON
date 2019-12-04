<?php
  abstract class Connection {
    private static $conn;
    public static function getConn() {
      if (self::$conn == null) {
          self::$conn = new PDO("mysql:host=localhost;dbname=SNRC", "root", "ifpe");
        //conexao com phpMyAdmin
         // self::$conn = new PDO("mysql:host=localhost;dbname=id11568186_snrc", "id11568186_root", "97116162");
      }
      return self::$conn;
    }
  }
  ?>
