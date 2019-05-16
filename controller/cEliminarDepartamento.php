<?php

if (isset($_POST['Aceptar'])) {
    $eliminar = Departamento::bajaFisicaDepartamento();   
    $_SESSION['pagina'] = 'MtoDepartamentos';
    header('Location: index.php');
    exit;
}

if (isset($_REQUEST['Cancelar'])) {
    $_SESSION['paginaAnterior'] = $_SESSION['pagina'];
    $_SESSION['pagina'] = 'MtoDepartamentos';
    header('Location: index.php');
    exit;
} else {
    $_SESSION['pagina'] = 'eliminarDepartamento';
    require_once $vistas["layout"];
}
?>
