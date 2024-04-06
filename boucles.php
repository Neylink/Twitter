<?php

    $eleves = [

        [
            "prenom" => "Adam",
            "nom" => "Atour",
            "age" => 20
        ],
        [
            "prenom" => "Mickeal",
            "nom" => "Page",
            "age" => 22
        ],
        [
            "prenom" => "Mickey",
            "nom" => "Brandon",
            "age" => 21
        ]

        ];


        echo $eleves[2]["nom"]; // Brandon

        foreach($eleves as $eleve) {
            echo "$eleve[prenom] $eleve[nom] a $eleve[age] ans ! <br>";
        }

?>

<table border="1">
    <thead>
        <tr>
            <td>
                Prénom
            </td>
            <td>
                Nom
            </td>
            <td>
                Age
            </td>
        </tr>
    </thead>
    <tbody>
        <?php foreach($eleves as $eleve) {
            if($eleve["age"] >= 21) {
                echo "<tr>";
                    echo "<td> $eleve[prenom] </td>";
                    echo "<td> $eleve[nom] </td>";
                    echo "<td> $eleve[age] </td>";
                echo "</tr>";
            }
        } ?>
    </tbody>
</table>