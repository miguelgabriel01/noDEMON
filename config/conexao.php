<?php
  abstract class Connection {
    private static $conn;
    public static function getConn() {
      if (self::$conn == null) {
       self::$conn = new PDO("mysql:host=us-cdbr-iron-east-05.cleardb.net;dbname=heroku_4014a4713822235", "b544430085cca9", "8893a19c");
        	//self::$conn = new PDO("mysql:host=localhost;dbname=SNRC", "root", "ifpe");
        //conexao com phpMyAdmin
         // self::$conn = new PDO("mysql:host=localhost;dbname=id11568186_snrc", "id11568186_root", "97116162");
      }
      return self::$conn;
    }
  }
  ?>
