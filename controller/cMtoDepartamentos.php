<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


//$_POST['DescDepartamento'] = '';
$aDepartamento = Departamento::buscarDepartamentoPorDescripcion($_POST['DescDepartamento']);

if (isset($_REQUEST['Salir'])) {
    $_SESSION['pagina'] = 'inicio';
    header('Location: index.php');
    exit;
}

for ($i = 0; $i < count($aDepartamento); $i++) {

    if (isset($_POST['Borrar' . $i])) {
        $_SESSION['CodDepartamento'] = $aDepartamento[$i]->getCodDepartamento();
        $_SESSION['pagina'] = 'eliminarDepartamento';
        header('Location: index.php');
        exit;
    }

    if (isset($_POST['AltaDepartamento' . $i])) {
        $_SESSION['CodDepartamento'] = $aDepartamento[$i]->getCodDepartamento();
        $_SESSION['pagina'] = 'rehabilitarDepartamento';
        Header("Location: index.php");
        exit;
    }

    if (isset($_POST['Editar' . $i])) {
        $_SESSION['CodDepartamento'] = $aDepartamento[$i]->getCodDepartamento();
        $_SESSION['DescDepartamento'] = $aDepartamento[$i]->getDescDepartamento();
        $_SESSION['FechaBaja'] = $aDepartamento[$i]->getFechaBaja();
        $_SESSION['VolumenDeNegocio'] = $aDepartamento[$i]->getVolumenDeNegocio();
        $_SESSION['pagina'] = 'consultarModificarDepartamento';
        Header("Location: index.php");
        exit;
    }

    if (isset($_POST['BajaDepartamento' . $i])) {
        $_SESSION['CodDepartamento'] = $aDepartamento[$i]->getCodDepartamento();
        $_SESSION['pagina'] = 'bajaLogicaDepartamento';
        Header("Location: index.php");
        exit;
    }
}

if (isset($_POST['Buscar'])) {
    $aDepartamento = Departamento::buscarDepartamentoPorDescripcion($_POST['DescDepartamento']);
    require_once $vistas['layout'];
} else {
    $_SESSION['pagina'] = 'MtoDepartamentos';
    require_once $vistas["layout"];
}
?>
