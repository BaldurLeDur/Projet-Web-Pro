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
  <title>The Sense - A propos</title>
</head>
<body class="signpage">
  <?php
  require_once("components/config.php");
    require_once('components/navbar.php')
  ?>
  <div class="parallax-container parallax-1">
      <div class="parallax"><img src="asset/account_font.svg" alt="parallax The Sense"></div>
  </div>
  <div class="btn center black" id="discover">découvrir</div>
  <br>
  <?php require_once('components/about.php') ?>

  <div class="about-main">
    <div class="about-what">
      <h2>Qui sommes-nous?</h2>
      <p>The Sense est une société formée par quatre étudiants en école de commerce qui détiennent la majorité des parts. Le restant étant la propriété de DreamAway, entreprise française spécialiste du milieu de la VR.</p>
    </div>
    <div class="who-group center">
      <div class="who-person">
        <img src="asset/who1.png" alt="Buisinessman from The Sense"/>
        <p class="who-name">CORDIER<br><span>Colin</span></p>
        <p class="who-title">Co-Fondateur THE SENSE et Directeur Général</p>
        <p class="who-subtitle">“Nous avons décidé de réaliser notre rêve de gosse : rendre réel ce qui ne l’est pas.”<br>
  - Colin CORDIER - </p>
      </div>
      <div class="who-person">
        <img src="asset/who2.png" alt="Buisinessman from The Sense"/>
        <p class="who-name">VANBORRE<br><span>Thibault</span></p>
        <p class="who-title">Co-Fondateur THE SENSE et Responsable RH</p>
        <p class="who-subtitle">“The Sense représente, pour moi, la concrétisation de 4 ans de travails et de passion”<br>
  - Thibault VANBORRE - </p>
      </div>
      <div class="who-person">
        <img src="asset/who3.png" alt="Buisinesswoman from The Sense"/>
        <p class="who-name">URBAIN<br><span>Eloëne</span></p>
        <p class="who-title">Co-Fondatrice THE SENSE et Responsable Communication</p>
        <p class="who-subtitle">“Je pense qu’il est important de rêver dans la vie et The Sense permet de vivre ces rêves.”<br>
- Eloëne URBAIN - </p>
      </div>
      <div class="who-person">
        <img src="asset/who4.png"  alt="Buisinessman from The Sense"/>
        <p class="who-name">ZAABAT<br><span>Bryce</span></p>
        <p class="who-title">Co-Fondateur THE SENSE et Responsable Marketing</p>
        <p class="who-subtitle">“The Sense permet à nos joueurs de vivrent une expérience époustouflante qui les marquera longtemps. Croyez-moi.”<br>
- Bryce ZAABAT -</p>
      </div>
    </div>
    <div class="about-where">
      <div class="about-where-pre">
        <h2>Où nous retrouver?</h2>
        <p>The Sense se trouve, pour le moment, exclusivement à Lyon (France) dans le 3ème arrondissement. Pour nous rejoindre, il suffit de prendre la ligne T2 du Tram arrêt Rue de l’Université ou bien prendre le Métro B station Jecéplus (100m à pied).</p>
      </div>
      <div class="about-where-place row">
        <div class="col s12 push-l1 l4">
          <img class="responsive-img" src="asset/CARTE.png" alt="THE SENSE is located at 207 Rue Duguesclin à Lyon 3"/>
        </div>
        <div class="col s12 offset-l2 l4">
          <div class="about-hours">
            <h3>NOS HORRAIRES</h3>
            <p class="red-text">Lundi  -  Fermé</p>
            <p>Mardi  -  10:00-22:00</p>
            <p>Mercredi  -  10:00-22:00</p>
            <p>Jeudi  -  10:00-22:00</p>
            <p>Vendredi  -  10:00-01:00</p>
            <p>Samedi  -  10:00-01:00</p>
            <p>Dimanche  -  10:00-22:00</p>
          </div>
        </div>
      </div>
    </div>
    <div class="about-contact center" id="contact">
      <h2>Nous contacter</h2>
      <form action="../contact-team.php" method="post">
        <div class="row">
          <input class="col s5" type="text" name="last_name" placeholder="Votre nom" value="<?php echo isset($_SESSION["user"])?$_SESSION['user']["last_name"]:"" ?>">
          <input class="col offset-s1 s5" type="text" name="first_name" placeholder="Votre prénom" value="<?php echo isset($_SESSION["user"])?$_SESSION['user']["first_name"]:"" ?>">
          <input class="col s12 l5" type="email" name="email" placeholder="Votre email" value="<?php echo isset($_SESSION["user"])?$_SESSION['user']["email"]:"" ?>">
          <input class="col s12" id="beeg-text" type="text" name="message" placeholder="Votre message / Avis">
          <div class="col s12">
            <input class="center" type="submit">
          </div>
          <p class="col s12 center">ou<br>par téléphone au:<br><span>01 23 45 67 89</span></p>
        </div>
      </form>
    </div>
  </div>

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