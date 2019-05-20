<?php

require_once 'config/configuracion.php';
require_once 'core/181025validacionFormularios.php';
require_once 'model/Usuario.php';
require_once 'model/Rest.php';
require_once 'model/Departamento.php';

$controladores = [
    'login' => 'controller/cLogin.php',
    'inicio' => 'controller/cInicio.php',
    'wip' => 'controller/cWIP.php',
    'error' => 'controller/cError.php',
    'registro' => 'controller/cRegistro.php',
    'miCuenta' => 'controller/cMiCuenta.php',
    'borrarCuenta' => 'controller/cBorrarCuenta.php',
    'REST' => 'controller/cREST.php',
    'consultarDepartamento' => 'api/ConsultarDepartamento.php',
    'MtoDepartamentos' => 'controller/cMtoDepartamentos.php',
    'eliminarDepartamento' => 'controller/cEliminarDepartamento.php',
    'altaDepartamento' => 'controller/cAltaDepartamento.php',
    'consultarModificarDepartamento' => 'controller/cConsultarModificarDepartamento.php'
];
$vistas = [
    'layout' => 'view/layout.php',
    'inicio' => 'view/vInicio.php',
    'login' => 'view/vLogin.php',
    'wip' => 'view/vWIP.php',
    'error' => 'view/vError.php',
    'registro' => 'view/vRegistro.php',
    'miCuenta' => 'view/vMiCuenta.php',
    'borrarCuenta' => 'view/vBorrarCuenta.php',
    'REST' => 'view/vREST.php',
    'MtoDepartamentos' => 'view/vMtoDepartamentos.php',
    'eliminarDepartamento' => 'view/vEliminarDepartamento.php',
    'altaDepartamento' => 'view/vAltaDepartamento.php',
    'consultarModificarDepartamento' => 'view/vConsultarModificarDepartamento.php'
];
?>

