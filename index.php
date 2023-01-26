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
<body class="mainpage">
  <nav>
    <div class="nav-wrapper">
        <a href="#mobile-demo" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons nav-component">menu</i></a>
        <a href="#" class="brand-logo"><img class="nav-component" src="asset/Logo.png" id="lgonav" alt="logo"></a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li class=" waves-effect waves-light"><a href="news.html"><span class="nav-component">News</span></a></li>
            <li class="nav-component">|</li>
            <li class=" waves-effect waves-light"><a href="exp.html"><span class="nav-component">Nos expérience</span></a></li>
            <li class="nav-component">|</li>
            <li class=" waves-effect waves-light"><a href="ebout.html"><span class="nav-component">à propos</span></a></li>
            <li class="nav-component">|</li>
            <li class=" waves-effect waves-light"><a href="stuff.html"><span class="nav-component">Equipement</span></a></li>
            <li class="nav-component">|</li>
            <li class=" waves-effect waves-light"><a class="modal-trigger" href="#modal1"><span class="nav-component bold-nav">connexion</span></a></li>
        </ul>
    </div>
  </nav>
  <ul class="sidenav" id="mobile-demo">
    <li class=" waves-effect waves-light"><a href="news.html"><span class="nav-component">News</span></a></li><br>
    <li class=" waves-effect waves-light"><a href="exp.html"><span class="nav-component">Nos expérience</span></a></li><br>
    <li class=" waves-effect waves-light"><a href="ebout.html"><span class="nav-component">à propos</span></a></li><br>
    <li class=" waves-effect waves-light"><a class="modal-trigger" href="#modal1"><span class="nav-component">connexion</span></a></li>
  </ul> 
  <div id="modal1" class="modal">
    <div class="modal-content">
      <div class="row">
        <form class="col s12">
          <div class="row">
            <div class="input-field col s12">
              <input id="email" type="email" class="validate">
              <label for="email">Email</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input id="password" type="password" class="validate">
              <label for="password">Password</label>
            </div>
          </div>
        </form>
      </div>
    </div>
    <div class="row" id="modal-foot">
      <div class="col s1"></div>
      <a href="#!" class="modal-close" ><div class="col s2" id="connect">Connexion !</div></a>
      <div class="left col s3"><a href="forgot_mdp.php">Mot de passe oublié ?</a></div>
      <div class="col s3"><span class="right">Pas inscrit ?</span></div>
      <div class="col s3" id="sign"><a href="sign_in.php">Inscrivez-vous !</a></div>
    </div>
  </div>
  <div class="center"><img class="logo-main" src="asset/Logo.png" alt=""><br>
  <div class="btn center black" id="discover">dévouvrir</div>
  <?php require_once('components/article.php') ?>
  <?php require_once('components/about.php') ?>

  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script type="text/javascript" src="js/script.js"></script>
</body>





</html>
