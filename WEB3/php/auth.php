<?php
    $email = $_POST['email'];
    $password = $_POST['password'];

    $password = md5($password."randomString");

    $mysql = new mysqli('localhost', 'root', '', 'web3-db');
    $result = $mysql->query("SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password'");
    $user = $result->fetch_assoc();
    if ($user == null){
        echo "Такого чела нет!";
        exit();
    }

    setcookie('user', $user['name'],  time() + 3600, "/");
    $mysql->close();

    header('Location: http://localhost/sites/WEB3/');
?>