<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.css" media="screen,projection" />
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/style_article.css">
  <!--Import Font Awesome-->
  <link href="css/fontawesome/fontawesome.min.css" rel="stylesheet">
  <link href="css/fontawesome/brands.min.css" rel="stylesheet">
  <link href="css/fontawesome/solid.min.css" rel="stylesheet">
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>The Sensee - VR Room</title>
</head>
<body>
    <?php require_once("components/navbar.php") ?>
    <?php 
    $dsn = 'mysql:host=localhost;dbname=the_sense;port=3306;charset=utf8';
    $pdo = new PDO($dsn, 'root' , 'root');
    try {
 
      $pdo = new PDO($dsn, 'root' , 'root');
      
      }
    catch (PDOException $exception) {

      mail('robin.frouin.04@gmail.com', 'PDOException', $exception->getMessage());
      exit('Erreur de connexion à la base de données');
      
     }
    $sql = "SELECT * FROM user";
    $pre = $pdo->prepare($sql);
    $pre->execute();
    $data = $pre->fetchAll(PDO::FETCH_ASSOC);
    foreach($data as $user){ ?>
    <div class="parallax-container parallax-account">
        <div class="parallax">MON COMPTE</div>
    </div>
    <div class="parallax-container" id="forms">
      <form action="" method="post">
        <div class="row" id="input">
          <div class="col s4"></div>
          <div class="col s2"><input class="account_input" type="text"  value="Nom / Prénom" disabled="true"></div>
          <div class="col s2"><input class="account_input" type="text"  value="<?php echo $user['first_name']." ".$user['Last_name'] ?>" disabled ></div>
          <div class="col s4"></div>
          <?php } ?>
        </div>
        <div class="row">
          <div class="col s4"></div>
          <div class="col s2"><input class="account_input" type="text"  value="E-mail" disabled="true"></input></div>
          <div class="col s2"><input class="account_input" type="text" name="email" id="account-email" value="<?php echo $user['email']?>" disabled="true"></input></div>
          <div class="col s1 btn" id="mail-btn" onclick="enable()">Modifier</div>
          <div class="col s3"></div>
        </div>
        <div class="row">
          <div class="col s4"></div>
          <div class="col s2"><input class="account_input" type="text"  value="Mot de passe :" disabled></div>
          <div class="col s2"><input class="account_input" name="mdp" type="password" value="<?php echo $user['password']?>" disabled id="account-password-input" onchange="showButtonChange(this.value , this.defaultValue)"></input></div>
          <div class="col s1 btn" id="mdp-btn" onclick="mdpDisableField()">Modifier</div>
          <div class="col s3"></div>
        </div>
        <div class="row">
          <div class="col s5"></div>
          <div class="col s2 center hide" id="changeBtn"><input type="submit" name="changeBtn">S'inscrire</input></div>
          <div class="col s5"></div>
        </div>
      </form>
      <?php
      $lakeu = $_POST['mdp'];
      echo $lakeu ?>
    </div>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
</body>

</html>