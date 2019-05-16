<?php
require_once '../model/DBPDO.php';
require_once '../config/configuracion.php';

header('Content-Type: application/JSON');

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (isset($_GET['Codigo'])) {
        $sql = Departamento::buscarDepartamentoPorCodigo($_GET['Codigo']);
        header("HTTP/1.1 200 OK");
        echo json_encode($sql->fetch(PDO::FETCH_ASSOC), JSON_PRETTY_PRINT);
        exit();
    } 
}
?>

?>

