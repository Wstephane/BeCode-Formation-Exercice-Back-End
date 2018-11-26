<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Boucle</title>
</head>
<body>

    <?php
        $pronoms_personnels = array ('Je', 'Tu', 'Il/Elle','Nous', 'Vous', 'Elles/Ils');

        foreach ($pronoms_personnels as $pronoms_personnels) {
            echo($pronoms_personnels);
            switch ($pronoms_personnels) {
                case 'Je' :
                    echo " codes ";
                    break;
                case 'Tu' :
                    echo " codes ";
                    break;
                case 'Il/Elle' :
                    echo " code ";
                    break;
                case 'Nous' :
                    echo " codons ";
                    break;
                case 'Vous' :
                    echo " codez ";
                    break;
                case 'Elles/Ils' :
                    echo " codent ";
                    break;
            }
        }

        $nombre = 1;

        while ($nombre <= 120) {
            echo $nombre;
            $nombre++;
        }
        echo '<pre>';
        for ($nombre = 1; $nombre <= 120; $nombre++) {
            echo $nombre;
        }
        echo '<pre>';
        $membreClasse = array ('Julie', 'Morgane', 'Meilin', 'Marianna', 'Romain', 'Claudiu', 'Mostapha', 'etc...');
        echo '<pre>';
        foreach ($membreClasse as $membreClasse) {
            echo($membreClasse);
        }
        echo '<pre>';

        $pays = array (
                'BE' => 'Belgique',
                'FR' => 'France',
                'DE' => 'Allemagne',
                'NL' => 'Pays-Bas',
                'ES' => 'Espagne',
                'PT' => 'Portugal',
                'LU' => 'Luxembourg',
                'GB' => 'Royaume Uni',
                'DK' => 'Danemark',
                'AU' => 'Autriche',
        );

        echo '<select>';
        foreach ($pays as $key => $value) {
            echo '<option value= >'.$key.'</option>';
        }
        echo '<select>';


    ?>
</body>
</html>