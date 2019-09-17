<?php $title="Création de stock" ?>
<?php include("partials/header.php");?>
<br><br><br>
<div class="container">
  <div class="row">
    <div class="col-md-3">
      <ul class="nav nav-pills nav-stacked ">
        <li role="presentation" class="active" ><a href="dealer-space.php">Listes stock </a></li>
        <li role="presentation"><a href="dealer-space-create.php">Créer stock</a></li>
      </ul>
      <a href="#" class="btn-block text-danger btn-logout"><i class="fa fa-sign-out"></i> Se déconnecter</a>
    </div>
    <div class="col-md-9">
      <form action="" method="POST" role="form">
        <div class="h2"><?= $title?></div><hr>
         <?php $varietes= [
                  [
                    "id" => 1,
                    "variete" => "GT11",
                  ],
                  [
                    "id" => 2,
                    "variete" => "GT12",
                  ],
                  [
                    "id" => 3,
                    "variete" => "BOUAKEAMELIORE",
                  ]
              ] ?>
        <div class="form-group">
          <label for="">Varieté</label>
          <select name="variete_id" class="form-control">
            <?php foreach ($varietes as $k => $v):?>
              <option value="<?= $v["id"]?>"><?= $v["variete"]?></option>
            <?php endforeach;?>
          </select>
        </div> 
        <div class="form-group">
          <label for="">Quantité</label>
          <input type="text" name="qte" id="qte" class="form-control" required="required" pattern="[0-9].{0,}" title="Quantité" placeholder="Saisir la quantité...">
        </div> 

        <button type="submit" class="btn btn-success">Envoyer</button>
      </form>
    </div>
  </div>
</div>
<?php include("partials/footer.php");?>