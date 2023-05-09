<?
session_start();
include "verification.php";
//On inclut le fichier de connexion à la BDD
include "bdd.php";
//On appelle la fonction de connexion à la BDD et on stocke notre objet PDO dans unevariable
$connexion = connexion();
$perso = listePerso($connexion);

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
				<? foreach ($perso as $p) { 
					if ($p["nom"] == $_SESSION["nom"]) {
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