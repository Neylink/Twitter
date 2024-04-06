<?php


    // comment récupérer les paramètres d'url
    // ici je veux récupérer l'identifiant d'adam 
    // le mois
    // pour récupérer les informations en BDD

    // superglobale $_GET =>
    // permet de récupérer les paramètre d'un url
    // permet aussi de récupérer les données d'un formulaire en scénario GET
    $idUser = $_GET["id_user"]; // 1
    $month = $_GET["month"]; // 3

    // des tableaux multidimentionnels
    // avec index personnalisés
    $users = [
        "1" => ["adam", "aitour", 22],
        "2" => ["nassim", "Terzi", 21],
        "3" => ["ryan", "arasamohan", 20]
    ];

    $tweets = [
        "1" => ["Bonne année", "Hate de reprendre les cours"],
        "2" => ["Paris c'est froid", "Hate de voir doumbé vs baki"],
        "3" => ["Ramadan kareem", "Bon carème"]
    ];

    require('haut_page.php');

?>

    <h1>Bienvenue <?= $users[$idUser][0] . " " . $users[$idUser][1]; ?></h1>

    <h2>Voici vos tweets : </h2>
    <ul>
        <?php foreach($tweets[$month] as $tweet) { ?>
            <li> <?= $tweet; ?> </li>
        <?php } ?>
    </ul>

    <?php

    require('bas_page.php');

?>