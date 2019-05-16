<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$_POST['DescDepartamento'] = '';
$aDepartamento = Departamento::buscarDepartamentoPorDescripcion($_POST['DescDepartamento']);

if (isset($_REQUEST['Salir'])) {
    $_SESSION['pagina'] = 'inicio';
    header('Location: index.php');
    exit;
}

if (isset($_POST['Borrar'])) {
    $_SESSION['pagina'] = 'eliminarDepartamento';
    header('Location: index.php');
    exit;
}

if (isset($_POST['BajaDepartamento'])) {
    $_SESSION['paginaAnterior'] = $_SESSION['pagina'];
    $_SESSION['pagina'] = 'wip';
    Header("Location: index.php");
    exit;
}

if (isset($_POST['Agregar'])) {
    $_SESSION['pagina'] = 'altaDepartamento';
    header('Location: index.php');
    exit;
}
if (isset($_POST['Buscar'])) {
    $aDepartamento = Departamento::buscarDepartamentoPorDescripcion($_POST['DescDepartamento']);
    require_once $vistas['layout'];
} else {
    $_SESSION['pagina'] = 'MtoDepartamentos';
    require_once $vistas["layout"];
}
?>
