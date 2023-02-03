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
	require_once('components/config.php');
	require_once('components/navbar.php')
  ?>
  <div class="center"><img class="logo-main" src="asset/Logo.png" alt="The Sense Logo"><br>
  <div class="btn center black" id="discover">dévouvrir</div>
  <div class="center"><?php require_once('components/article.php') ?></div>

  <br/>

  <?php require_once('components/experience.php') ?>

  <?php require_once('components/news.php') ?>

  <?php require_once('components/about.php') ?>

  <div class="article_container">
	<?php
	require 'components/article.php';
	?>
  </div>
  <?php require 'components/faq.php'; ?>

  <?php require_once('components/reservation-home.php') ?>

  <?php require_once("components/carouselle.php") ?>
  <?php require_once("components/carouselle2.php") ?>

  <?php require_once("components/footer.php") ?>


  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script type="text/javascript" src="js/script.js"></script>
  <?php
  if (isset($_SESSION['message'])) { ?>
  <script type="text/javascript">M.toast({html: "<?php echo $_SESSION['message'] ?>"})</script>
  <?php
  unset($_SESSION['message']);
  }?>
</body>





</html>
