<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Inicio</title>        
        <link rel="stylesheet" href="webroot/estilos/bootstrap.css">
        <link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Germania+One" rel="stylesheet">
        <link rel="stylesheet" href="webroot/estilos/estilosAñadir.css">
    </head>
    <body>        
        <?php
        /**
          @author: Victor Martinez Mielgo
          @since: 02/04/2019
          Comentarios: Desarrollo de una aplicación con control de acceso e identificación del usuario basado en un formulario (Login.php)
         */
        ?>   
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="container-fluid">                               
                <div class="form-group row justify-content-center" id="caja">
                    <legend class=" row justify-content-center">Mensaje de bienvenida</legend>
                    <p style="color: #00b7a8"><?php echo $_SESSION['visitas'] ?></p> 
                </div>

                <div class="form-group  row justify-content-center">
                    <legend class=" row justify-content-center">Perfil de Usuario</legend>
                    <input class="btn" style="background-color: #00b7a8;" type="submit" name="Cerrar_Sesion" value="Cerrar_Sesion">
                    <input class="btn" style="background-color: #00b7a8;" type="submit" name="Detalle" value="Detalle"> 
                    <input class="btn" style="background-color: #00b7a8;" type="submit" name="MiCuenta" value="MiCuenta">
                </div>

                <div class="form-group  row justify-content-center">
                    <legend class=" row justify-content-center">Mantenimietos y REST</legend>
                    <input class="btn" style="background-color: #00b7a8;" type="submit" name="REST" value="REST">  
                    <input class="btn" style="background-color: #00b7a8;" type="submit" name="MtoDepartamentos" value="MtoDepartamentos"> 
                    <?php if ($_SESSION['usuarioDAW208']->getPerfil() == 'administrador') { ?>
                        <input class="btn btn-danger" type="submit" name="MtoUsuarios" value="MtoUsuarios"/>
                    <?php } ?>
                </div>
            </div>
        </form>    
    </body>
</html>

