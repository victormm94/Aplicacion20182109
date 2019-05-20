<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>   
        <link rel="stylesheet" href="webroot/estilos/images/estilosDepartamento.css"> 
        <script src="webroot/jquery-3.3.1.js"></script>
        <script src="webroot/popper.min.js"></script>
        <script src="webroot/bootstrap.min.js"></script>     
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
            <div class="container-fluid col-lg-3">
                <legend>Login</legend>
                <div class="form-group">
                    <label for="exampleInputUsuario">Usuario</label>
                    <input type="text" class="form-control" id="exampleInputUsuario" aria-describedby="emailHelp" placeholder="Enter Usuario" name="usuario" value="<?php
                    if (isset($_POST['usuario']) && is_null($aErrores['usuario'])) {
                        echo $_POST['usuario'];
                    }
                    ?>">                    
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword" placeholder="Password" name="password" value="<?php
                    if (isset($_POST['password'])) {
                        echo $_POST['password'];
                    }
                    ?>">
                </div>  
                <?php if ($aErrores['error'] != null) { ?>
                    <div class = "alert alert-dismissible alert-primary">
                        <?php echo $aErrores['error']; ?>
                    </div>
                <?php }
                ?>

                <input class="btn btn-primary" type="submit" name="Aceptar" value="Aceptar">
                <input class="btn btn-primary" type="button" name="Salir" value="Salir" onclick="location = '../indexProyectoDWES.html'">
                <input class="btn btn-primary" type="submit" name="Registro" value="Registro">
            </div> 
            <div class="row">
                <div id="demo" class="carousel slide w-50 mx-auto" data-ride="carousel">
                    <div class="carousel-inner w-50 mx-auto">
                        <div class="carousel-item active">
                            <img src="webroot/carrusel/180503ArbolDeNavegacion.jpg" alt="primera imagen" class="img-fluid">         
                        </div>
                        <div class="carousel-item">
                            <img src="webroot/carrusel/180503CasosDeUso.jpg" alt="primera imagen" class="img-fluid">
                        </div>

                        <div class="carousel-item">
                            <img src="webroot/carrusel/180503DiagramaDeClases.jpg" alt="primera imagen" class="img-fluid">              
                        </div>
                        <div class="carousel-item">
                            <img src="webroot/carrusel/180503ModeloFisicoDeDatos.jpg" alt="primera imagen" class="img-fluid">              
                        </div>
                        <div class="carousel-item">
                            <img src="webroot/carrusel/180503RelacionDeFicheros.jpg" alt="primera imagen" class="img-fluid">              
                        </div>
                        <div class="carousel-item">
                            <img src="webroot/carrusel/EstructuraDeAlmacenamiento.JPG" alt="primera imagen" class="img-fluid">              
                        </div>
                    </div>
                    <a href="#demo" class="carousel-control-next bg-info" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>

                    <a href="#demo" class="carousel-control-prev bg-info" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a> 

                    <ul class="carousel-indicators">
                        <li data-target="#demo" data-slide-to="0" class="active"></li>
                        <li data-target="#demo" data-slide-to="1" class="active"></li>
                        <li data-target="#demo" data-slide-to="2" class="active"></li>
                    </ul>
                </div>
            </div>
        </div> 
    </form>         
</body>
</html>
