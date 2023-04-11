<?

if (!isset($_SESSION["nom"])) {
	header("Location:index.php?erreur=log");
}

if (!isset($_SESSION["pv"]) || $_SESSION["pv"] == 0) {
	header("Location:index.php?erreur=pv0");
}