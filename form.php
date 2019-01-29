<?php

ini_set('display_errors', 1);
class Form { 
    public $action; 
    public $method;
    public $nom; 
    public $prenom;
    public $textarea;
    public $impValue;
    public $type;
    public $submit;

    function __construct(){ 
        
        }
    //open form   
    public function create ($action,$method){
        return '<form action="'.$action.'" method="'.$method.'">';
    }
    //input text
    public function text($a,$k){
        return '<p><label for="nom">'.$a.'</label>
        <input name="'.$k.'" placeholder="'.$a.'" </p>';
    }
    //input submit
    public function submit($b){
       return '<p><p><label for="nom">'.$b.'</label>
       <input type="submit" name="submit" placeholder="'.$b.'"></p>';
    }
    //checkbox ou radio ou autre
    public function radio($d, $e){
        return '<p><label for="'.$d.'">'.$d.'</label>
        <input type="'.$e.'" id="'.$d.'"></p>';
    }
    public function select($f,$g,$h){
        return '<p><select>
        <option value="'.$f.'">'.$f.'</option>
        <option value="'.$g.'">'.$g.'</option>
        <option value="'.$h.'">'.$h.'</option>
        </select></p>';
    }
    //textarea
    public function textarea($c){
        return '<p><textarea rows="3" cols="20" placeholder="'.$c.'"></textarea></p>';
    }
    //ferme le form
    public function end(){
        return '</form>';
    }






} 


?>