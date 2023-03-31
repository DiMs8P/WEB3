<?php 
    $email = $_POST['email'];
    $nickname = $_POST['nickname'];
    $password = $_POST['password'];

    $password = md5($password."randomString");

    $mysql = new mysqli('localhost', 'root', '', 'web3-db');
    $mysql->query("INSERT INTO `users` (`email`, `nickname`, `password`) VALUES('$email', '$nickname', '$password')");

    $mysql->close();

    header('Location: http://localhost/sites/WEB3/');
?>