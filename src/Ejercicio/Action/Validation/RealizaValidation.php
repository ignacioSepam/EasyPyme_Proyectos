<?php
namespace Ejercicio\Action\Validation;
use Ejercicio\Action\Validation\GenericValidation;

class RealizaValidation extends GenericValidation {
     
    public function __construct() {
    $this->entity = '\entity\Entity\Realiza';
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

