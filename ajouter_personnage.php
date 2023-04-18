<?
session_start();
//On inclut le fichier de connexion à la BDD
include "bdd.php";
//On appelle la fonction de connexion à la BDD et on stocke notre objet PDO dans unevariable
$connexion = connexion();

if (isset($_POST['nom'])) {
    // récupération des données du formulaire
    $nom = $_POST['nom'];
    $race = $_POST['race'];
    $classe = $_POST['classe'];
    $niveau = $_POST['niveau'];
    $pv = $_POST['pv'];
    $force_ = $_POST['force_'];
    $dexterite = $_POST['dexterite'];
    $constitution = $_POST['constitution'];
    $intelligence = $_POST['intelligence'];
    $sagesse = $_POST['sagesse'];
    $charisme = $_POST['charisme'];

    ajouterPersonnage(
        $connexion,
        $nom,
        $race,
        $classe,
        $niveau,
        $pv,
        $force_,
        $dexterite,
        $constitution,
        $intelligence,
        $sagesse,
        $charisme
        );

    $_SESSION["nom"] = $nom;
    $_SESSION["race"] = $race;
    $_SESSION["classe"] = $classe;
    $_SESSION["pv"] = $pv;
    // redirection vers la page d'accueil
    header('Location: jeu.php');
    exit();
}