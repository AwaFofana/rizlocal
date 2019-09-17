<?php $title="Se connecter" ?>
<?php include("partials/header.php") ?>
<div class="container">
  <div class="row">
    <div class="col-md-6">
      <form method="POST" action="">
        <fieldset><legend><h1><?= $title ?></h1></legend>
        <div class="row">
          <div class="form-group">
            <label class="form-label">ADRESSE EMAIL</label>
            <input type="text" name="mail" class="form-control" placeholder="Entrez votre email" required>
          </div>
          <div class="form-group">
            <label class="form-label">MOT DE PASSE</label>
            <input type="text" name="pass" class="form-control" placeholder="Entrez votre mot de passe" required>
          </div>
        </div>
        
        <div class="row">
          <div class="col-md-12 ">
            <input type="submit" value="<?=$title?>" class="btn btn-success btn-block" name="loginfour">
          </div>
        </div>
      </fieldset>
    </form>
  </div>
  <div class="col-md-6">
    <fieldset><legend><h1><?= "Créer un compte" ?></h1></legend>
    <div class="row">
      <p style="margin : 27.5px;">
        Créez votre compte fournisseur en quelques clics! <br>
        Et devenez partenaire avec NIACI/NEW RICE <br>
      </p>
      
    </div>
    <br><br>
    <div class="row">
      <div class="col-md-12 ">
        <a href="fourregister.php" class="btn btn-success btn-block">Créer mon compte</a>
      </div>
    </div>
  </fieldset>
</div>
</div>
</div>
<?php include("partials/footer.php");?>