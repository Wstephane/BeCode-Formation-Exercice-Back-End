<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Condition Exerecice 5 et 6</title>
</head>
<body>
    <?php
        $recupNote = $_GET["note"];

        if($recupNote != "") {
        }

        // Exercice 5

        // if ($recupNote == 1 OR $recupNote == 2 OR $recupNote == 3) {
        //     echo "Ce travail est nul.";
        // } elseif ($recupNote == 6 OR $recupNote == 7 OR $recupNote == 8 OR $recupNote == 9) {
        //     echo "Ce travail n'est pas terrible.";
        // } elseif ($recupNote == 10) {
        //     echo "C'est tous juste!";
        // } elseif ($recupNote == 11 OR $recupNote == 12 OR $recupNote == 13 OR $recupNote == 14) {
        //     echo "C'est pas mal.";
        // } elseif ($recupNote == 15 OR $recupNote == 16 OR $recupNote == 17 OR $recupNote == 18) {
        //     echo "Bravo!";
        // } elseif ($recupNote == 19 OR $recupNote == 20) {
        //     echo "Police! Arrêtez ce tricheur!";
        // }

        // Exercice 6

        switch ($recupNote) {
            case 0 :
            case 1 :
            case 2 :
            case 3 :
                echo "Ce travail est nul";
                break;
            case 6 :
            case 7 :
            case 8 :
            case 9 :
                echo "Ce travail n'est pas terrible.";
                break;
            case 10 :
                echo "C'est tous juste!";
                break;
            case 11 :
            case 12 :
            case 13 :
            case 14 :
                echo "C'est pas mal.";
                break;
            case 15 :
            case 16 :
            case 17 :
            case 18 :
                echo "Bravo!";
                break;
            case 19 :
            case 20 :
                echo "Police, Arrêtez ce tricheur!";
                break;
        }
    ?>
</body>
</html>