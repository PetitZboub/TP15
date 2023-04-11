<?
session_start();
include "verification.php";
include "header.php";
?>

<div id="wrapper">
	<main>
		<h2>Quête acceptée !</h2>
		<p>Vous avez accepté la première quête du jeu de rôle médiéval. Voici les informations que vous devez
			connaître :</p>
		<ul>
			<li>Nom de la quête : Sauver le village de Brennac</li>
			<li>Description : Les habitants de Brennac sont terrorisés par des créatures maléfiques qui rôdent dans
				la forêt voisine. Votre mission est de débarrasser la région de ces monstres.</li>
			<li>Récompense : 100 pièces d'or</li>
		</ul>
		<h2>Instructions :</h2>
		<ol>
			<li>Allez voir le chef du village de Brennac pour en savoir plus sur la situation.</li>
			<li>Partez à la recherche des créatures maléfiques dans la forêt voisine.</li>
			<li>Éliminez les créatures maléfiques.</li>
			<li>Retournez voir le chef du village pour obtenir votre récompense.</li>
		</ol>
		<a href="quete001_jeu.php">Commencer la quête</a>
	</main>
</div>
<?php include "footer.php"; ?>