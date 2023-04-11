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

// exécution de la requête SQL avec les données du formulaire
$stmt = $pdo->prepare("select * from  personnage order by nom");
if ($stmt->execute()) {
	$perso = $stmt->fetchAll();
}

?>
<!DOCTYPE html>
<html>

<head>
	<title>Jeu de rôle médiéval</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Amatic+SC&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=DotGothic16&display=swap" rel="stylesheet">
</head>

<body>
	<header>
		<h1>Jeu de rôle médiéval</h1>
		<nav>
			<ul>
				<li><a href="jeu.php">Accueil</a></li>
				<li><a href="#">Profil</a></li>
				<li><a href="personnage.php">Personnages</a></li>
				<li><a href="Quete001.php">Quêtes</a></li>
				<li><a href="deconnexion.php">Déconnexion</a></li>
			</ul>
		</nav>
	</header>
	<div id="wrapper">
		<main>
			<h2>Liste des personnages</h2>
			<table>
				<thead>
					<tr>
						<th>Nom</th>
						<th>Race</th>
						<th>Classe</th>
						<th>Niveau</th>
						<th>Points de vie</th>
					</tr>
				</thead>
				<tbody>
					<? foreach ($perso as $p) { ?>
					<? if ($p["nom"] == $_SESSION["nom"]) {
							$class = "surbrillance";
						} else {
							$class = "";
						}
						?>
					<tr class=<?= $class ?>>
						<td><?= $p["nom"] ?></td>
						<td><?= $p["race"] ?></td>
						<td><?= $p["classe"] ?></td>
						<td><?= $p["niveau"] ?></td>
						<td><?= $p["pv"] ?></td>
					</tr>
					<? } ?>
				</tbody>
			</table>
		</main>
	</div>
	<footer>
		<p>&copy; 2023 Jeu de rôle médiéval - Tous droits réservés.</p>
	</footer>
</body>

</html>