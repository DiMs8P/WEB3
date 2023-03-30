<!DOCTYPE html>
<html>

<head>
  <title>GameNews</title>
  <meta charset="UTF-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">

  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/styles.css">

  <video autoplay muted loop id="myVideo" poster="background.jpg">
    <source src="img/BackgroundTheme.mp4" type="video/mp4">
  </video>
</head>


<body>

  <?php require "blocks/navbar.php" ?>

  <main class="container">
    <?php require "blocks/carousel.php" ?>

    <div>
      <div class="row g-0 rounded-4 background mb-4  ">
        <div class=" col-sm-12 col-md-12 col-lg-6 p-lg-4 p-4">
          <a href="HogwartsLegacy.php"><img width="640" height="360" src="img/EGS_HogwartsLegacy.jpg"
              alt="HogwartsLegacy" class="img-fluid rounded-4"></a>
        </div>

        <div class="col-sm-12 col-md-12 col-lg-6 p-4  ">
          <div class="pt-sm-0 pt-md-3 pt-lg-0">
            <h2><a href="HogwartsLegacy.php" class="d-inline-block nav-link mb-2 text-white ">Hogwarts Legacy</a></h2>
            <p class="mb-auto text-white">Нашумевший проект студии Avalanche Software
              в жанре Action/RPG по вселенной "Гарри Поттера".</p>
            <div class="mb-1 text-white">
              <h5>10 февраля 2023</h5>
            </div>
          </div>
        </div>
      </div>

      <div class="row g-0 rounded-4 background mb-4  ">
        <div class=" col-sm-12 col-md-12 col-lg-6 p-4">
          <a href="AtomicHeart.php"><img width="640" height="360" src="img/AtomicHeartPic.jpg" alt="AtomicHeart"
              class="img-fluid rounded-4"></a>
        </div>

        <div class="col-sm-12 col-md-12 col-lg-6 p-4 ">
          <div class="pt-sm-0 pt-md-3 pt-lg-0">
            <h2><a href="AtomicHeart.php" class="d-inline-block nav-link mb-2 text-white ">Atomic Heart</a></h2>
            <p class="card-text mb-auto text-white">Амбициозный дебют отчественной студии Mundfish.</p>
            <div class="mb-1 text-white">
              <h5>21 февраля 2023 г.</h5>
            </div>
          </div>
        </div>
      </div>
    </div>



  </main>



  <script src="js/bootstrap.bundle.min.js"></script>
</body>
</body>

</html>