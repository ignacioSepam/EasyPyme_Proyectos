<?php

namespace oauth\dao;

use oauth\dao\GenericDao;
//hace referencia a la clase Dao que se encuentra dentro de la carpeta Dao


class Oauth_acces_tokensDao extends GenericDao {
    //como Extiende de la clase Abstracta GenericDao,
    //empleados dao recoge automáticamente todos los metodos. (Está obligado)
    
    public function __construct() {
        parent::__construct();
        
        $this->entityName = '\oauth\entity\Oauth_acces_tokens';
    }
}


//uso  exclusivo doctrine, usos especifico.
//te doy un email y te devuelvo nombre empleado