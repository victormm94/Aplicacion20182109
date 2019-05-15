<?php

require_once 'model/DBPDO.php';

class DepartamentoPDO {

    public static function buscarDepartamentoPorCodigo($CodDepartamento) {
        $aDepartamento = [];
        $sql = 'select * from T02_Departamentos1 where CodDepartamento = ?';
        $consulta = DBPDO::ejecutarConsulta($sql, [$CodDepartamento]);
        if ($consulta->rowCount() == 1) {
            $datos = $consulta->fetchObject();
            $aDepartamento['CodDepartamento'] = $datos->CodDepartamento;
            $aDepartamento['DescDepartamento'] = $datos->DescDepartamento;
            $aDepartamento['FechaBaja'] = $datos->FechaBaja;
            $aDepartamento['VolumenDeNegocio'] = $datos->VolumenDeNegocio;
        }
        return $aDepartamento;
    }

    public static function buscarDepartamentoPorDescripcion($DescDepartamento) {
        $aDepartamento = [];
        $sql = 'select * from T02_Departamentos1 where DescDepartamento = ?';
        $consulta = DBPDO::ejecutarConsulta($sql, [$DescDepartamento]);
        if ($consulta->rowCount() == 1) {
            $datos = $consulta->fetchObject();
            $aDepartamento['CodDepartamento'] = $datos->CodDepartamento;
            $aDepartamento['DescDepartamento'] = $datos->DescDepartamento;
            $aDepartamento['FechaBaja'] = $datos->FechaBaja;
            $aDepartamento['VolumenDeNegocio'] = $datos->VolumenDeNegocio;
        }
        return $aDepartamento;
    }

    public static function altaDepartamento($CodDepartamento, $DescDepartamento, $VolumenDeNegocio) {
        $aDepartamento = [];
        $fecha = new DateTime();
        $sql = 'insert into T02_Departamentos1(CodDepartamento,DescDepartamento,FechaBaja,VolumenDeNegocio) values (?,?,?,?)';
        $consulta = DBPDO::ejecutarConsulta($sql, [$CodDepartamento, $DescDepartamento, $fecha->getTimestamp(), $VolumenDeNegocio]);
        if ($consulta->rowCount() == 1) {
            $datos = $consulta->fetchObject();
            $aDepartamento['CodDepartamento'] = $CodDepartamento;
            $aDepartamento['DescDepartamento'] = $DescDepartamento;
            $aDepartamento['FechaBaja'] = $fecha->getTimestamp();
            $aDepartamento['VolumenDeNegocio'] = $VolumenDeNegocio;
        }
        return $aDepartamento;
    }

    public function bajaFisicaDepartamento($CodDepartamento) {
        $borrarDepartamento = false;
        $sql = 'delete from T02_Departamentos1 where CodDepartamento = ?';
        $consulta = DBPDO::ejecutarConsulta($sql, [$CodDepartamento]);
        if ($consulta->rowCount() == 1) {
            $borrarDepartamento = true;
        }
        return $borrarDepartamento;
    }

}

?>
