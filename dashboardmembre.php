<?php 
include('conf/config.php') ;
include('conf/funct.php');
$tablefields = [
	"email" => "mail",
	"mdp" => "password",
];
if (isset($_POST['login'])) {
	$data= demystify($tablefields,$_POST);
    $erreurs = [];
    if (!filter_var($data["email"],FILTER_VALIDATE_EMAIL) ) {
     $erreurs[] = "Veuillez entrer un email valide";
    }
    if (!notEmpty($data["mdp"]) ) {
     $erreurs[] = "Veuillez entrer un mot de passe";
    }
    if (empty($erreurs)) {
   		$sql = "SELECT * FROM membres WHERE email = ? AND mdp = ?";
   		$q = $db->prepare($sql);
   		$q->execute([e($data["email"]),e(sha1($data["mdp"]))]);
   		$rs = $q->fetch(PDO::FETCH_OBJ);
   		$q->closeCursor();
   		if (!$rs) {
   			$erreurs[] = "Mot de passe ou Email invalide";
   		}else{
   			$_SESSION["user"] = $rs;
	   		setMsg("VOUS ETES CONNECTES", "success");
	   		redirect("product");
   		}
    }


}
?>
<?php include('views/dashboardmembre.views.php') ;?>