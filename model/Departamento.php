<?php

require_once 'model/DepartamentoPDO.php';
require_once 'model/DBPDO.php';

class Departamento {

    private $CodDepartamento;
    private $DescDepartamento;
    private $FechaBaja;
    private $VolumenDeNegocio;

    public function __construct($CodDepartamento, $DescDepartamento, $FechaBaja, $VolumenDeNegocio) {
        $this->CodDepartamento = $CodDepartamento;
        $this->DescDepartamento = $DescDepartamento;
        $this->FechaBaja = $FechaBaja;
        $this->VolumenDeNegocio = $VolumenDeNegocio;
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

    public function getVolumenDeNegocio() {
        return $this->VolumenDeNegocio;
    }

    public static function buscarDepartamentoPorCodigo($CodDepartamento) {
        $departamento = null;
        $aDepartamento = DepartamentoPDO::buscarDepartamentoPorCodigo($CodDepartamento);
        if (!empty($aDepartamento)) {
            $departamento = new Departamento($aDepartamento['CodDepartamento'], $aDepartamento['DescDepartamento'], $aDepartamento['FechaBaja'], $aDepartamento['VolumenDeNegocio']);
        }
        return $departamento;
    }

    public static function buscarDepartamentoPorDescripcion($DescDepartamento) {
        $departamento = null;
        $aDepartamento = DepartamentoPDO::buscarDepartamentoPorDescripcion($DescDepartamento);
        if (!empty($aDepartamento)) {
            for ($i = 0; $i < count($aDepartamento); $i++) {
                $departamento = new Departamento($aDepartamento['CodDepartamento'], $aDepartamento['DescDepartamento'], $aDepartamento['FechaBaja'], $aDepartamento['VolumenDeNegocio']);
            }
        }
        return $departamento;
    }

}

?>
