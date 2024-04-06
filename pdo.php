<?php

// pour se connecter a notre bdd
// on va utilsier une interface appelée PDO

$pdo = new PDO(
    'mysql:host=localhost;dbname=test2',
    'root',
    'root',
    array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
    )
);

// preparation de ma requête
// $requete = $pdo->prepare("SELECT * FROM user"); // récupérer toutes données dans la table user
// $requete = $pdo->prepare("SELECT firstName, name FROM user");

// ordonner par prénom les données de manière décroissant
// $requete = $pdo->prepare("SELECT firstName, name FROM user ORDER BY firstName DESC");

// CLAUSE
// condition
// récupère moi les users qui ont un nom qui commence par 'a'
// $requete = $pdo->prepare("SELECT firstName, name FROM user WHERE name LIKE 'a%' ");

// que ca finisse par un a
// $requete = $pdo->prepare("SELECT firstName, name FROM user WHERE name LIKE '%a'");

// tous les noms de famille qui ont un a
// $requete = $pdo->prepare("SELECT firstName, name FROM user WHERE name LIKE '%a%'");

// les users qui ont plus de 18 ans
// $requete = $pdo->prepare("SELECT firstName, name FROM user WHERE age > 18 ");

// entre 18 et 20
// $requete = $pdo->prepare("SELECT firstName, name FROM user WHERE age >= 18 AND age <= 20 ");

// récupérer les non genré et non binaire
$requete = $pdo->prepare("SELECT * FROM user WHERE sexe IN ('ng', 'nb') ");


// execution de la requête
$requete->execute();

// récupération des données
// $users = $requete->fetchAll();
$users = $requete->fetchAll(PDO::FETCH_ASSOC);

echo '<pre>';
var_dump($users);
echo '</pre>';



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Voici vos users :</h1>

    <?php

    foreach ($users as $index => $user) { ?>

        <ul>
            <li>Prénom :  <?= $user["firstName"]; ?> </li>
            <li>Nom :  <?= $user["name"]; ?> </li>
            <li>Age :  <?= $user["age"]; ?> </li>
            <li>Sexe :  <?= $user["sexe"]; ?> </li>
        </ul>

        <a href="profil2.php?idUser=<?= $user["idUser"] ?>"> Accéder au profil de <?= $user["firstName"] . " " . $user["name"]; ?> </a>

    <?php } ?>

</body>

</html>