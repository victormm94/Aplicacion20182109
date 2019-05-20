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
        <link rel="stylesheet" href="webroot/estilos/bootstrap.css">
        <link rel="stylesheet" href="webroot/estilos/images/estilosDepartamento.css">
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
                    if (isset($_POST['DescDepartamento'])) {
                        echo $_POST['DescDepartamento'];
                    }
                    ?>">                    
                </div>
                <input class="btn btn-primary" type="submit" name="Buscar" value="Buscar">
                <input class="btn btn-primary" type="submit" name="Agregar" value="Agregar">
                <input class="btn btn-primary" type="submit" name="Salir" value="Salir">
            </div>

            <br>

            <table class="table table-hover container">
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
                    for ($i = 0; $i < count($aDepartamento); $i++) {
                        if ($aDepartamento[$i]->getFechaBaja() == 0) {
                            ?>
                            <tr style="background-color: #f0eec8;">
                                <td><?php echo $aDepartamento[$i]->getCodDepartamento(); ?></td>
                                <td><?php echo $aDepartamento[$i]->getDescDepartamento(); ?></td>
                                <td><?php echo $aDepartamento[$i]->getVolumenDeNegocio(); ?></td>
                                <td>
                                    <input class="btn btn-primary" type="submit" name="Editar<?php echo $i ?>" value="Editar">
                                    <input class="btn btn-primary" type="submit" name="BajaDepartamento" value="BajaDepartamento"> 
                                    <input class="btn btn-primary" type="submit" name="Borrar<?php echo $i ?>" value="Borrar">                                    
                                </td>
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


