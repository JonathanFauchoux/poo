<?php 
ini_set('display_errors', 0);
class Form { 
    public $action; 
    public $method;
    public $nom; 
    public $prenom;
    public $textarea;
    public $impValue;
    public $type;
    public $submit;

    function __construct($action,$method, $nom, $prenom,$textarea,$impValue,$type, $submit){ 
    $this->action = $action; 
    $this->method = $method;
    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->textarea = $textarea;
    $this->impValue = $impValue;
    $this->type = $type;
    $this->submit = $submit;
    
    }
    
    function StartForm(){
        
       echo ( '<form action="'.$this->action.'" method="'.$this->method.'">
            <p><label for="nom">'.$this->nom.'</label>
            <input name="nom" placeholder="'.$this->nom.'" >
            <label for="prenom">'.$this->prenom.'</label>
            <input name="prenom" placeholder="'.$this->prenom.'" ></p>
            <p><label for="'.$this->impValue.'">'.$this->impValue.'</label>
            <input type="'.$this->type.'" id=""></p>
            <textarea rows="3" cols="20" placeholder="'.$this->textarea.'"></textarea>
            
            <input type="submit" placeholder="'.$this->submit.'" >
            </form>');

    } //retourne le formulaire




} 


$v = new Form("index.php","post","Nom","Prenom","votre message","check it","radio","Modifier"); 
$v->StartForm();
?>
