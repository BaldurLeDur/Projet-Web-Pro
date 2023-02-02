<?php
require_once("../components/config.php");

if (empty($_POST['firstname']) || empty($_POST["name"])) {
	$_SESSION['error'] = "Veuillez rentrer votre nom et prénom !";
} else if (empty($_POST["email"])) {
	$_SESSION["error"] = "Veuillez rentrer un email valide !";
} else if (empty($_POST["tel"])) {
	$_SESSION["error"] = "Veuillez rentrer un numéro de téléphone valide !";
} else if (empty($_POST["first_password"])) {
	$_SESSION["error"] = "Veuillez rentrer un mot de passe !";
} else if (empty($_POST["confirm_password"])) {
	$_SESSION["error"] = "Veuillez confirmer le mot de passe !";
} else if ($_POST["first_password"]!=$_POST["confirm_password"]) {
	$_SESSION["error"] = "Les mots de passe ne correspondent pas.";
}

if (isset($_SESSION['error'])) {
	echo "Returned error \"".$_SESSION["error"]."\"";
	header("Location:../sign_in.php");
	die();
}

$news = isset($_POST['news'])?1:0;

$sql = "INSERT INTO users(admin, last_name,first_name,email,password,phone_number,newsletter,fidelity) VALUES(0, :lastname,:firstname, :email, sha1(:password), :tel, $news, 0)";
$dataBinded=array(
    ':lastname'   => $_POST['name'],
    ':firstname'   => $_POST['firstname'],
    ':email'=> $_POST['email'],
    ':password'=> "+°£µ%£+P££P£¨P£+P£HG973GDIU)-=P£¨PM£P°£LM£@PAINISBREAD'.".$_POST['first_password'],
    ':tel'   => $_POST['tel']
);
$pre = $mysqlConnection->prepare($sql);
$pre->execute($dataBinded);

echo empty($pre);

$_SESSION["success"] = "Compte créé avec succès!\nVous pouvez maintenant vous connecter!";
header("Location:../index.php");

exit();

?>