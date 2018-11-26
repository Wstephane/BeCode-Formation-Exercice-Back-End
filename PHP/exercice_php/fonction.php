<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fonction</title>
</head>
<body>
    <?php

        // Exercice 1

        function mettreEnMasjucule($nom) {
            return $nomM = ucfirst($nom);
        }
        echo '<p>'.mettreEnMasjucule("emilie").'</p>';

        // Exercice 2

        function annee() {
            return date('Y');
        }
        echo '<p>'.annee().'</p>';

        // Exercice 3

        function dateAuj() {
            return date('l jS \of F Y h:i:s A');
        }
        echo '<p>'.dateAuj().'</p>';

        // Exercice 4

        function calcul($a, $b) {
            return $a + $b;
        }
        echo '<p>'.calcul(1, 2).'</p>';

        // Exercice 5

        function calculInt($a, $b) {
            if (is_numeric($a) AND is_numeric($b)) {
                echo "C'est numérique.";
            } else {
                echo "Erreur, argument non numérique.";
            }
            return $a + $b;
        }
        echo '<p>'.calculInt(3, 2).'</p>';

        // Exercice 6

        function inialeM($phrase) {
            $N_phrase = explode(" ",$phrase);
            foreach($N_phrase as $lettre) {
                $phrase_initiale .= $lettre{0}.'.';
            }
            return strtoupper($phrase_initiale);
        }
        echo '<p>'.inialeM("In Code We Trust!").'</p>';

        // Exercice 7

        function remplaceAetE($mot) {
            return $mot = str_replace("ae", "æ", $mot);
        }
        echo '<p>'.remplaceAetE("caecotrophie").'</p>';

        // Exercice 8

        function remplaceæ($mot2) {
            return $mot2 = str_replace("æ", "ae", $mot2);
        }
        echo '<p>'.remplaceæ("sphærotheca").'</p>';

        // Exercice 9

        function feedback($warning, $bonjour) {
            echo '<div class="'.$warning.'">'.$bonjour.'</div>';
        }

        echo '<p>'.feedback("warning","Adresse email incorrecte").'</p>';
  
        // Exercice 10

        function feedback2($bonjour2 = "Hello", $warning2 = "info") {
            echo '<div class="'.$warning2.'">'.$bonjour2.'</div>';
        }

        echo '<p>'.feedback2("Adresse email incorrecte").'</p>';

        // Exercice 11

        // sur fonction2.php

        // Exercice 12

        function lettreMinuscule($phrase2) {
            return $phraseInverser = strtolower($phrase2);
        }
        echo '<p>'.lettreMinuscule("ARRÊTE DE CRIER JE N'ENTENDS PLUS RIEN!!!").'</p>';

        // Exercice 13

        function volume_dun_cone($rayon, $hauteur) {
            $volume = $rayon * $rayon * 3.14 * $hauteur * (1/3);
            return $volume;
        }
        echo '<p>'.volume_dun_cone(5, 2).'</p>';

        // Exercice 14

        function reverse_string($stringToReverse) {
            return $stringR = strrev($stringToReverse);
        }
        echo '<p>'.reverse_string("J'aime le chocolat").'</p>';

        // Exercice 15

        // function buvons_un_coup() {
        //     $chanson = "Bavas a ca ma sarpata a parda, Ma la macha ma la macha, Bavas a ca ma sarpata a parda, Ma la macha a ravana.";
        //     $substitutions = ['E', 'I', 'O', 'U', 'OU', 'É', 'È', 'OI', 'UI', 'OUI', 'AN', 'IN', 'ON', 'UN', 'OIN'];
        //     $chanson_N = explode(" ", $chanson);
        //     foreach($chanson_N as $voyelle) {
        //         foreach($substitutions as $lettre)
        //         $lettre = 
        //         $voyelle = str_replace("a", $substitutions[0], $chanson);
        //     }
        //     return $voyelle;
        // }
        // echo '<pre>'.buvons_un_coup("$chanson").'</pre>';

        // function buvons_un_coup() {
        //     $chanson = "Bavas a ca ma sarpata a parda, Ma la macha ma la macha, Bavas a ca ma sarpata a parda, Ma la macha a ravana.";
        //     $substitutions = ['E', 'I', 'O', 'U', 'OU', 'É', 'È', 'OI', 'UI', 'OUI', 'AN', 'IN', 'ON', 'UN', 'OIN'];
        //         for($i = 0; $i <= $substitutions; $i++) {
        //             $test = str_replace("a", $substitutions[$i], $chanson);
        //         }
        //         return $test;
        // }

        // echo '<pre>'.buvons_un_coup("$chanson").'</pre>';

    ?>
</body>
</html>