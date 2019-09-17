<?php 
include('conf/config.php') ;
include('conf/funct.php');
$tablefieldss = [
	"nom" => "firstname",
	"prenoms" => "lastname",
	"email" => "mail",
	"mdp" => "motpasse",
	"tel" => "phone",
	"domicile" => "home",
	"zonevente" => "spacesale",
];
if (isset($_POST['dealerregister'])) {
	$datas= demystify($tablefieldss,$_POST);
    $erreurs = [];
    if (!notEmpty($datas["nom"]) ) {
     $erreurs[] = "Veuillez entrer un nom";
    }
    if (!notEmpty($datas["prenoms"]) ) {
     $erreurs[] = "Veuillez entrer un prenom";
    }
    if (!filter_var($datas["email"],FILTER_VALIDATE_EMAIL) ) {
     $erreurs[] = "Veuillez entrer un email valide";
    }
    if (!notEmpty($datas["mdp"]) ) {
     $erreurs[] = "Veuillez entrer un mot de passe";
    }
    if (!notEmpty($datas["tel"]) ) {
     $erreurs[] = "Veuillez entrer un contact";
    }
    if (!notEmpty($datas["domicile"]) ) {
     $erreurs[] = "Veuillez entrer un mot de passe";
    }
    if (!notEmpty($datas["zonevente"]) ) {
     $erreurs[] = "Veuillez entrer un mot de passe";
    }
    if (empty($erreurs)) {
   		$sql = "INSERT INTO dealers (nom,prenoms,email,mdp,tel,domicile,zonevente) VALUES(?,?,?,?,?,?,?)";
   		$q = $db->prepare($sql);
   		$q->execute([e(ucfirst($datas["nom"])),e(ucfirst($datas["prenoms"])),e($datas["email"]),sha1($datas["mdp"]),e($datas["tel"]),e($datas["domicile"]),e($datas["zonevente"]),]);
   		$q->closeCursor();
   		setMsg("Inscription dealer reussi", "success");
   		redirect("logindealer");
    }

}
?>
<?php include('views/dealerregister.views.php') ;?>