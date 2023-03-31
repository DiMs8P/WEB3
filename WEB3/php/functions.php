<?php
    require_once("init.php");
    function add_user($email, $nickname, $password)
    {
        global $mysqli;

        // Формируем запрос
        $password = md5($password."NegriPodori");
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

        $password = md5($password."NegriPodori");
        // Формируем запрос
        if ($stmt = $mysqli->prepare("SELECT * FROM `users` WHERE `email` = ?")) {
            // Связываем параметры
            $stmt->bind_param("s", $email);
            // Выполняем запрос
            $stmt->execute();
            // Связываем результаты

            if ($user = $stmt->get_result())
                if ($user = $user->fetch_assoc())
                {
                    //TODO заменить на password_verify
                    if ($password == $user["password"])
                        return $user;
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
