<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Exercice de formulaire en php</title>
  </head>
  <body>
    <div class="container">
        <h1>Formulaire de Contact</h1>
        <form class="form-horizontal" action="cible.php" name="formulaire" role="form" method="POST" enctype="multipart/form-data">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="genre" id="mme" value="option1" checked>
                <label class="form-check-label" for="mme">Mme</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="genre" id="melle" value="option2">
                <label class="form-check-label" for="melle">Melle</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="genre" id="mr" value="option3">
                <label class="form-check-label" for="mr">Mr.</label>
            </div>
            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" class="form-control" id="nom" placeholder="nom">
            </div>
            <div class="form-group">
                <label for="prenom">Prénom</label>
                <input type="text" class="form-control" id="prenom" placeholder="Prénom">
            </div>
            <div class="form-group">
                <label for="age">Age</label>
                <input type="number" class="form-control" id="age">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="email">
            </div>
            <div class="form-row align-items-center">
                <div class="col-auto my-1">
                    <label class="mr-sm-2" for="preference">Préférence</label>
                    <select class="custom-select mr-sm-2" id="preference">
                        <option selected>Devenir bénèvole</option>
                        <option value="1">Demande d'information générale</option>
                        <option value="2">Demande d'informatinon pour les dons</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="message">Votre message</label>
                <textarea class="form-control" id="message" rows="5"></textarea>
            </div>
            <div class="form-group">
                <label for="fichier">Document</label>
                <input type="hidden" name="MAX_FILE_SIZE" value="100000">
                <input type="file" class="form-control-file" id="fichier" width="100" height="auto" accept=".png,.gif,.jpg,.jpeg" required>
            </div>
            <div class="form-group">
                <p>Format de réponse souhaité</p>
                <input class="form-check-label" type="radio" name="type" id="formatFichier" value="option1" checked>
                <label class="form-check-label" for="formatFichier">HTML</label>
                <input class="form-check-label" type="radio" name="type" id="formatFichier2" value="option2">
                <label class="form-check-label" for="formatFichier2">Texte</label>
            </div>
            <button type="submit" class="btn btn-default">Contactez-nous</button>
        </form>
    </div>
  </body>
</html>