<?php

ini_set('display_errors', 1);
class Html { 
    

    function __construct(){ 
        
        }
    //Header <link>  
    public function linkHref ($a){
        return '<link rel="stylesheet href="'.$a.'">';
    }

    public function meta($b){
       return '<meta name="description" content="'.$b.'">';
    }

    public function image($c, $d){
        return '<img src="'.$c.'" alt="'.$d.'">';
    }
    
    public function lienA($e){
        return '<a href="'.$e.'" target="_blank">GitHub</a>';
    }

    public function jsFiles($src){
        return '<script src="'.$src.'"></script>';
    }



} 


?>