<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>MtoDepartamentos</title>
        <link rel="stylesheet" href="webroot/estilos/estilosAñadir.css">
        <link rel="stylesheet" href="webroot/estilos/bootstrap.css">
        <link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Germania+One" rel="stylesheet">
    </head>
    <body>       
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

            <div class="container-fluid col-lg-3">
                <legend>Busqueda</legend>
                <div class="form-group">
                    <label for="exampleInputDescripcion">Busqueda por Descripcion</label>
                    <input type="text" class="form-control" id="exampleInputDescripcion" aria-describedby="emailHelp" placeholder="Enter DescDepartamento" name="DescDepartamento" value="<?php
                    if (isset($_POST['DescDepartamento']) && is_null($aErrores['DescDepartamento'])) {
                        echo $_POST['DescDepartamento'];
                    }
                    ?>">                    
                </div>
                <input class="btn btn-primary" type="submit" name="Buscar" value="Buscar">
                <input class="btn btn-primary" type="submit" name="Agregar" value="Agregar">
                <input class="btn btn-primary" type="submit" name="Salir" value="Salir">
            </div>

            <br>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Codigo</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Volumen</th>
                        <th scope="col">Botones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 0;
                    for ($i = 0; $i < count($aDepartamento); $i++) {
                        if ($aDepartamento[$i]->getFechaBaja() == 0) {
                            ?>
                            <tr class="table-success">
                                <td><?php echo $aDepartamento[$i]->getCodDepartamento(); ?></td>
                                <td><?php echo $aDepartamento[$i]->getDescDepartamento(); ?></td>
                                <td><?php echo $aDepartamento[$i]->getVolumenNegocio(); ?>€</td>
                            </tr>
                            <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </form>

    </body>
</html>


