<?
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jeu_de_role";

try {
    $pdo = new PDO('mysql:host=' . $servername . ';dbname=' . $dbname, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $error) {
    echo $error;
}

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

    // préparation de la requête SQL
    $stmt = $pdo->prepare("INSERT INTO personnage (nom, race, classe, niveau, pv, force_, dexterite, constitution, intelligence, sagesse, charisme)
    VALUES (:nom, :race, :classe, :niveau, :pv, :force_, :dexterite, :constitution, :intelligence, :sagesse, :charisme)");

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

    $_SESSION["nom"] = $nom;
    $_SESSION["race"] = $race;
    $_SESSION["classe"] = $classe;
    $_SESSION["pv"] = $pv;
    // redirection vers la page d'accueil
    header('Location: jeu.php');
    exit();
}