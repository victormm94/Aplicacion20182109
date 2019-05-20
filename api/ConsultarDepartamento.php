<?php

//header('Content-Type: application/JSON');

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (isset($_GET['Codigo'])) {
        $datos = Departamento::buscarDepartamentoPorCodigo($_GET['Codigo']);
        $aDepartamento = [];
        $aDepartamento['CodDepartamento'] = $datos->getCodDepartamento();
        $aDepartamento['DescDepartamento'] = $datos->getDescDepartamento();
        $aDepartamento['FechaBaja'] = $datos->getFechaBaja();
        $aDepartamento['VolumenDeNegocio'] = $datos->getVolumenDeNegocio();
        header("HTTP/1.1 200 OK");
        echo json_encode($aDepartamento);
        exit();
    }
}
?>