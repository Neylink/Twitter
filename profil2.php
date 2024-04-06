<?php

    require('connexion.php');

    // j'ai récupéré le paramètre idUser de mon url
    $idUser = $_GET["idUser"];

    // j'ai formulé une requête pour récupéré toutes les infos depuis la table user
    // liées à idUser
    // je récupère c'est un objet pdo statement complexe
    $stmt = $pdo->query("SELECT * FROM user WHERE idUser = $idUser"); // PDO STATEMENT
    
    // dans mon objet pdo statement
    // j'ai une méthode prédéfinie fetch
    // qui permet de récupérer les infos pour un jeu de données
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    echo '<pre>';
    var_dump($user);
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
    
    <ul>
        <?php foreach ($user as $index => $value) { ?>
            <li> <?= $index . " : " . $value; ?>  </li>
        <?php } ?>
    </ul>

</body>
</html>