<?
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jeu_de_role";

try {
	$pdo = new PDO('mysql:host=' . $servername . ';dbname=' . $dbname, $username, $password);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $error) {
	echo $error;
}

// préparation de la requête SQL
$stmt = $pdo->prepare("update personnage set pv=0 where nom=:nom");

// exécution de la requête SQL avec les données du formulaire
$return = $stmt->execute([
	':nom' => $_SESSION["nom"]
]);

$_SESSION["pv"] = 0;

header("Location:personnage.php");