<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tableau</title>
</head>
<body>

    <?php
        // $pays = array( 'Belgique', 'France' , 'Allemagne', 'Pays-Bas', 'Ukraine' ); 
        // echo $pays[2];

        // $famille = array( "Maman", "Papa", "Robby", "Stéphane", "Sandra", "Raphaël" );
        // print_r($famille);

        // $platPrefere = ["pate", "pizza", "ratatouille", "Moule Frite"];
        // print_r($platPrefere);

        // $serieFilm = ["Gladiator", "BlackHawk Down", "Band of Brother", "BattleStar Gallactica", "Vikings", "Game of thrones"];
        // echo $serieFilm[0];

        $papa = array (
            'prenom' => 'Willy',
            'nom' => 'Wyns',
            'age' => '63',
            'adresse' => '10 rue des loups',
            'ville' => 'Bruxelles',
            'aimeleFoot' => True,
            'hobby' => ['Billard', 'Série Tv', 'Documentaire', 'Balade'],
        );


        $moi = array (
            'prenom' => 'Stéphane',
            'nom' => 'Wyns',
            'age' => '32',
            'adresse' => '3 Rue du Paradis',
            'ville' => 'Bruxelles',
            'aimeleFoot' => False,
            'hobby' => ['Informatique', 'Jeux Vidéo', 'Lecture'],
            'papa' => "$papa",
            );

            var_dump(count($papa));
            var_dump(count($moi));
            print_r((count($papa)) + (count($moi)));

            array_push($moi['hobby'], 'Taxidermie');
            $moi['nom'] = 'Dieudonnée';

            $ame_soeur = [
                'toi' => [
                    'prenom' => 'Sophie',
                    'nom' => 'Vanpiperzelle',
                    'age' => '27',
                    'yeux' => 'bleu',
                    'hobby' => ['Lecture', 'Danse', 'Flute'],
                ],
                 'notre enfant' => [
                     'hobby' => ['Jeux vidéo', 'taekwondo', 'draguer'],
                 ],
            ];
            print_r(array_intersect($moi['hobby'],$ame_soeur['toi']['hobby']));
            print_r(array_merge($moi['hobby'],$ame_soeur['toi']['hobby']));

            echo '<pre>';
            print_r($moi);
            echo '</pre>';

            $web_development = array (
                'frontend' => [],
                'backend' => [],

            );

            array_push($web_development['frontend'], 'xhtml');
            array_push($web_development['backend'], 'Ruby On Rails');
            array_push($web_development['frontend'], 'CSS');
            array_push($web_development['frontend'], 'Flash');
            array_push($web_development['frontend'], 'Javascript');
            print_r($web_development['frontend'][0] = 'html');
            unset($web_development['frontend'][2]);

            echo '<pre>';
            print_r($web_development);
            echo '</pre>';

    ?>
</body>
</html>