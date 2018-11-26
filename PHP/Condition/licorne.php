<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Licorne</title>
</head>
<body>
    <form>
        <p>Es-tu un humain, un chat ou une licorne ?</p>
        <input type="radio" name="genre" value="humain"/><label for="genre">Humain</label>
        <input type="radio" name="genre" value="chat"/><label for="genre">Chat</label>
        <input type="radio" name="genre" value="licorne"/><label for="genre">Licorne</label>
        <input type="submit" value="valider"/>
    </form>

    <?php

        $recupGenre = $_GET["genre"];
        if(isset($_GET["genre"])){
            $recupGenre = $_GET["genre"];
           }

        $quiEsTu = ($recupGenre == "humain") ? "<img src='gif trumpounet.gif'/>" :
        (($recupGenre == "chat") ? "<img src='gif de chat.gif'/>" :  "<img src='gif licorne.gif'/>" );

        echo $quiEsTu;
    ?>

</body>
</html>