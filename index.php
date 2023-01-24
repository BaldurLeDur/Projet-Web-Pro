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
            <a href="#" class="brand-logo">The Sense</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li id="saucisse"><a href="news.html">News</a></li>
                <li id="saucisse"><a href="exp.html">Nos expérience</a></li>
                <li id="saucisse"><a href="ebout.html">A propos</a></li>
                <li id="saucisse"><a href="stuff.html">Equipement</a></li>
                <li id="saucisse"><a class="waves-effect waves-light modal-trigger" href="#modal1">Modal</a></li>
            </ul>
        </div>
    </nav>
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
      <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect waves-green btn-flat">connexion</a>
        <div id="inscrip"><p>Pas inscrit ? <a href="inscription.html">Inscrivez-vous !</a></p></div>
      </div>
    </div>  
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
</body>





</html>