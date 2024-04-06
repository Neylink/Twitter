<?php
// en scénario toutes les valeurs du formulaire seront à l'intérieur
    if($_SERVER['REQUEST_METHOD'] == "POST") {
        echo "<pre>";
        // var_dump($_GET);
        var_dump($_POST);
        echo "</pre>";


        // procéder au controle des champs

        if(strlen($_POST["prenom"]) < 2 ) {
            echo "<p> Votre prénom doit faire au moins 2 caractères! </p>";
        }

        if($_POST["age"] < 18) {
            echo "<p>excuse me man, t'es mineur !</p>";
        }

        if($_POST["paysNaissance"] == "Belgique") {
            echo "<p>Sacha est raciste des belges!</p>";
        }

        // s'assurer que tous les champs sont obligatoires (pas vide)

        foreach ($_POST as $name => $valeurChamp) {
            if(empty($valeurChamp)) {
                echo "Le champ nomé $name est vide, veuillez renseigner une valeur";
            }
        }

    }

    ?>