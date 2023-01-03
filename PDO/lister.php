<?php

//ouverture d'une connexion à la bdd eleve

$objetPdo = new PDO('mysql:host=51.178.27.78;dbname=iapProject', 'benjamin', 'ran2');

$pdoStat = $objetPdo->prepare('SELECT * FROM `tbEleve`  ORDER BY nom ASC');

//éxecution de la requête
$executeIsOk = $pdoStat->execute();

//récupération des résultqts en une seule fois.
$eleve = $pdoStat->fetchAll();

var_dump($eleve);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lister</title>
    <link rel="stylesheet" href="css/wing.css">
</head>
<body>
<h1>Liste des eleves</h1>

<ul>
    <?php foreach ($eleve as $eleve):?>

    <li>
        <?= $eleve['nom'] ?> <?= $eleve['prenom'] ?> <?= $eleve['section'] ?> <?= $eleve['badge'] ?>

    </li>
    <?php endforeach; ?>
</ul>

</body>
</html>