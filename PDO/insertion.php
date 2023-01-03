<?php


//ouverture d'une connexion à la bdd tableau eleve

$objetPdo = new PDO('mysql:host=localhost;dbname=iapProject', 'benjamin', 'ran2');

//préparation de la requète d'insertion (SQL)

$pdoStat = $objetPdo->prepare('INSERT INTO tbEleve VALUES (NULL, :nom, :prenom , section , :badge)');

//on lie chaque marqueur à une valeur

$pdoStat->bindValue(':nom', $_POST['lastName'], PDO::PARAM_STR);
$pdoStat->bindValue(':prenom', $_POST['firstName'], PDO::PARAM_STR);
$pdoStat->bindValue(':section', $_POST['section'], PDO::PARAM_STR);
$pdoStat->bindValue(':badge', $_POST['badge'], PDO::PARAM_STR);

//éxécution de la requête prépaarée
$insertIsOk = $pdoStat->execute();

if($insertIsOk){
    $message = "L'éleve a été ajouté dans la base de donnée";

}

else{
    $message = "Echec de l'insertion";

}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertion</title>
</head>
<body>
    <h1>Insertion des éleves</h1>
    
    <p><?php echo $message; ?></p>
    
</body>
</html>