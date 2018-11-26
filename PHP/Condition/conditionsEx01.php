<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
</head>
<body>
    <?php
        // if( $temperature >= 15 ) {
        //     // code à exécuter si la condition est TRUE
        //     $vetement_du_jour = "T-shirt";
        //    } else {
        //      // code à exécuter si la condition est FALSE
        //      $vetement_du_jour = "Pull-over";
        //    }

            // Exercice 0

        // $chambre_est_sale = true;

        // if ($chambre_est_sale === true) {
        //     echo "Range ta chambre, on dirait la cage d'un bonobo!";
        // } else {
        //     echo "Ta chambre est trop propre, vis un peu!";
        // }

            // Exercice 0.a

        // $chambre_est_sale = 0;

        // if ($chambre_est_sale = 0) {
        //     echo "Maniaque";
        // } elseif ($chambre_est_sale < 1) {
        //     echo "Immaculée";
        // } elseif ($chambre_est_sale < 2) {
        //     echo "en ordre";
        // } elseif ($chambre_est_sale < 3) {
        //     echo "sale";
        // } else {
        //     echo "dégoutante";
        // }

            // Exercice 1

        $heure_actuel = 15.00;

        if ($heure_actuel >= 5.00 AND $heure_actuel <= 9.00) {
            echo "Bonjour!";
        } elseif ($heure_actuel >= 9.01 AND $heure_actuel <= 12.00) {
            echo "Bonne journée!";
        } elseif ($heure_actuel >= 12.01 AND $heure_actuel <= 16.00) {
            echo "Bon après-midi!";
        } elseif ($heure_actuel >= 16.01 AND $heure_actuel <= 21.00) {
            echo "Bonne soirée!";
        } else {
            echo "Bonne nuit!";
        }
    ?>
</body>
</html>