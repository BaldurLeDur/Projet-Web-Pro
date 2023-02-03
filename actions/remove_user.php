<?php
	require_once "../components/config.php"

	if (!isset($_SESSION["user"])) {
		header("Location:../index.php");
	}
	if ($_POST["id"]!=$_SESSION["user"]["id"] && !$_SESSION["user"]["admin"]) {
		header("Location:../index.php");
	}

	$sql = "SELECT name FROM users WHERE id=$_POST["id"]"
	$pre = $mysqlConnection->prepare($sql);
	$pre->execute()
	$name = $pre->fetch(PDO:FETCH_ASSOC)

	$sql = "DELETE FROM users WHERE id=$_POST["id"]";
	$pre = $mysqlConnection->prepare($sql);
	$pre->execute();

	if ($_POST["id"]==$_SESSION["user"]["id"]){
		unset($_SESSION["user"]);
	}

	$_SESSION["message"] = "Goodbye ".$name.".";

	header("Location:../index.php");
?>