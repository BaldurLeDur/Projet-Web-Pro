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
          <?php if (!isset($_SESSION["user"])) { ?>
            <li class=" waves-effect waves-light"><a class="modal-trigger" href="#modal1"><span class="nav-component bold-nav">connexion</span></a></li>
          <?php } else { ?>
            <li class=" waves-effect waves-light"><a class='dropdown-trigger btn' href='#' data-target='dropdown1'><span class="nav-component">Mon Compte</span></a>
            <ul id='dropdown1' class='dropdown-content'>
              <li><a href="#!">one</a></li>
              <li><a href="#!">two</a></li>
              <li class="divider" tabindex="-1"></li>
              <li><a href="#!">three</a></li>
              <li><a href="#!"><i class="material-icons">view_module</i>four</a></li>
              <li><a href="#!"><i class="material-icons">cloud</i>five</a></li>
            </ul></li>
          <?php } ?>
      </ul>
  </div>
</nav>
<ul class="sidenav" id="mobile-demo">
  <li class=" waves-effect waves-light"><a href="news.html"><span class="nav-component">News</span></a></li><br>
  <li class=" waves-effect waves-light"><a href="exp.html"><span class="nav-component">Nos expérience</span></a></li><br>
  <li class=" waves-effect waves-light"><a href="ebout.html"><span class="nav-component">à propos</span></a></li><br>
  <?php if (!isset($_SESSION["user"])) { ?>
    <li class=" waves-effect waves-light"><a class="modal-trigger" href="#modal1"><span class="nav-component">connexion</span></a></li>
  <?php } else { ?>
    <li class=" waves-effect waves-light"><a class='dropdown-trigger btn' href='#' data-target='dropdown1'><span class="nav-component">Mon Compte</span></a></li>
  <?php } ?>
</ul> 
<div id="modal1" class="modal">
  <form action="actions/connect_user.php" method="post">
    <div class="modal-content">
      <div class="row row-right">
        <div class="col offset-l9 l1 offset-s3 modal-padding-bottom">
          <p class="modal-upper-text">Connexion</p>
        </div>
        <div class="col s6">
          <div class="row row-bottom">
            <div class="col s12 l6">
              <p>Identifiant</p>
            </div>
            <div class="input-field col s6 modal-email">
              <input name="email" id="email" type="email">
            </div>
          </div>
          <div class="row row-bottom">
            <div class="col s12 l6">
              <p>Mot de passe</p>
            </div>
            <div class="input-field col s6 modal-password">
              <input name="password" id="password" type="password">
              <i onclick="PasswordReverse()" class="material-icons">remove_red_eye</i>
              <a href="forgot_mdp.php"><p>Forgot your password?</p></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row" id="modal-foot">
      <div class="width-diff left col offset-l4 l3 offset-s1 s12"><a href="sign_in.php">Créer un compte</a></div>


      <input type="submit" class="col s3 modal-submit" id="sign" value="Connexion"/>
    </div>
  </form>
</div>