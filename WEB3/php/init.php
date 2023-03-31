<?php
   session_start();
   $mysqli = new mysqli('localhost', 'root', '', 'web3-db');

   if ($mysqli->connect_errno) {
      echo "Не удалось подключиться к MySQL: " . $mysqli->connect_error;
      exit(1);
   }
   require_once("functions.php");
?>
