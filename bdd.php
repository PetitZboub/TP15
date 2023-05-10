<?
function connexion()
{
    $servername = $_SERVER['SERVER_NAME'];
    if ($servername == "localhost") {
        $username = "root";
        $password = "";
        $dbname = "jeu_de_role";
    } else {
        $username = "id20628559_root";
        $password = "t4\<Le8D5H7)&a<j";
        $dbname = "id20628559_rouchjdr";
    }


    try {
        $pdo = new PDO(
            'mysql:host=' . $servername . ';dbname=' . $dbname,
            $username,
            $password
        );
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

function perdu($pdo)
{
    // préparation de la requête SQL
    $stmt = $pdo->prepare("update personnage set pv=0 where nom=:nom");

    // exécution de la requête SQL avec les données du formulaire
    $return = $stmt->execute([
        ':nom' => $_SESSION["nom"]
    ]);

    $_SESSION["pv"] = 0;
}

function listePerso($pdo)
{
    // exécution de la requête SQL avec les données du formulaire
    $stmt = $pdo->prepare("select * from  personnage order by nom");
    if ($stmt->execute()) {
        $perso = $stmt->fetchAll();
        return $perso;
    }
}
?>