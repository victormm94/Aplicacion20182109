<?php

require_once 'model/DepartamentoPDO.php';

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
        $departamento = [];
        $aDepartamento = [];

        $departamento = DepartamentoPDO::buscarDepartamentoPorDescripcion($DescDepartamento);
        if (!empty($departamento)) {
            for ($i = 0; $i < count($departamento); $i++) {
                $aDepartamento[$i] = new Departamento($departamento[$i]['CodDepartamento'], $departamento[$i]['DescDepartamento'], $departamento[$i]['FechaBaja'], $departamento[$i]['VolumenDeNegocio']);
            }
        }
        return $aDepartamento;
    }

    public static function altaDepartamento($CodDepartamento, $DescDepartamento, $VolumenDeNegocio) {
        $departamento = null;
        $aDepartamento = DepartamentoPDO::altaDepartamento($CodDepartamento, $DescDepartamento, $VolumenDeNegocio);
        if (!empty($aDepartamento)) {
            $departamento = new Departamento($CodDepartamento, $DescDepartamento, $aDepartamento['FechaBaja'], $VolumenDeNegocio);
        }
        return $departamento;
    }

    public function bajaFisicaDepartamento() {
        $CodDepartamento = $this->getCodDepartamento();
        $borrarDepartamento = UsuarioPDO::borrarUsuario($CodDepartamento);
        return $borrarDepartamento;
    }

    public static function validarCodNoExiste($CodDepartamento) {
        $existe = DepartamentoPDO::validarCodNoExiste($CodDepartamento);
        return $existe;
    }

}

?>
