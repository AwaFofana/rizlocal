<?php include("partials/header.php");?>
<div class="container-fluid" style="padding-left:0;">
  <div class="row">
    <div class="col-md-4" id="title-space">
      <a href="../index.php"><div id="logo">
      <img src="img/dealer.png" width="60px" height="70px"></div></a>
    </div>
    <div class="col-md-7 col-md-offset-1">
      <div class="pull-right">
        <h3>
        <i class="glyphicon glyphicon-log-in"></i>
        </h3>
      </div>
    </div>
  </div>
  </nav> <!-- Fin </nav>-->
  <div class="container-fluid" style="margin-top: 80px;">
    <div class="row">
      <div class="container">
        <div  class="row">
          <div class="col-md-4">
            <div class="row">
              <div class="col-md-12">
                <h4><i class="glyphicon glyphicon-stock"></i> FAIRE DES ACHATS</h4>
                <span class="text-muted">Entrez votre email et votre mot de passe pour vous connecter.</span>
              </div>
            </div>
          </div>
          <div class="col-md-8">
            <form class="form-signin" method="POST">
              <div class="row">
                <?php include("partials/_erreur.php") ;?>
              </div>
              <label for="inputEmail" class="sr-only">EMAIL</label>
              <input type="email" name="mail" class="form-control" placeholder="E-mail" autofocus>
              <br><br>
              <label for="inputPassword" class="sr-only">MOT DE PASSE</label>
              
              <input type="password" name="password" class="form-control" placeholder="Mot de passe"><br>
              <input type="submit" class="btn btn-success btn-block"  name="login" value="CONNEXION">
            </form>
            <div class="row" style="text-align: center;padding-left: 70px;">
              <!--<div class="col-lg-8">
                <a href="recupPass.php" class="btn-link">Mot de passe oublié ?</a>
              </div> -->
            </div>
          </div>
        </div><hr>
        <div class="row" style="padding-bottom: 50px;">
          <div class="col-md-4" style="padding-top: 15px;">
            <h4>Vous n'avez pas encore de compte ?</h4>
            <span class="text-muted"> Cr&eacutez votre compte en quelques clics et gratuitement .</span>
          </div>
          <div class="col-md-7 col-md-offset-1" style="padding-top: 30px;">
            <span id="lien2" class="btn btn-lg btn-default">
              <a  href="register.php" style="text-decoration: none;"> Cr&eacuter un compte <i class="glyphicon glyphicon-chevron-right"></i></a>
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include("partials/footer.php");?>