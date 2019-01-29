
<?php

ini_set('display_errors', 1);
class Validator { 
    

    function __construct(){ 
        
        }
    //Header <link>  
    public function Verif (){
        $options = array(
            'Nom' 	=> FILTER_SANITIZE_STRING,
            'Prenom' 	=> FILTER_SANITIZE_STRING,
            'check me' 	=> FILTER_SANITIZE_STRING,
            'or me' 	=> FILTER_SANITIZE_STRING,
            'not me' 	=> FILTER_SANITIZE_STRING,
            'information'=> FILTER_SANITIZE_STRING,
            'nous contacter' 	=> FILTER_SANITIZE_STRING,
            'prise de rendez-vous' 	=> FILTER_SANITIZE_STRING,
            'Votre text ici' => FILTER_SANITIZE_STRING,
            'Modifier' => FILTER_SANITIZE_STRING,
        
        );
        $result = filter_input_array(INPUT_POST, $options);  

        if ($result != null AND $result != FALSE) {

            echo "Tous les champs ont été nettoyés !";
        
        } else {
        
            echo "Un champ est vide ou n'est pas correct!";
        
        }

    }
   
} 


?>