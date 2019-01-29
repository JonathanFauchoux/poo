
<?php
ini_set('display_errors', 1);

class Voiture { 

private $immatriculation;
private $circulation;
public $kilometrage;
private $modele;
private $marque;
public $couleur;
public $poids;
public $interval;


    function __construct($immatriculation, $circulation, $kilometrage, $modele, $marque,$couleur,$poids,$interval){ 
        $this->immatriculation = $immatriculation;
        $this->circulation = $circulation ;
        $this->kilometrage = $kilometrage;
        $this->modele = $modele;
        $this->marque = $marque;
        $this->couleur = $couleur;
        $this->poids = $poids;
        $this->interval = $interval;
        
        }

    // Si audi ...
    public function checkMarque($marque){
       if($marque == 'Audi'){
           return 'reserved ';
       }
       else{
           return 'free';
       }
    }
    // selon le poids du véhicule
    public function checkPoids($poids){
        if($poids >= 3.5){
            return 'Ce véhicule est un utilitaire';
        }
        else{
            return 'Ce véhicule est  de type commerciale';
        }
    }
    // pays selon l'immatriculation
    public function checkPays($immatriculation){
        if(substr( $immatriculation, 0, 2 ) == "BE"){
            return 'pays : Belgique';
        }
        else if (substr( $immatriculation, 0, 2 ) == "FR"){
            return 'pays : France';
        }
        else if (substr( $immatriculation, 0, 2 ) == "DE"){
            return 'pays : Allemagne';
        }
        else{
            return 'pays : non reconnu';
        }
    }
    // Adjectif selon kilometrage
    public function checkKilometre($kilometrage){
        if($kilometrage <= 100000){
            return 'Low';
        }
        else if( $kilometrage > 100000 && $kilometrage < 200000 ){
            return 'Middle ';
        }
        else if($kilometrage >= 200000 ){
            return 'High ';
        }
    }
    //Nombre d'année de service
    public function checkAge($interval){
        $date1 = new DateTime();
        $date2 = new DateTime($this->circulation);
        $int = $date2->diff($date1);

        $interval = $int->format('%y Years old');

        return $this->interval;
    }

    // + 100 000 km
    public function rouler($kilometrage){
       $kilometrage += 100000;

       return $kilometrage;

    }
   
} 


?>