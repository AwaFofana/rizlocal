<?php 
include('conf/config.php') ;
include('conf/funct.php');
$tablefields = [
	"nom" => "lastname",
	"prenoms" => "firstname",
	"email" => "mail",
	"mdp" => "password",
	"tel" => "phone",
];
if (isset($_POST['register'])) {
	$data= demystify($tablefields,$_POST);
    $erreurs = [];
    if (!notEmpty($data["nom"]) ) {
     $erreurs[] = "Veuillez entrer un nom";
    }
    if (!notEmpty($data["prenoms"]) ) {
     $erreurs[] = "Veuillez entrer un prenom";
    }
    if (!filter_var($data["email"],FILTER_VALIDATE_EMAIL) ) {
     $erreurs[] = "Veuillez entrer un email valide";
    }
    if (!notEmpty($data["mdp"]) ) {
     $erreurs[] = "Veuillez entrer un mot de passe";
    }
    if (!notEmpty($data["tel"]) ) {
     $erreurs[] = "Veuillez entrer un contact";
    }
    if (empty($erreurs)) {
   		$sql = "INSERT INTO membres (nom,prenoms,email,mdp,tel) VALUES(?,?,?,?,?)";
   		$q = $db->prepare($sql);
   		$q->execute([e(ucfirst($data["nom"])),e(ucfirst($data["prenoms"])),e($data["email"]),sha1($data["mdp"]),e($data["tel"])]);
   		$q->closeCursor();
   		setMsg("Inscription reussi", "success");
   		redirect("dashboardmembre");
    }

}
?>
<?php include('views/register.views.php') ;?>