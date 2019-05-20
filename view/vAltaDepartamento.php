<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Alta Departamento</title>       
        <link rel="stylesheet" href="webroot/estilos/bootstrap.css">
        <link rel="stylesheet" href="webroot/estilos/images/estilosDepartamento.css">
    </head>
    <body>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">  
            <div class="container-fluid col-lg-3">
                <legend>Alta</legend>
                <div class="form-group">
                    <label for="exampleInputUsuario">Codigo</label>
                    <input type="text" class="form-control" id="exampleInputUsuario" aria-describedby="emailHelp" placeholder="Enter Codigo" name="codDepartamento" value="<?php
                    if (isset($_POST['codDepartamento']) && is_null($aErrores['codDepartamento'])) {
                        echo $_POST['codDepartamento'];
                    }
                    ?>">                    
                </div>
                <div class="form-group">
                    <label for="exampleInputUsuario">Descripcion</label>
                    <input type="text" class="form-control" id="exampleInputUsuario" aria-describedby="emailHelp" placeholder="Enter Descripcion" name="descDepartamento" value="<?php
                    if (isset($_POST['descDepartamento']) && is_null($aErrores['descDepartamento'])) {
                        echo $_POST['descDepartamento'];
                    }
                    ?>">                    
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Volumen De Negocio</label>
                    <input type="text" class="form-control" id="exampleInputPassword" placeholder="Volumen" name="volumen" value="<?php
                    if (isset($_POST['volumen']) && is_null($aErrores['volumen'])) {
                        echo $_POST['volumen'];
                    }
                    ?>">
                </div>  
                <?php if ($aErrores['error'] != null) { ?>
                    <div class = "alert alert-dismissible alert-primary">
                        <?php echo $aErrores['error']; ?>
                    </div>
                <?php }
                ?>
                <?php if ($aErrores['codDepartamento'] != null) { ?>
                    <div class = "alert alert-dismissible alert-primary">
                        <?php echo $aErrores['codDepartamento']; ?>
                    </div>
                <?php }
                ?>

                <?php if ($aErrores['descDepartamento'] != null) { ?>
                    <div class = "alert alert-dismissible alert-primary">
                        <?php echo $aErrores['descDepartamento']; ?>
                    </div>
                <?php }
                ?>

                <?php if ($aErrores['volumen'] != null) { ?>
                    <div class = "alert alert-dismissible alert-primary">
                        <?php echo $aErrores['volumen']; ?>
                    </div>
                <?php }
                ?>

                <input class="btn btn-primary" type="submit" name="Aceptar" value="Aceptar">                
                <input class="btn btn-primary" type="submit" name="Volver" value="Volver">
            </div>
        </form>         
    </body>
</html>

