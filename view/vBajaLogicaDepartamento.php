<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Baja Departamento</title>
        <link rel="stylesheet" href="webroot/estilos/estilosAñadir.css">
        <link rel="stylesheet" href="webroot/estilos/bootstrap.css">
    </head>
    <body> 
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">              
            <div class="container-fluid col-lg-3">
                <?php echo $_SESSION['CodDepartamento']; ?>
                <legend>Baja Departamento</legend>  
                <div class="form-group">
                    <label for="exampleInputBorrarDepartamento">¿Esta Seguro que quiere dar de baja este departamento?</label>
                    <input class="btn btn-primary" type="submit" name="Aceptar" value="Aceptar"> 
                    <input class="btn btn-primary" type="submit" name="Cancelar" value="Cancelar">
                </div>
            </div>
        </form>         
    </body>
</html>