<?
function connexion()
{
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jeu_de_role";
try {
$pdo = new PDO('mysql:host=' . $servername . ';dbname=' . $dbname, $username,
$password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $error) {
echo $error;
}
return $pdo;
}
function ajouterPersonnage(
    $pdo,
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
    ) {
    // préparation de la requête SQL
    $stmt = $pdo->prepare("INSERT INTO personnage (nom, race, classe, niveau, pv,
    force_, dexterite, constitution, intelligence, sagesse, charisme)
    VALUES (:nom, :race, :classe, :niveau, :pv, :force_, :dexterite, :constitution,
    :intelligence, :sagesse, :charisme)");
    // exécution de la requête SQL avec les données du formulaire
    $return = $stmt->execute([
    ':nom' => $nom,
    ':race' => $race,
    ':classe' => $classe,
    ':niveau' => $niveau,
    ':pv' => $pv,
    ':force_' => $force_,
    ':dexterite' => $dexterite,
    ':constitution' => $constitution,
    ':intelligence' => $intelligence,
    ':sagesse' => $sagesse,
    ':charisme' => $charisme
    ]);
    }
?>