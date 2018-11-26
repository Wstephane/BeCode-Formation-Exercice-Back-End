<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Condition Exercice 2, 3 et 4</title>
</head>
<body>
    <?php

        $recupAge = $_GET["age"];
        $recupGenre = $_GET["genre"];
        $recupAnglais = $_GET["anglais"];
        if($recupAge != "") {
        }
        if(isset($_GET["genre"])){
            $recupGenre = $_GET["genre"];
           }
           if(isset($_GET["anglais"])){
            $recupAnglais = $_GET["anglais"];
           }

            // Exercice 2

        // if ($recupAge < 12) {
        //     echo "Salut petit!";
        // } elseif ($recupAge >= 12 AND $reponse < 18) {
        //     echo "Salut l'ado!";
        // } elseif ($recupAge >= 18 AND $reponse < 115) {
        //     echo "Salut l'adulte!";
        // } else {
        //     echo "Wow! Toujours vivant?";
        // }

            // Exercice 3

        // if ($recupAge < 12) {
        //     if ($recupGenre == "masculin") {
        //         echo "Salut petit!";
        //     } else {
        //         echo "Salut petite!";
        //     }
        // } elseif ($recupAge >= 12 AND $recupAge < 18) {
        //     if ($recupGenre == "masculin") {
        //         echo "Salut l'l'adolescent!";
        //     } else {
        //         echo "Salut l'adolescente!";
        //     }
        // } elseif ($recupAge >= 18 AND $recupAge < 115) {
        //     if ($recupGenre == "masculin") {
        //         echo "Salut l'adulte!";
        //     } else {
        //         echo "Salut l'adulte!";
        //     }    
        // } else {
        //     if ($recupGenre == "masculin") {
        //         echo "Wow! Toujours vivant?";
        //     } else {
        //         echo "Wow! Toujours vivante?";
        //     }
        // }
                // Exercice 4

            // echo $recupAge;
            // echo $recupGenre;
            // echo $recupAnglais;

            
            if ($recupAge < 12) {
                if ($recupGenre == "masculin" AND $recupAnglais == "yes") {
                    echo "Hello boy!";
                } elseif ($recupGenre == "feminin" AND $recupAnglais == "yes") {
                    echo "Hello girl!";
                } elseif ($recupGenre == "masculin" AND $recupAnglais == "no") {
                    echo "Salut petit!";
                } elseif ($recupGenre == "feminin" AND $recupAnglais == "no") {
                    echo "Salut petite!";
                }
            } elseif ($recupAge >= 12 AND $recupAge < 18) {
                if ($recupGenre == "masculin") {
                   if ($recupAnglais == "yes") {
                        echo "Hello teenager boy!";
                   } else {
                        echo "Salut l'adolescent!";
                   }
                } elseif ($recupGenre == "feminin") {
                    if ($recupAnglais == "yes") {
                        echo "Hello teenager girl!";
                    } else {
                        echo "Salut l'adolescente!";
                    }
                }
            } elseif ($recupAge >= 18 AND $recupAge < 115) {
                if ($recupGenre == "masculin") {
                    if ($recupAnglais == "yes") {
                         echo "Hello Sir!";
                    } else {
                         echo "Salut l'adulte!";
                    }
                 } elseif ($recupGenre == "feminin") {
                     if ($recupAnglais == "yes") {
                         echo "Hello Lady!";
                     } else {
                         echo "Salut l'adulte!";
                     }
                 }
            } else {
                if ($recupGenre == "masculin") {
                    if ($recupAnglais == "yes") {
                         echo "Wow! Still alive, old man?";
                    } else {
                         echo "Wow! Toujours vivant?";
                    }
                 } elseif ($recupGenre == "feminin") {
                     if ($recupAnglais == "yes") {
                         echo "Wow! Still alive, old lady?";
                     } else {
                         echo "Wow! Toujours vivante?";
                     }
                 }
            }
    ?>
</body>
</html>


