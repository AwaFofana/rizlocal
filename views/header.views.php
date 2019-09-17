<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= (!empty($title)) ? $title : "ACCEUIL NIACI" ; ?> - NEW RICE</title>
    
    <!-- Font awesome -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- SmartMenus jQuery Bootstrap Addon CSS -->
    <link href="css/jquery.smartmenus.bootstrap.css" rel="stylesheet">
    <!-- Product view slider -->
    <link rel="stylesheet" type="text/css" href="css/jquery.simpleLens.css">
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="css/slick.css">
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href="css/nouislider.css">
    <!-- Theme color -->
    <link id="switcher" href="css/theme-color/default-theme.css" rel="stylesheet">
    <!-- <link id="switcher" href="css/theme-color/bridge-theme.css" rel="stylesheet"> -->
    <!-- Top Slider CSS -->
    <link href="css/sequence-theme.modern-slide-in.css" rel="stylesheet" media="all">
    <!-- Main style sheet -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/app.css" rel="stylesheet">
    <!-- Google Font
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>-->
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
  </head>
  <body>
    <!-- wpf loader Two
    <div id="wpf-loader-two">
      <div class="wpf-loader-two-inner">
        <span>Loading</span>
      </div>
    </div> -->
    <!-- / wpf loader Two -->
    <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
    <!-- END SCROLL TOP BUTTON -->
    <!-- Start header section -->
    <header id="aa-header">
      <!-- start header top  -->
      <div class="aa-header-top">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="aa-header-top-area">
                <!-- start header top left -->
                <div class="aa-header-top-left">
                  <!-- start language
                  <div class="aa-language">
                    <div class="dropdown">
                      <a class="btn dropdown-toggle" href="#" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        FRANCAIS
                        <span class="caret"></span>
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li><a href="#"><img src="img/flag/french.jpg" alt="">FRENCH</a></li>
                      </ul>
                    </div>
                  </div>-->
                  <!-- / language -->
                  <!-- start currency -->
                  <div class="aa-currency">
                    <div class="dropdown">
                      <a class="btn dropdown-toggle" href="#" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        F CFA
                        <span class="caret"></span>
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li><a href="#">F CFA</a></li>
                        
                      </ul>
                    </div>
                  </div>
                  <!-- / currency -->
                  <!-- start cellphone -->
                  <div class="cellphone hidden-xs">
                    <p><span class="fa fa-phone"></span> + 225 49929092</p>
                  </div>
                  <!-- / cellphone -->
                </div>
                <!-- / header top left -->
                <div class="aa-header-top-right">
                  <ul class="aa-head-top-nav-right">
                    <li><a href="register.php">S'inscrire</a></li>
                    <li><a href="dashboardmembre.php">Connexion</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- / header top  -->
      <!-- start header bottom  -->
      <div class="aa-header-bottom">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="aa-header-bottom-area">
                <!-- logo  -->
                <div class="aa-logo">
                  <!-- Text based logo -->
                  <!--  <a href="index.php">
                    <span class="fa fa-shopping-cart"></span>
                    <p>NIACI<strong>NEW RICE</strong> <span>LE RIZ DE LA CI PROFONDE</span></p>
                  </a>
                  img based logo -->
                  <a href="index.php"><img src="img/logoa.jpeg" alt="logo img" width="150px" height="100px"></a>
                </div>
                <!-- / logo  -->
                <!-- cart box -->
                <div class="aa-cartbox">
                  <a class="aa-cart-link" href="#">
                    <span class="fa fa-shopping-basket"></span>
                    <span class="aa-cart-title">COMMANDER EN LIGNE</span>
                    <span class="aa-cart-notify"></span>
                  </a>
                  <div class="aa-cartbox-summary">
                    <ul>
                      <li>
                        <a class="aa-cartbox-img" href="#"><img src="img/image1.jpg" alt="img"></a>
                        <div class="aa-cartbox-info">
                          <h4><a href="#">25 KG</a></h4>
                          <p>1 x 12 500 F</p>
                        </div>
                        <a class="aa-remove-product" href="#"><span class="fa fa-times"></span></a>
                      </li>
                      <li>
                        <a class="aa-cartbox-img" href="#"><img src="img/image1.jpg" alt="img"></a>
                        <div class="aa-cartbox-info">
                          <h4><a href="#">25 KG</a></h4>
                          <p>1 x 12 500 F</p>
                        </div>
                        <a class="aa-remove-product" href="#"><span class="fa fa-times"></span></a>
                      </li>
                      <li>
                        <span class="aa-cartbox-total-title">
                          Total
                        </span>
                        <span class="aa-cartbox-total-price">
                          25 000 f
                        </span>
                      </li>
                    </ul>
                    <a class="aa-cartbox-checkout aa-primary-btn" href="index.php">Quitter</a>
                  </div>
                </div>
                <!-- / cart box -->
                <!-- search box -->
                <div class="aa-search-box">
                  <form action="">
                    <input type="text" name="" id="" placeholder="Recherche ">
                    <button type="submit"><span class="fa fa-search"></span></button>
                  </form>
                </div>
                <!-- / search box -->
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- / header bottom  -->
    </header>
    <marquee direction="left"><h5 style="color:red">ABIDJAN , LA CAPITALE ECONOMIQUE...................</h5></marquee>
    <!-- / header section -->
    <!-- menu -->
    <section id="menu">
      <div class="container">
        <div class="menu-area">
          <!-- Navbar -->
          <div class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              </button>
            </div>
            <div class="navbar-collapse collapse">
              <!-- Left nav -->
              <ul class="nav navbar-nav">
                <li><a href="index.php">ACCEUIL</a></li>
                <li><a href="niaci.php">A PROPOS</a>
                
                <li><a href="product.php">BOUTIQUE EN LIGNE</a>
                
              </li>
              <li><a href="act.php">ACTUALITES <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="activite.php"> -  Activités</a></li>
                <li><a href="picture.php">-  Photos</a></li>
              </ul>
            </li>
            
            <li><a href="dashboardmembre.php">ESPACE MEMBRE</a></li>
            <li><a href="contact.php">CONTACT</a></li>
            <li><a href="#">DEALER <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="dealerregister.php">DEVENIR DEALER</a></li>
              <li><a href="dealer-space.php">MON ESPACE DEALER</a></li>
            </ul>
          </li>
          <li><a href="#">FOURNISSEUR<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="fourregister.php">DEVENIR FOURNISSEUR</a></li>
            <li><a href="four-space.php">MON ESPACE FOUNISSEUR</a></li>
          </ul></li>
        </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
  </div>
</section>
<!-- / menu -->