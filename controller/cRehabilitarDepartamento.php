<?php

$departamento = Departamento::buscarDepartamentoPorCodigo($_SESSION['CodDepartamento']);


if (isset($_REQUEST['Cancelar'])) {
    $_SESSION['pagina'] = 'MtoDepartamentos';
    header('Location: index.php');
    exit;
}

if (isset($_POST['Aceptar'])) {
    $departamento->rehabilitaDepartamento();
    $_SESSION['pagina'] = 'MtoDepartamentos';
    header('Location: index.php');
    exit;
} else {
    $_SESSION['pagina'] = 'rehabilitarDepartamento';
    require_once $vistas["layout"];
}
?>
