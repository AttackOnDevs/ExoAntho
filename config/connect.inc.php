<?php  

//requetes
$server = "localhost";
$dbname = "eval_users";
$user = "root";
$pwd = "root";

try {
$bdd = new PDO("mysql:host=$server;dbname=$dbname", $user, $pwd);
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Activation du mode d'erreur amélioré
} catch(Exception $error){
        echo "Erreur : " . $error ->getMessage();
}

$sql = "SELECT * FROM eval_users";
$req = $bdd->query($sql);

$results = $req->fetchAll();
?>

<ul>
        <?php foreach($results as $result) : ?>
                <li>nom : <?php echo $result["nom"]; ?> - prenom : <?php echo $result["prenom"]; ?></li>
                <?php endforeach; ?>
</ul>