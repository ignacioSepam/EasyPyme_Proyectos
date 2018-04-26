<?php

namespace Ejercicio\Entity\Dao;
use Ejercicio\Entity\Dao\GenericDao;

class RealizaDao extends GenericDao {
    
    //constructor
    
    public function __construct() {
        parent::__construct();
        
        $this->entityName = 'Ejercicio\Entity\Entity\Realiza';
    }
    
    
    
    
    
}

  //uso  exclusivo doctrine, usos especifico.
//te doy un email y te devuelvo nombre empleado