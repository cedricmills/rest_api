<?php
    class db{
      // DB Properties
      private $dbhost = 'localhost';
      private $dbuser = 'cedric';
      private $dbpass = 'password';
      private $dbname = 'restapp';

      // Connect to DB
      public function connect() {
        $mysql_connect_string = "mysql:host=$this->dbhost;dbname=$this->dbname";
        $dbConnection = new PDO($mysql_connect_str, $this->dbuser, $this->dbpass);

        $dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $dbConnection;
      }
    }
?>