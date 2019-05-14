<?php

require_once 'model/DepartamentoPDO.php';
require_once 'model/DBPDO.php';

class Departamento {

    private $CodDepartamento;
    private $DescDepartamento;
    private $FechaBaja;

    public function __construct($CodDepartamento, $DescDepartamento, $FechaBaja) {
        $this->CodDepartamento = $CodDepartamento;
        $this->DescDepartamento = $DescDepartamento;
        $this->FechaBaja = $FechaBaja;
    }

    public function getCodDepartamento() {
        return $this->CodDepartamento;
    }

    public function getDescDepartamento() {
        return $this->DescDepartamento;
    }

    public function getFechaBaja() {
        return $this->FechaBaja;
    }

    public static function buscarDepartamentoPorCodigo($CodDepartamento) {
        $departamento = null;
        $aDepartamento = DepartamentoPDO::buscarDepartamentoPorCodigo($CodDepartamento);
        if (!empty($aDepartamento)) {
            $departamento = new Departamento($aDepartamento['CodDepartamento'], $aDepartamento['DescDepartamento'], $aDepartamento['FechaBaja']);
        }
        return $departamento;
    }

}

?>
