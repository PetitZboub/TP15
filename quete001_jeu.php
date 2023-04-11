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
			<h2>La quête de Brennac</h2>
			<p>Vous avez accepté la quête du chef de village de Brennac et vous êtes maintenant en route vers la forêt
				voisine où se cachent les créatures maléfiques qui terrorisent le village.</p>
			<p>Vous arrivez dans une clairière sombre et sinistre. Soudain, vous entendez un bruit dans les buissons à
				votre droite. Que faites-vous ?</p>
			<form id="quete1" action="quete001_resultat.php" method="POST">
				<input type="radio" name="action" id="attaquer" value="attaquer"><label for="attaquer">J'attaque
					immédiatement !</label>
				<br>
				<input type="radio" name="action" id="approcher" value="approcher">
				<label for="approcher">Je m'approche lentement pour voir ce qui se passe.</label>
				<br>
				<input type="radio" name="action" id="fuir" value="fuir">
				<label for="fuir">Je cours le plus vite possible dans l'autre direction !</label>
				<br>
				<button type="submit">Valider</button>
			</form>
		</main>
	</div>
	<footer>
		<p>&copy; 2023 Jeu de rôle médiéval - Tous droits réservés.</p>
	</footer>
</body>

</html>