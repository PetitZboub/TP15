<?
$message = "";
if (isset($_GET["erreur"])) {
	if ($_GET["erreur"] == "log") {
		$message = "Veuillez créer un personnage pour commencer le jeu";
	}
	if ($_GET["erreur"] == "pv0") {
		$message = "Votre personnage est mort. Veuillez créer un nouveau personnage pour recommencer le jeu";
	}
}

?>
<!DOCTYPE html>
<html>

<head>
	<title>Création de personnage</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Amatic+SC&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=DotGothic16&display=swap" rel="stylesheet">
</head>

<body>
	<div class="container"> <?= $message ?> <h1>Création de personnage</h1>
		<form method="post" action="ajouter_personnage.php">
			<label for="nom">Nom :</label>
			<input type="text" id="nom" name="nom" required><br>
			<label for="race">Race :</label>
			<select id="race" name="race" required>
				<option value="">-- Sélectionner une race --</option>
				<option value="humain">Humain</option>
				<option value="elfe">Elfe</option>
				<option value="nain">Nain</option>
				<option value="halfling">Halfelin</option>
			</select><br>
			<label for="classe">Classe :</label>
			<select id="classe" name="classe" required>
				<option value="">-- Sélectionner une classe --</option>
				<option value="guerrier">Guerrier</option>
				<option value="voleur">Voleur</option>
				<option value="mage">Mage</option>
				<option value="clerc">Clerc</option>
			</select><br>
			<label for="niveau">Niveau :</label>
			<input type="range" id="niveau" name="niveau" min="1" max="20" value="1" required><br>
			<label for="pv">Points de vie :</label>
			<input type="range" id="pv" name="pv" min="1" value="10" required><br>
			<hr />
			<label>Attributs :</label><br>
			<label for="force_">Force :</label>
			<input type="range" id="force_" name="force_" min="1" max="20" value="10" required><br>
			<label for="dexterite">Dextérité :</label>
			<input type="range" id="dexterite" name="dexterite" min="1" max="20" value="10" required><br>
			<label for="constitution">Constitution :</label>
			<input type="range" id="constitution" name="constitution" min="1" max="20" value="10" required><br>
			<label for="intelligence">Intelligence :</label>
			<input type="range" id="intelligence" name="intelligence" min="1" max="20" value="10" required><br>
			<label for="sagesse">Sagesse :</label>
			<input type="range" id="sagesse" name="sagesse" min="1" max="20" value="10" required><br>
			<label for="charisme">Charisme :</label>
			<input type="range" id="charisme" name="charisme" min="1" max="20" value="10" required><br>
			<input type="submit" value="Créer" />
		</form>
	</div>
</body>

</html>