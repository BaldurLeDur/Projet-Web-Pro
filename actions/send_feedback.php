<?php
	require_once "components/config.php";

	if (empty($_POST["first_name"] || empty($_POST["last_name"] || empty($_POST["first_name"] || empty($_POST["message"])) {
		$_SESSION['error'] = "Informations manquantes !";
		header("Location:../about.php");
		die();
	}

	if (mail("thesense@contact.com", $_POST["first_name"]." ".$_POST["last_name"]." vous a contacté !", "Bonjour à vous !\n\nUne nouvelle personne vous a contacté.".isset($_SESSION["user"])?". L'utilisateur":"Cette personne"." répondant au nom de".$_POST["first_name"]." ".$_POST["last_name"]." a ceci à vous dire:\n\n\"".$_POST["message"]."\"")) {
		$_SESSION["message"] = "Merci de vos retours !";
	} else {
		$_SESSION["message"] = "Une erreur est survenue.";
	}
	header("Location:../about.php")
?>