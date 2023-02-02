<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.css" media="screen,projection" />
  <link rel="stylesheet" href="css/style.css">

  <!--Import Font Awesome-->
  <link href="css/fontawesome/fontawesome.min.css" rel="stylesheet">
  <link href="css/fontawesome/brands.min.css" rel="stylesheet">
  <link href="css/fontawesome/solid.min.css" rel="stylesheet">
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>The Sensee - VR Room</title>
</head>
<body class="mainpage">
  <?php
  // Souvent on identifie cet objet par la variable $conn ou $db
  $dsn = 'mysql:host=localhost;dbname=the_sense;port=3306;charset=utf8';
  $pdo = new PDO($dsn, 'root' , 'root');
  $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
  ?>
  <?php require_once('components/navbar.php') ?>
  <div class="center"><img class="logo-main" src="asset/Logo.png" alt=""><br>
  <div class="btn center black" id="discover">dévouvrir</div>
  <div class="center"><?php require_once('components/article.php') ?></div>

  <br/>

  <div><?php require_once('components/experience.php') ?></div>
  <?php require_once('components/about.php') ?>

  <div class ="article_container">
    <?php
    require 'components/article.php';
    ?>
  </div>
  <?php require 'components/smol_experience.php'; ?>
  <?php require 'components/faq.php'; ?>
  <?php require_once("components/footer.php") ?>

  <?php require_once('components/reservation-home.php') ?>


  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script type="text/javascript" src="js/script.js"></script>
</body>





</html>
