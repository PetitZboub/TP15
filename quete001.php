<?
session_start();
include "verification.php";

?>
<!DOCTYPE html>
<html>

<head>
	<title>Félicitations !</title>
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
				<li><a href="#">Personnages</a></li>
				<li><a href="#">Quêtes</a></li>
				<li><a href="deconnexion.php">Déconnexion</a></li>
			</ul>
		</nav>
	</header>
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
	<footer>
		<p>&copy; 2023 Jeu de rôle médiéval - Tous droits réservés.</p>
	</footer>
</body>

</html>