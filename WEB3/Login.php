<!DOCTYPE html>
<html>

<head>
  <title>Login</title>
  <meta charset="UTF-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">

  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/styles.css">
  <link href="css/signin.css" rel="stylesheet">

  <video autoplay muted loop id="myVideo" poster="background.jpg">
    <source src="img/BackgroundTheme.mp4" type="video/mp4">
  </video>
</head>
<body class="text-center">
    
<?php require "blocks/navbar.php" ?>   

<main class="form-signin background rounded-4">
  <form action="php/auth.php" method="post">
    <img class="mb-4" src="img/game-console.png" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal text-white">Пожалуйста, войдите</h1>

    <div class="form-floating">
      <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Адрес эл. почты</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Пароль</label>
    </div>

    <button class="w-100 btn btn-lg btn-primary mb-2" type="submit">Войти</button>

    <a href="Signin.php" class="w-100 btn btn-lg btn-secondary" >Зарегестрироваться</a>
  </form>
</main>

</body>

</html>