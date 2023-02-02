<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.css" media="screen,projection" />
  <link rel="stylesheet" href="css/style.css">
  <link href="css/fontawesome/fontawesome.min.css" rel="stylesheet">
  <link href="css/fontawesome/brands.min.css" rel="stylesheet">
  <link href="css/fontawesome/solid.min.css" rel="stylesheet">
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>The Sensee - VR Room</title>
</head>
<body class="signpage">
  <?php
    require_once('components/config.php');
    require_once('components/navbar.php')
  ?>
  <?php require_once("components/navbar.php") ?>
  <div class="parallax-container parallax-account">
    <div class="parallax"><span class="par-text">INSCRIPTION</span></div>
  </div>
  <form class="parallax-container" id="forms" action="actions/create_user.php" method="post">
    <div class="row" id="input">
      <div class="col s2"></div>
      <div class="col s4">
        <input name="name" id="name" type="text" class="validate">
        <label for="name">Nom</label>
      </div>
      <div class="col s4">
        <input name="firstname" id="firstname" type="text" class="validate">
        <label for="firstname">Prénom</label>
      </div>
      <div class="col s2"></div>
    </div>
    <div class="row">
      <div class="col offset-s2 s4">
        <input name="email" id="email" type="email" class="validate">
        <label for="email">E-mail</label>
      </div>
      <div class="col s4">
        <input type="tel" id="tel" name="tel" class="validate" pattern="0[1-9]{1}[0-9]{8}">
        <label for="tel">Téléphone</label>
      </div>
    </div>
    <div class="row">
      <div class="col s2"></div>
      <div class="col s4">
        <input name="first_password" id="first_password" type="password">
        <label for="first_password">Mot de passe</label>
      </div>
      <div class="col s4">
        <input name="confirm_password" id="confirm_password" type="password" class="validate">
        <label for="confirm_password">Confirmation mot de passe</label>
      </div>
      <div class="col s2"></div>
      <div class="col s12 center" id="newletter">
        <p>
          <label>
            <input name="news" type="checkbox" class="filled-in" checked="unchecked" />
            <span>Recevoir des News-letters</span>
          </label>
        </p>
      </div>
      <div class="col s5"></div>
      <input class="col s2 center" id="sign-in-btn" type="submit" value="S'inscrire"/>
      <div class="col s5"></div>
    </div>
  </form>
  <?php require_once("components/footer.php") ?>
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script type="text/javascript" src="js/script.js"></script>
  <?php
  if (isset($_SESSION['error'])) { ?>
    <script type="text/javascript">M.toast({html: "<?php echo $_SESSION['error'] ?>"})</script>
  <?php
    unset($_SESSION['error']);
  } ?>
</body>
</html>