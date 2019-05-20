<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Consultar/Modificar Departamento</title>        
        <link rel="stylesheet" href="webroot/estilos/bootstrap.css">
        <link rel="stylesheet" href="webroot/estilos/images/estilosDepartamento.css">
    </head>
    <body> 
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">  
            <div class="container-fluid col-lg-3">
                <legend>Consultar/Modificar Departamento</legend>
                <div class="form-group">
                    <label for="exampleInputCod">Codigo Departamento</label>
                    <input type="text" class="form-control" id="exampleInputCod" aria-describedby="emailHelp" name="CodDepartamento" value="<?php echo $_SESSION['CodDepartamento'] ?>" disabled > 
                </div>
                <div class="form-group">
                    <label for="exampleInputDesc">Descripcion Departamento</label>
                    <input type="text" class="form-control" id="exampleInputDesc" aria-describedby="emailHelp" name="DescDepartamento" value="<?php
                    if (isset($_POST['DescDepartamento']) && is_null($aErrores['DescDepartamento'])) {
                        echo $_POST['DescDepartamento'];
                    } else {
                        echo $_SESSION['DescDepartamento'];
                    }
                    ?>">                                           
                </div>
                <div class="form-group">
                    <label for="exampleInputBaja">Fecha de Baja</label>
                    <input type="text" class="form-control" id="exampleInputBaja" name="FechaBaja" value="<?php echo $_SESSION['FechaBaja'] ?>" disabled>                     
                </div>
                <div class="form-group">
                    <label for="exampleInputUsuario">Volumen</label>
                    <input type="text" class="form-control" id="exampleInputUsuario" aria-describedby="emailHelp" name="Volumen" value="<?php
                    if (isset($_POST['Volumen']) && is_null($aErrores['Volumen'])) {
                        echo $_POST['Volumen'];
                    } else {
                        echo $_SESSION['VolumenDeNegocio'];
                    }
                    ?>">                     
                </div> 
                <?php if ($aErrores['descripcion'] != null) { ?>
                    <div class = "alert alert-dismissible alert-primary">
                        <?php echo $aErrores['error']; ?>
                    </div>
                <?php }
                ?>
                <?php if ($aErrores['volumen'] != null) { ?>
                    <div class = "alert alert-dismissible alert-primary">
                        <?php echo $aErrores['volumen']; ?>
                    </div>
                <?php }
                ?>
                <input class="btn btn-primary" type="submit" name="Update" value="Update">
                <input class="btn btn-primary" type="submit" name="Volver" value="Volver">
            </div>
        </form>         
    </body>
</html>
