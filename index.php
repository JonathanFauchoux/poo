<?php
ini_set('display_errors', 1);
require_once ('form.php');
require_once ('html.php');
require_once ('valid.php');

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php
    $innerHtml = new Html();
    echo $innerHtml->meta("Exercice php Poo");
    echo $innerHtml->linkHref('"https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous"');
    echo $innerHtml->jsFiles('"https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"');
    echo $innerHtml->jsFiles('"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"');
    echo $innerHtml->jsFiles('"https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"');
    
    ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class ="container">
        <?php

            $form = new Form();
            echo $form->create('index.php','post'); // créer le début du formulaire

            echo $form->text("Nom", "lastName"); // créer un input de type texte avec comme valeur par défaut $nom
            echo $form->text('Prenom', "firstName"); // créer un input de type texte avec comme valeur par défaut $prenom
            echo $form->radio('check me', 'radio');
            echo $form->radio('or me', 'radio');
            echo $form->radio('not me', 'checkbox');
            echo $form->select('information', 'nous contacter', 'prise de rendez-vous');
            echo $form->textarea('Votre text ici');
            
            echo $form->submit('Modifier'); //Créer un bouton pour soumettre le formulaire se nommant Modifier
            
            echo $form->end(); //fermer le formulaire
        ?>

       
    <hr>

    <?php
        echo $innerHtml->image("https://avatars2.githubusercontent.com/u/39455706?s=460&v=4", "image");
        echo $innerHtml->lienA("https://github.com/JonathanFauchoux")
    ?>
     <hr>
        <?php
            // on teste la déclaration de nos variables
            if (isset($_POST['submit'])) {
                $validation = new Validator;
                $validation->Verif('lastName','firstName' );
                echo 'Votre nom est '.$_POST['lastName'].' et votre prénom est '.$_POST['firstName'];
            }
            else{
                echo 'essais encore';
            }
        ?>
        
    </div>
    <?php
        echo $innerHtml->jsFiles("assets/js/main.js");
    ?>
</body>
</html>