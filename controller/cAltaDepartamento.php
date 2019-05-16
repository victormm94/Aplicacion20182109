<?php

$entradaOK = true;

$aFormulario = ['codDepartamento' => null,
    'descDepartamento' => null,
    'volumen' => null
];

$aErrores = ['codDepartamento' => null,
    'descDepartamento' => NULL,
    'volumen' => NULL,
    'error' => NULL
];

if (isset($_REQUEST['Volver'])) {
    $_SESSION['pagina'] = 'MtoDepartamentos';
    header('Location: index.php');
    exit;
}

if (isset($_POST['Aceptar'])) {
    $aErrores['codDepartamento'] = validacionFormularios::comprobarAlfabetico($_POST['codDepartamento'], 3, 3, 1);
    $aErrores['descDepartamento'] = validacionFormularios::comprobarAlfabetico($_POST['descDepartamento'], 60, 1, 1);
    $aErrores['volumen'] = validacionFormularios::comprobarFloat($_POST['volumen'], 999999, 1, 1);

    if (Departamento::validarCodNoExiste($_POST['codDepartamento'])) {
        $aErrores['error'] = 'El codigo de departamento ya existe';
        $entradaOK = false;
    }

    foreach ($aErrores as $campo => $error) {
        if ($error != null) {
            $entradaOK = false;
            $_POST[$campo] = "";
        }
    }
} else {
    $entradaOK = false;
}
if (isset($_POST['Aceptar']) && $entradaOK) {

    $aFormulario['codDepartamento'] = $_POST['codDepartamento'];
    $aFormulario['descDepartamento'] = $_POST['descDepartamento'];
    $aFormulario['volumen'] = $_POST['volumen'];

    Departamento::altaDepartamento($aFormulario['codDepartamento'], $aFormulario['descDepartamento'], $aFormulario['volumen']);
    $_SESSION['pagina'] = 'MtoDepartamentos';
    header('Location: index.php');    
} else {
    $_SESSION['pagina'] = 'altaDepartamento';
    require_once $vistas["layout"];
}
?>
