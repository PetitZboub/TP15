<?
$pagename = $_SERVER['PHP_SELF'];
echo $pagename;
switch ($pagename) {
	case "/jeuderole/jeu.php":
		$title = 'Debut de jeu';
		break;
	case "/jeuderole/quete001.php":
		$title = 'Quete Epique';
		break;
	case "perdu";
		$title = "Perdu";
		break;
	default:
		$title='jdr';
}

?>

<!DOCTYPE html>
<html>

<head>
	<title><?$title?></title>
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
				<li><a href="personnages.php">Personnages</a></li>
				<li><a href="#">Quêtes</a></li>
				<li><a href="deconnexion.php">Déconnexion</a></li>
			</ul>
		</nav>
	</header>