<?php 
include('conf/config.php') ;
include('conf/funct.php');
$tablefields = [
	"variete" => "variety",
	"qte" => "quant",

];
if (isset($_POST['register'])) {
	$data= demystify($tablefields,$_POST);
    $erreurs = [];
    if (!notEmpty($data["variete"]) ) {
     $erreurs[] = "Veuillez entrer une variete";
    }
    if (!notEmpty($data["qte"]) ) {
     $erreurs[] = "Veuillez entrer la quantite souhaite ";
    }
    if (empty($erreurs)) {
   		$sql = "INSERT INTO stocks (variete,qte) VALUES(?,?)";
   		$q = $db->prepare($sql);
   		$q->execute([e(ucfirst($data["variete"])),e($data["qte"]),]);
   		$q->closeCursor();
   		setMsg("Stock creer", "success");
   		redirect("dealer-space");
    }

}
?>
<?php include('views/dealer-space-create.views.php') ;?>