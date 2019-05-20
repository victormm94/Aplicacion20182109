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
        $contador = 0;
        $aDepartamentos = [];
        $aDepartamento = [];
        $sql = 'select * from T02_Departamentos1 where DescDepartamento like ?';
        $consulta = DBPDO::ejecutarConsulta($sql, ["%$DescDepartamento%"]);
        if ($consulta->rowCount() != 0) {
            while ($datos = $consulta->fetchObject()) {
                $aDepartamento['CodDepartamento'] = $datos->CodDepartamento;
                $aDepartamento['DescDepartamento'] = $datos->DescDepartamento;
                $aDepartamento['FechaBaja'] = $datos->FechaBaja;
                $aDepartamento['VolumenDeNegocio'] = $datos->VolumenDeNegocio;
                $aDepartamentos[$contador] = $aDepartamento;
                $contador++;
            }
        }
        return $aDepartamentos;
    }

    public static function altaDepartamento($CodDepartamento, $DescDepartamento, $VolumenDeNegocio) {
        $aDepartamento = [];
        $sql = 'insert into T02_Departamentos1(CodDepartamento,DescDepartamento,FechaBaja,VolumenDeNegocio) values (?,?,0,?)';
        $consulta = DBPDO::ejecutarConsulta($sql, [$CodDepartamento, $DescDepartamento, $VolumenDeNegocio]);
        if ($consulta->rowCount() == 1) {
            $aDepartamento['CodDepartamento'] = $CodDepartamento;
            $aDepartamento['DescDepartamento'] = $DescDepartamento;
            $aDepartamento['FechaBaja'] = 0;
            $aDepartamento['VolumenDeNegocio'] = $VolumenDeNegocio;
        }
        return $aDepartamento;
    }

    public static function bajaFisicaDepartamento($CodDepartamento) {
        $borrarDepartamento = false;
        $sql = 'delete from T02_Departamentos1 where CodDepartamento = ?';
        $consulta = DBPDO::ejecutarConsulta($sql, [$CodDepartamento]);
        if ($consulta->rowCount() == 1) {
            $borrarDepartamento = true;
        }
        return $borrarDepartamento;
    }

    public static function validarCodNoExiste($CodDepartamento) {
        $existe = false;
        $sql = 'select * from T02_Departamentos1 where CodDepartamento = ?';
        $consulta = DBPDO::ejecutarConsulta($sql, [$CodDepartamento]);
        if ($consulta->rowCount() == 1) {
            $existe = true;
        }
        return $existe;
    }

    public static function modificaDepartamento($CodDepartamento, $DescDepartamento, $Volumen) {
        $modificado = false;
        $sql = 'update T02_Departamentos1 set DescDepartamento=?, VolumenDeNegocio=? where CodDepartamento=?';
        $consulta = DBPDO::ejecutarConsulta($sql, [$DescDepartamento, $Volumen, $CodDepartamento]);
        if ($consulta->rowCount() == 1) {
            $modificado = true;
        }
        return $modificado;
    }

}

?>
