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
  // Souvent on identifie cet objet par la variable $conn ou $db
  $mysqlConnection = new PDO(
      'mysql:host=localhost;dbname=the_sense;charset=utf8',
      'root',
      'root'
  );
  ?>
  <?php require_once("components/navbar.php") ?>
  <div class="parallax-container parallax-account">
    <div class="parallax"><span class="par-text">INSCRIPTION</span></div>
  </div>
  <div class="parallax-container" id="forms">
    <div class="row" id="input">
      <div class="col s2"></div>
      <div class="col s4">
        <input id="name" type="text" class="validate">
        <label for="name">Nom</label>
      </div>
      <div class="col s4">
        <input id="firstname" type="text" class="validate">
        <label for="firstname">Prénom</label>
      </div>
      <div class="col s2"></div>
    </div>
    <div class="row">
      <div class="col s2"></div>
      <div class="col s8">
        <input id="email" type="email" class="validate">
        <label for="email">E-mail</label>
      </div>
      <div class="col s2"></div>
    </div>
    <div class="row">
      <div class="col s2"></div>
      <div class="col s4">
        <input id="first_password" type="password">
        <label for="first_password">Mot de passe</label>
      </div>
      <div class="col s4">
        <input id="confirm_password" type="password" class="validate">
        <label for="confirm_password">Confirmation mot de passe</label>
      </div>
      <div class="col s2"></div>
      <div class="col s12 center" id="newletter">
        <p>
          <label>
            <input type="checkbox" class="filled-in" checked="unchecked" />
            <span>Recevoir des News-letters</span>
          </label>
        </p>
      </div>
      <div class="col s5"></div>
      <div class="col s2 center" id="sign-in-btn">S'inscrire</div>
      <div class="col s5"></div>
    </div>
  </div>
  <?php require_once("components/footer.php") ?>
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script type="text/javascript" src="js/script.js"></script>
</body>
</html>