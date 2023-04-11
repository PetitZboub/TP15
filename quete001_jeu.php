<?
session_start();
include "verification.php";
include "header.php";
	?>

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
<?php include "footer.php"; ?>