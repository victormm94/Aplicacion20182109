<?php

$departamento = Departamento::buscarDepartamentoPorCodigo($_SESSION['CodDepartamento']);

if (isset($_REQUEST['Cancelar'])) {
    $_SESSION['paginaAnterior'] = $_SESSION['pagina'];
    $_SESSION['pagina'] = 'MtoDepartamentos';
    header('Location: index.php');
    exit;
}

if (isset($_REQUEST['Aceptar'])) {    
    if ($departamento->bajaFisicaDepartamento()) {
        $_SESSION['pagina'] = 'MtoDepartamentos';
        header('Location: index.php');
        exit;
    }
} else {
    $_SESSION['pagina'] = 'eliminarDepartamento';
    require_once $vistas["layout"];
}
?>
