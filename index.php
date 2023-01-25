<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.css" media="screen,projection" />
  <link rel="stylesheet" href="css/style.css">
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>The Sensee - VR Room</title>
</head>
<body>
  <nav>
    <div class="nav-wrapper">
        <a href="#" class="brand-logo"><img class="nav-component" src="asset/Logo.png" id="lgonav" alt="logo"></a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons nav-component">menu</i></a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li id="hover"><a href="news.html"><div class="nav-component">News</div></a></li>
            <li class="nav-component">|</li>
            <li id="hover"><a href="exp.html"><div class="nav-component">Nos expérience</div></a></li>
            <li class="nav-component">|</li>
            <li id="hover"><a href="ebout.html"><div class="nav-component">à propos</div></a></li>
            <li class="nav-component">|</li>
            <li id="hover"><a href="stuff.html"><div class="nav-component">Equipement</div></a></li>
            <li class="nav-component">|</li>
            <li id="hover"><a class="waves-effect waves-light modal-trigger" href="#modal1"><div class="nav-component">Modal</div></a></li>
        </ul>
    </div>
  </nav>
  <ul class="sidenav" id="mobile-demo">
    <li><a href="sass.html"><div class="nav-component">Sass</div></a></li>
    <li><a href="badges.html"><div class="nav-component">Components</div></a></li>
    <li><a href="collapsible.html"><div class="nav-component">Javascript</div></a></li>
    <li><a href="mobile.html"><div class="nav-component">Mobile</div></a></li>
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
      <a href="#!" class="modal-close" ><div class="col s3" id="connect">connexion</div></a>
      <div class="col s4"></div>
      <div class="col s2" style="text-align: right;">Pas inscrit ?</div>
      <a href="sign_in.php"><div class="col s3" id="sign">Inscrivez-vous !</div></a>
    </div>
  </div>

  <?php require_once('components/article.php') ?>

  <br/>

  <?php require_once('components/about.php') ?>

  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script type="text/javascript" src="js/script.js"></script>
</body>





</html>
