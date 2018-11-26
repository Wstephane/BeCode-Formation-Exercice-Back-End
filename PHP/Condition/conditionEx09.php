<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Terniaire</title>
</head>
<body>
    <form>
        <p>Quel est votre sex ?</p>
        <input type="radio" name="genre" value="h"/><label for="genre">Homme</label>
        <input type="radio" name="genre" value="f"/><label for="genre">Femme</label>
        <input type="radio" name="genre" value="autre"/><label for="genre">Autre</label>
        <input type="submit" value="valider"/>
    </form>

    <?php

        $recupGenre = $_GET["genre"];

        $bonjour = ($recupGenre == "h") ? "Bonjour à vous" :
        (($recupGenre == "f") ? "Bonjour à vous Mesdame" : "Bonjour à vous, tous");

        echo $bonjour;
    ?>
</body>
</html>