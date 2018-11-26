<?php
        /*set php mailer class*/
        use PHPMailer\PHPMailer\PHPMailer;
        require './vendor/autoload.php';


        if(isset($_POST["submit"])){
            /*set Variables*/
            $date = date("d-m-Y");
            $heure = date("H:i");
            $name = $_POST['name'];
            $firstname = $_POST['firstname'];
            $email = $_POST['email'];
            $message= $_POST["message"];
        }

        print_r($_FILES);
        print_r($_POST);

        /*SANITIZE*/ /*supprimer les caractères non voulu*/

        $san_name = filter_var($name, FILTER_SANITIZE_STRING);
        $san_firstname = filter_var($firstname, FILTER_SANITIZE_STRING);
        $san_email = filter_var($email, FILTER_SANITIZE_EMAIL);

        /*VALIDATE*/

        if ($san_name === false) {
            $errors['name'] =  "Veuillez indiquer votre nom.";
        } else {
            $errors['name'] = "";
        }
        if ($san_firstname === false) {
            $errors['firstname'] =  "Veuillez indiquer votre prénom.";
        } else {
            $errors['firstname'] = "";
        }
        if ($san_email === false || $email == '') {
            $errors['email'] =  "Veuillez indiquer votre email.";
        } else {
            $errors['email'] = "";
        }

        print_r($_FILES);


        // // Validation

        // if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        //     echo "Cette ($email) adresse email est considérée comme valide.";
        // }

        // // Execution

        

        // // Création d'une liste blanche des extensions autorisées
        // $controle_extensions_autorisees = ['jpg', 'jpeg', 'png', 'gif'];

        // // Récupération du nom du fichier
        // $fichier_upload_nom = $_FILES['fichier']['name'];

        // // Récupération de l'extension du fichier
        // $fichier_extension =  strtolower(pathinfo($fichier_upload_nom, PATHINFO_EXTENSION));

        // // Vérification de l'extension du fichier
        // if(!in_array($fichier_extension, $controle_extensions_autorisees)){
        //     echo 'L\'extension du fichier n\'est pas autorisée';
        // }

        // // Ce tableau contient la liste des types MIME autorisés:
        // // On autorise uniquement les fichiers image de type gif, jpeg et png
        // $controle_type_mime_autorises = ['image/jpeg', 'image/pjpeg', 'image/png', 'image/gif'];

        // $fichier_upload_source = $_FILES['fichier']['tmp_name'];

        // $controle_type_mime_autorises = ['image/gif', 'image/jpeg', 'image/pjpeg', 'image/png'];

        // $fichier_upload_source = $_FILES['fichier']['tmp_name'];
        // $fichier_mime_type = mime_content_type($fichier_upload_source);

        // // On vérifie que le type MIME appartient à la liste blanche
        // if(!in_array($fichier_mime_type, $controle_type_mime_autorises)){
        //     echo 'Le type du fichier n\'est pas autorisée';
        // }

        // // Définition de la taille maximale autorisée à 100Ko, soit 100000 octets
        // $controle_taille_maximum = 100000;

        // $fichier_upload_taille = $_FILES['fichier']['size'];

        // if($fichier_upload_taille > $controle_taille_maximum){
        //     echo 'La taille du fichier est de '.$fichier_upload_taille.' et dépasse la taille autorisée de '.$controle_taille_maximum;
        // }

    ?>