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

include "header.php";
?>

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
						<td>
							<?= $p["nom"] ?>
						</td>
						<td>
							<?= $p["race"] ?>
						</td>
						<td>
							<?= $p["classe"] ?>
						</td>
						<td>
							<?= $p["niveau"] ?>
						</td>
						<td>
							<?= $p["pv"] ?>
						</td>
					</tr>
				<? } ?>
			</tbody>
		</table>
	</main>
</div>
<?php include "footer.php"; ?>