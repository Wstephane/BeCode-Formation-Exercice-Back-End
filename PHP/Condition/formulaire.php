<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulaire Condition Exercice 2, 3 et 4</title>
</head>
<body>
    <form action="conditionEx0234.php" method="get">
    <p>
        <input type="number" name="age"/><label for="age">Quel et votre age svp ?</label>
        <input type="submit" value="valider"/>
        </br>
        Homme ou Femme ?
        <input type="radio" name="genre" value="masculin"/> <label for="masculin">Masculin</label>
        <input type="radio" name="genre" value="feminin"/> <label for="feminin">Féminin</label>
        </br>
        Parlez vous Anglais ?
        <input type="radio" name="anglais" value="yes"/> <label for="yes">Yes</label>
        <input type="radio" name="anglais" value="no"/> <label for="no">No</label>
    </p>
</body>
</html>