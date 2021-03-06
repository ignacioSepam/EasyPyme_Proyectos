<?php

namespace Ejercicio\Entity\Dao;

use Ejercicio\Entity\Dao\GenericDao;

//hace referencia a la clase Dao que se encuentra dentro de la carpeta Dao


class EmpleadoDao extends GenericDao {
    //como Extiende de la clase Abstracta GenericDao,
    //empleados dao recoge automáticamente todos los metodos. (Está obligado)
    
    public function __construct() {
        parent::__construct();
        
        $this->entityName = 'Ejercicio\Entity\Entity\Empleado';
    }
}


//uso  exclusivo doctrine, usos especifico.
//te doy un email y te devuelvo nombre empleado