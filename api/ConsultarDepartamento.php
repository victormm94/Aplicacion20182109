<?php

//header('Content-Type: application/JSON');

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (isset($_GET['Codigo'])) {
        $sql = Departamento::buscarDepartamentoPorCodigo($_GET['Codigo']);
        $aDepartamento = [];
        $aDepartamento['CodDepartamento'] = $sql->getCodDepartamento();
        $aDepartamento['DescDepartamento'] = $sql->getDescDepartamento();
        $aDepartamento['FechaBaja'] = $sql->getFechaBaja();
        header("HTTP/1.1 200 OK");
        echo json_encode($aDepartamento); 
        exit();
    } 
}
?>