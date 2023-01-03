<!DOCTYPE html>
<html lang="fr">
<head>
    <style>
        button {
    display: inline-block;
    background-color: #7b38d8;
    border-radius: 10px;
    border: 4px double #cccccc;
    color: #eeeeee;
    text-align: center;
    font-size: 28px;
    padding: 20px;
    width: 200px;
    -webkit-transition: all 0.5s;
    -moz-transition: all 0.5s;
    -o-transition: all 0.5s;
    transition: all 0.5s;
    cursor: pointer;
    margin: 5px;
  }
  </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <h1>Ajouter un contact</h1>
    <form action = "insertion.php" method="post">
        <p>
            <label for="nom">Nom</label>
            <input id="nom" type="text" name="firstName">

        </p>
        <p>
            <label for="prenom">Prenom</label>
            <input type="text" type="text" name="LastName">

        </p>
        <p>
            <label for="section">Section</label>
            <input type="text" type="text" name="section">

        </p>
        <p>
            <label for="badge">Badge</label>
            <input type="text" type="text" name="badge">

        </p>
    <p><input type="submit" value="Enregistrer"></p>
    
    </form>
</body>
</html>