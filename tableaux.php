<?php

    // stocker plusieurs données dans une variable
    // des données de différents types

    $array = [27, true, "text1", ["Maroc", "Algérie", "France"]];

    // PHP personnaliser les index des valeurs

    $ryan = [
        "prenom" => "Ryan",
        "nom" => "arasamohan",
        "age" => 20,
        "hobbies" => ["cinéma", "musique", "foot"],
        "isPGM" => true
    ];

    echo "<pre>";
    var_dump($ryan);
    echo "</pre>";

    echo "<pre>";
    print_r($ryan);
    echo "</pre>";

?>



