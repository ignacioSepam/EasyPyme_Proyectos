<?php

namespace Ejercicio\Action\Validation;
use Core\Utilidades\Check;

class ProyectosValidation extends GenericValidation {
    
     
    public function __construct() {
    
        parent::__construct();
    }


    public static function checkToInsert($entity){
        
        
        
        
        throw new Exception('test message');
    }
    
    public static function checkToUpdate($entity){
        
    }
    
    public static function checkToDelete($entity){
        
    }
    
    





    
}