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
      <div class="row row-right">
        <div class="col offset-l9 l1 offset-s3 modal-padding-bottom">
          <p class="modal-upper-text">Connexion</p>
        </div>
        <form class="col s6">
          <div class="row row-bottom">
            <div class="col s12 l6">
              <p>Identifiant</p>
            </div>
            <div class="input-field col s6 modal-email">
              <input id="email" type="email">
            </div>
          </div>
          <div class="row row-bottom">
            <div class="col s12 l6">
              <p>Mot de passe</p>
            </div>
            <div class="input-field col s6 modal-password">
              <input id="password" type="password">
              <i onclick="PasswordReverse()" class="material-icons">remove_red_eye</i>
              <a href="forgot_mdp.php"><p>Forgot your password?</p></a>
            </div>
          </div>
        </form>
      </div>
    </div>
    <div class="row" id="modal-foot">
      <div class="width-diff left col offset-l2 l3 offset-s1 s12"><a href="sign_in.php">Créer un compte</a></div>


      <a href="log_in.php">
        <div class="col s3" id="sign">
          Connexion
        </div>
      </a>
    </div>
  </div>