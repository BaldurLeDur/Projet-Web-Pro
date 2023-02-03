<?php
require_once("../components/config.php");

if (empty($_POST["email"])) {
	$_SESSION["message"] = "Veuillez rentrer un email valide !";
} else if (empty($_POST["password"])) {
	$_SESSION["message"] = "Veuillez rentrer un mot de passe !";
}

if (isset($_SESSION['error'])) {
	echo "Returned error \"".$_SESSION["message"]."\"";
	header("Location:../index.php#modal1");
	die();
}

$sql = "SELECT * FROM users WHERE email = :email AND password = sha1(:password)";
$dataBinded=array(
    ':email'=> $_POST['email'],
    ':password'=> "+°£µ%£+P££P£¨P£+P£HG973GDIU)-=P£¨PM£P°£LM£@PAINISBREAD'.".$_POST['password'],
);
$pre = $mysqlConnection->prepare($sql); 
$pre->execute($dataBinded);
$user = $pre->fetch(PDO::FETCH_ASSOC);

if (!empty($user)) {
	$_SESSION['user'] = $user;
	$_SESSION['success'] = "Rebonjour, ".$user["first_name"]." !";
	echo "Success!";
} else {
	$_SESSION['error'] = "Une erreur est survenue.\nVeuillez vérifier vos identifiants.";
	echo "Fuck you";
}
header("Location:../index.php");
?>