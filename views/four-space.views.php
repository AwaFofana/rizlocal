<?php $title="Liste de stock" ?>
<?php include("partials/header.php");?>
<br><br><br>
<div class="container">
  <div class="row">
    <div class="col-md-3">
      <ul class="nav nav-pills nav-stacked ">
        <li role="presentation" class="active" ><a href="four-space.php">Listes Produits</a></li>
        <li role="presentation"><a href="four-space-create.php">Envoyer stock</a></li>
      </ul>
      <a href="#" class="btn-block text-danger btn-logout"><i class="fa fa-sign-out"></i> Se déconnecter</a>
    </div>
    <div class="col-md-9">
        <div class="table-responsive">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>#</th>
                <th>Varieté de riz</th>
                <th>Quantité</th>
                <th>Prix unitaire</th>
                <th>Montant</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php $donnees= [
                  [
                    "id" => 1,
                    "variete" => "GT11",
                    "qte" => 40,
                    "pu" => 12500,
                  ],
                  [
                    "id" => 2,
                    "variete" => "GT11",
                    "qte" => 50,
                    "pu" => 12500,
                  ],
                  [
                    "id" => 3,
                    "variete" => "BOUAKEAMELIORE",
                    "qte" => 30,
                    "pu" => 11000,
                  ],
                  [
                    "id" => 4,
                    "variete" => "GT11",
                    "qte" => 22,
                    "pu" => 12500,
                  ]
              ] ?>
              <?php foreach ($donnees as $k => $v):?>
              <tr>
                <td>#<?= $v["id"] ?></td>
                <td><?= $v["variete"] ?></td>
                <td><?= $v["qte"] ?></td>
                <td><?= number_format($v["pu"], 0, '', ' ');?> FCFA</td>
                <td><?= number_format($v["qte"]*$v["pu"], 0, '', ' ');?> FCFA</td>
                <td>
                    <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i> Modifier</a>
                    <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Supprimer</a>
                </td>
              </tr>
              <?php endforeach;?>
            </tbody>
          </table>
        </div>
    </div>
  </div>
</div>
<?php include("partials/footer.php");?>