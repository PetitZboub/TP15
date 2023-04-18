<?
session_start();

include "bdd.php";
$connexion = connexion();
include "bdd.php";
perdu($connexion);
header("Location:personnage.php");