<?
session_start();

include "bdd.php";
$connexion = connexion();
perdu($connexion);
include "deconnexion.php";
header("Location:personnage.php"); ?>