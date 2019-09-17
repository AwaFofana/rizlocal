<?php $title="Créer un compte dealer" ?>
<?php include("partials/header.php") ?>

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
              <input type="text" name="firstname" class="form-control" placeholder="Entrez votre nom" required>
            </div>
          </div>
          <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <div class="form-group">
              <label class="form-label">PRENOMS</label>
              <input type="text" name="lastname" class="form-control" placeholder="Entrez votre prenom" required>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <div class="form-group">
              <label class="form-label">ADRESSE EMAIL</label>
              <input type="text" name="mail" class="form-control" placeholder="Entrez votre email" required>
            </div>
          </div>
          <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <div class="form-group">
              <label class="form-label">MOT DE PASSE</label>
              <input type="text" name="motpasse" class="form-control" placeholder="Entrez votre mot de passe" required>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <div class="form-group">
              <label class="form-label">TELEPHONE</label>
              <input type="text" name="phone" class="form-control" placeholder="Entrez votre contact" required>
            </div>
          </div>
          <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <div class="form-group">
              <label class="form-label">LIEU DE RESIDENCE</label>
               <input type="text" name="home" class="form-control" placeholder="Entrez votre lieu de residence" required>
            </div>
          </div>
        </div>
           <div class="form-group">
              <label class="form-label">ZONE DE VENTE SOUHAITE</label>
               <input type="text" name="spacesale" class="form-control" placeholder="Entrez votre lieu de residence" required>
            </div>
          </div>
        </div>
        
     <!--   <div class="row">
          <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <div class="form-group">
              <label class="form-label">ZONE DE VENTE SOUHAITE</label>
              <select name="spacesale" id="input" class="form-control" required="required">
                <option value="">ABOBO</option>
                <option value="">ADJAME</option>
                <option value="">ATTECOUBE</option>
                <option value="">BINGERVILLE</option>
                <option value="">COCODY</option>
                <option value="">MARCORY</option>
                <option value="">KOUMASSI</option>
                <option value="">TREICHVILLE</option>
                <option value="">YOPOUGON</option>
                <option value="">ANYAMA</option>
                <option value="">BOUAKE</option>
                <option value="">YAMOUSSOKRO</option>
                <option value="">SANPEDRO</option> 
                <option value=""></option>
                <option value=""></option>
              </select>
            </div>
          </div> select zone vente-->
        </div>
        <div class="row">
          <div class="col-md-12 ">
            <input type="submit" value="<?= $title ?>" class="btn btn-success btn-block" 
            name="dealerregister">
          </div>
        </div>
        <br>
        <div class="row text-center">
          <p>Vous possédez déjà un compte ?</p>
          <a class="btn-link text-danger" href="logindealer.php">Connectez-vous</a>
          
        </div>
        
      </fieldset>
    </form>
  </div>
</div>
</div>
<?php include("partials/footer.php");?>