<?
session_start();
include "verification.php";
include "header.php";
?>

<div id="wrapper">
	<main>
		<h2>Félicitations <span class="surbrillance">
				<?= $_SESSION["nom"] ?>
			</span> ! </h2>
		<p>Votre personnage <span class="surbrillance">
				<?= $_SESSION["race"] ?>
				<?= $_SESSION["classe"] ?>
			</span> a
			été créé avec succès.</p>
		<p>Vous êtes maintenant prêt à vivre des aventures dans le monde fantastique de notre jeu de rôle médiéval.
		</p>
		<h2>Votre première quête :</h2>
		<p>Le village de Brennac est en danger ! Les habitants sont terrorisés par des créatures maléfiques qui
			rôdent dans la forêt voisine. Le chef du village vous a demandé de l'aide pour débarrasser la région de
			ces monstres. Partez en quête et sauvez le village !</p>
		<a href="quete001.php">Accepter la quête</a>
	</main>
</div>
<?php include "footer.php"; ?>