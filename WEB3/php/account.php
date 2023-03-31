<?php
   // Проверяем действие
   if (isset($_GET) && isset($_GET["action"]))
   {
      if (isset($_POST) && isset($_POST["username"]) && isset($_POST["password"]))
      {
         // Осуществляем вход
         if ($_GET["action"] == "login")
         {
            if ($user = get_user($_POST["username"], $_POST["password"])) {
               $_SESSION["id"] = $user["id"];
               $_SESSION["username"] = $user["username"];
               $_SESSION["password"] = $_POST["password"];
               $_SESSION["status"] = $user["status"];
            } else { ?>
               <!-- Такого пользователя нет -->
               <div id="error">
                  <span>Такого пользователья не существует.</span>
               </div>
<?php       }
         } else   // if ($_GET["action"] == "login")

         // Осуществляем регистрацию
         if ($_GET["action"] == "register")
         {
            if (add_user($_POST["username"], $_POST["password"])) {
               if ($user = get_user($_POST["username"], $_POST["password"])) {
                  $_SESSION["id"] = $user["id"];
                  $_SESSION["username"] = $user["username"];
                  $_SESSION["password"] = $_POST["password"];
                  $_SESSION["status"] = $user["status"];
                  header("login.php");
               }
            } else { ?>
            <!-- Пользователь с таким именем уже существует -->
            <div id="error">
               <span>Пользователь с таким именем уже существует.</span>
            </div>
<?php       }
         }        // if ($_GET["action"] == "register")

      }        // if (isset($_POST)
      // Осуществляем выход
      if ($_GET["action"] == "logout")
      {
         logout();
         header("login.php");
      }
   }

   // Проверяем сессию
   if (isset($_SESSION)) {
      if (isset($_SESSION["username"]) && isset($_SESSION["password"])) {
         if ($user = get_user($_SESSION["username"], $_SESSION["password"])) {
            require("parts/cabinet.php");
            // Проверяем админ ли это, если это админ, то отобразить добавление новости
            if ($user["status"] == 1) {
               require("parts/process_news.php");
            }
         } else {
            // Очищаем сессию
            logout();
         }
      } else {
         // Отображаем формы входа и регистрации
         require("parts/account_forms.php");
      }  }
?>
