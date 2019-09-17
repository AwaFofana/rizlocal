<?php 
include('conf/config.php') ;
include('conf/funct.php');
$tablefield = [
	"nom" => "first",
	"prenoms" => "last",
	"email" => "mail",
	"mdp" => "pass",
	"tel" => "phone",
	"domicile" => "home",
];
if (isset($_POST['fourregister'])) {
	$dataa= demystify($tablefield,$_POST);
    $erreurs = [];
    if (!notEmpty($dataa["nom"]) ) {
     $erreurs[] = "Veuillez entrer un nom";
    }
    if (!notEmpty($dataa["prenoms"]) ) {
     $erreurs[] = "Veuillez entrer un prenom";
    }
    if (!filter_var($dataa["email"],FILTER_VALIDATE_EMAIL) ) {
     $erreurs[] = "Veuillez entrer un email valide";
    }
    if (!notEmpty($dataa["mdp"]) ) {
     $erreurs[] = "Veuillez entrer un mot de passe";
    }
    if (!notEmpty($dataa["tel"]) ) {
     $erreurs[] = "Veuillez entrer un contact";
    }
    if (!notEmpty($dataa["domicile"]) ) {
     $erreurs[] = "Veuillez entrer un mot de passe";
    }
    if (empty($erreurs)) {
   		$sql = "INSERT INTO fournisseurs (nom,prenoms,email,mdp,tel,domicile) VALUES(?,?,?,?,?,?)";
   		$q = $db->prepare($sql);
   		$q->execute([e(ucfirst($dataa["nom"])),e(ucfirst($dataa["prenoms"])),e($dataa["email"]),sha1($dataa["mdp"]),e($dataa["tel"]),e($dataa["domicile"]),]);
   		$q->closeCursor();
   		setMsg("Inscription fournisseur reussi", "success");
   		redirect("loginfour");
    }

}
?>
<?php include('views/fourregister.views.php') ;?>