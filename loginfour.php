<?php 
include('conf/config.php') ;
include('conf/funct.php');
$tablefield = [
	"email" => "mail",
	"mdp" => "pass",
];
if (isset($_POST['loginfour'])) {
	$dataa= demystify($tablefield,$_POST);
    $erreurs = [];
    if (!filter_var($dataa["email"],FILTER_VALIDATE_EMAIL) ) {
     $erreurs[] = "Veuillez entrer un email valide";
    }
    if (!notEmpty($dataa["mdp"]) ) {
     $erreurs[] = "Veuillez entrer un mot de passe";
    }
    if (empty($erreurs)) {
   		$sql = "SELECT * FROM fournisseurs WHERE email = ? AND mdp = ?";
   		$q = $db->prepare($sql);
   		$q->execute([e($dataa["email"]),e(sha1($dataa["mdp"]))]);
   		$rs = $q->fetch(PDO::FETCH_OBJ);
   		$q->closeCursor();
   		if (!$rs) {
   			$erreurs[] = "Mot de passe ou Email invalide";
   		}else{
   			$_SESSION["user"] = $rs;
	   		setMsg("VOUS ETES CONNECTES CHER PARTENAIRE", "success");
	   		redirect("four-space");
   		}
    }


}
?>
<?php include('views/loginfour.views.php') ;?>