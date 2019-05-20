<?php

$departamento = Departamento::buscarDepartamentoPorCodigo($_SESSION['CodDepartamento']);

$entradaOK = true;

$aFormulario = ['descripcion' => null,
    'volumen' => null
];

$aErrores = ['descripcion' => null,
    'volumen' => null
];

if (isset($_REQUEST['Volver'])) {
    $_SESSION['pagina'] = 'MtoDepartamentos';
    header('Location: index.php');
    exit;
}

if (isset($_POST['Update'])) {
    $aErrores['descripcion'] = validacionFormularios::comprobarAlfabetico($_POST['DescDepartamento'], 60, 1, 1);
    $aErrores['volumen'] = validacionFormularios::comprobarFloat($_POST['Volumen'], 999999, 1, 1);

    foreach ($aErrores as $campo => $error) {
        if ($error != null) {
            $entradaOK = false;
            $_POST[$campo] = "";
        }
    }
} else {
    $entradaOK = false;
}

if (isset($_POST['Update']) && $entradaOK) {
    $aFormulario['descripcion'] = $_POST['DescDepartamento'];
    $aFormulario['volumen'] = $_POST['Volumen'];

    $departamento->modificaDepartamento($aFormulario['descripcion'], $aFormulario['volumen']);
    $_SESSION['pagina'] = 'MtoDepartamentos';
    header('Location: index.php');
    exit;
} else {
    $_SESSION['pagina'] = 'consultarModificarDepartamento';
    require_once $vistas["layout"];
}
?>
