<?php include("partials/header.php");?>
<?php include("conf/config.php");?>
<?php
$items= [
  [
  "id" => 1,
  "image" => "slide1.jpg",
  ],
  [
  "id" => 2,
  "image" => "slide2.jpg",
  ],
  [
  "id" => 3,
  "image" => "slide3.jpg",
  ]
];

$products= [
  [
  "id" => 1,
  "image" => "image1.jpg",
  "title" => "GT11",
  "pu" => 12500,
  ],
  [
  "id" => 2,
  "image" => "image1.jpg",
  "title" => "BOUAKE AMELIORE",
  "pu" => 11000,
  ],
  [
  "id" => 3,
  "image" => "image1.jpg",
  "title" => "GT12",
  "pu" => 12000,
  ]
] ?>
<div class="container-fluido" style="margin-top: 45px;">
  <div id="carousel-id" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
    <?php foreach ($items as $k => $v):?>
        <li data-target="#carousel-id" data-slide-to="<?=$v["id"]?>" class="<?=($k==2)?'active':''?>"></li>
    <?php endforeach;?>
    </ol>
    <div class="carousel-inner">
      <?php foreach ($items as $k => $v):?>
      <div class="item <?=($k==2)?'active':''?>">
        <img src="img/<?=$v["image"]?>" alt="Slide <?=$v["id"]?>" >
        <div class="container">
          <div class="carousel-caption">
            <section id="aa-product-categoryf">
              <div class="aa-product-catg-content">
                <div class="aa-product-catg-body">
                    <div class="container">
                      <ul class="aa-product-catg">
                        <?php foreach ($products as $k => $v):?>
                          <li>
                            <figure>
                              <a class="aa-product-img" href="#"><img src="img/<?=$v["image"]?>" width="250px" height="300px"></a>
                              <a class="aa-add-card-btn" href="acheter.php"><span class="fa fa-shopping-cart"></span>Acheter</a>
                              <figcaption>
                              <h5 class="aa-product-title"><a href="#"><?=$v["title"]?></a></h5>
                              <span class="aa-product-price"><?= number_format($v["pu"], 0, '', ' ');?> FCFA</span><span class="aa-product-price"></span>
                              </figcaption>
                            </figure>
                            <div class="aa-product-hvr-content">
                              
                            </div>
                          </li>
                        <?php endforeach;?>
                     </ul>
                    </div>
                </div>
              </div>
            </section>
          </div>
        </div>
      </div>
      <?php endforeach;?>
    </div>
    <a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
    <a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
  </div>
</div>
<?php include("partials/footer.php"); ?>