<?php
//require_once 'model/DBPDO.php';
require_once '../config/configRest.php';

try {

    $miBD = new PDO(mysql, usuario, pass); //Se inicia la variable como objeto PDO
    $miBD->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    header('Content-Type: application/JSON');

    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        if (isset($_GET['CodDepartamento'])) {
            $sql = $miBD->prepare("SELECT * FROM T02_Departamentos1 where CodDepartamento=:codigo");
            $sql->bindValue(':codigo', $_GET['CodDepartamento']);
            $sql->execute();
            header("HTTP/1.1 200 OK");
            echo json_encode($sql->fetch(PDO::FETCH_ASSOC),JSON_PRETTY_PRINT);
            exit();
        } else {
            $sql = $miBD->prepare("SELECT * FROM T02_Departamentos1");
            $sql->execute();
            header("HTTP/1.1 200 OK");
            echo json_encode($sql->fetchAll(PDO::FETCH_ASSOC),JSON_PRETTY_PRINT);
            exit();
        }
    }
} catch (PDOException $mensajeError) {
    echo "Error " . $mensajeError->getMessage() . "<br>"; //mensaje de salida
    echo "Codigo del error " . $mensajeError->getCode() . "<br>"; //mensaje de salida/codigo del error
} finally {
    unset($miBD); //Se cierra la conexion
}
?>

?>

