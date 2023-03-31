<?php

    function add_user($email, $nickname, $password)
    {
        global $mysqli;

        // Формируем запрос
        $password = md5($password."randomString");

        echo $password;
        if ($stmt = $mysqli->prepare("INSERT INTO `users` 
        (`email`, `nickname`, `password`) VALUES(?, ?, ?)")) {
            // Связываем параметры
            $stmt->bind_param("sss", $email, $nickname, $password);

            // Выполняем запрос
            if (!$stmt->execute()) {
                return 0;
            }
            return 1;
        }
        return 0;
    }
  
    function get_user($email, $password)
    {
        global $mysqli;
        // Формируем запрос
        if ($stmt = $mysqli->prepare("SELECT * FROM `users` WHERE `email` = ?")) {
            // Связываем параметры
            $stmt->bind_param("s", $email);
            // Выполняем запрос
            $stmt->execute();
            // Связываем результаты
            $stmt->bind_result($id, $email, $nickname, $password_hash);
            if ($stmt->fetch())
            {
                if (password_verify($password, $password_hash))
                    return array(
                        'id' => $id,
                        'email' => $email,
                        'nickname' => $nickname
                    );
            }
            // Возвращаем результат
            return 0;
        }
        return 0;
    }

    function logout()
    {
       unset($_SESSION["id"]);
       unset($_SESSION["email"]);
       unset($_SESSION["nickname"]);
       unset($_SESSION["password"]);
    }
 

   
?>
