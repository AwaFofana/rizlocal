<?php $title="Créer un compte" ?>
<?php include("partials/header.php") ;?>
<?php// include("partials/_notif.php"); ?>
<div class="container">
  <div class="row">
    <div class="col-lg-3 col-offset-3"></div>
    <div class="col-lg-8">
      <form method="POST" action="">
        <fieldset><legend><h1><?= $title ?></h1></legend>
         <div class="row">
           <?php include("partials/_erreur.php") ;?>
         </div>
        <div class="row">
          <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <div class="form-group">
              <label class="form-label">NOM</label>
              <input type="text" name="lastname" class="form-control" placeholder="Entrez votre nom" >
            </div>
          </div>
          <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <div class="form-group">
              <label class="form-label">PRENOMS</label>
              <input type="text" name="firstname" class="form-control" placeholder="Entrez votre prenom" >
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <div class="form-group">
              <label class="form-label">ADRESSE EMAIL</label>
              <input type="text" name="mail" class="form-control" placeholder="Entrez votre email" >
            </div>
          </div>
          <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <div class="form-group">
              <label class="form-label">MOT DE PASSE</label>
              <input type="text" name="password" class="form-control" placeholder="Entrez votre mot de passe" >
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <div class="form-group">
              <label class="form-label">TELEPHONE</label>
              <input type="text" name="phone" class="form-control" placeholder="Entrez votre contact">
            </div>
          </div>
        </div>
        
        <div class="row">
          <div class="col-md-12 ">
            <input type="submit" value="<?= $title ?>" class="btn btn-success btn-block" name="register">
          </div>
        </div>
        <br>
        <div class="row text-center">
          <p>Vous possédez déjà un compte ?</p>
          <a class="btn-link text-danger" href="dashboardmembre.php">Connectez-vous</a>
          
        </div>
        
      </fieldset>
    </form>
  </div>
</div>
</div>
<?php include("partials/footer.php");?>