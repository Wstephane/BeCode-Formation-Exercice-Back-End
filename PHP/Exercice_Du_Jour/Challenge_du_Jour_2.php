<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Exercice Challenge du jour 2</title>
    </head>
    <body>
            <h1>Exercice du jour 2</h1>
            <ul>
                <li>Niveau 1 : Générer un tableau de 100 éléments incrémenté. ([0,1,2,3,...])</li>
                <li>Niveau 2 : A l'intérieur de chaque élément, intercaler un tableau contenant le chiffre précédent ( [0,[0], 1, [1], 2, [2], ...] )</li>
                <li>Niveau 3 : Générer une liste à puces avec le tableau de la manière suivante :</li>
            </ul>
           
            <?php

            $tableau = [];

            for ($i = 0; $i < 100; $i++) {
                array_push($tableau, $i);
                array_push($tableau, [$i]);
            }
            echo "<ul>";
            foreach ($tableau as $value) {
                if (is_int($value)) {
                    echo "<li>".$value."</li>";
                } else {
                    echo "<ul><li>".$value[0]."</li></ul>";
                }
            }
            echo "</ul>";

            // print_r($tableau);

            ?>
    </body>
</html>