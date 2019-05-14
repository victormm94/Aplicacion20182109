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
            $aDepartamento['FechaBaja'] = $datos->TFechaBaja; 
        }
        return $aDepartamento;
    }
}

?>
