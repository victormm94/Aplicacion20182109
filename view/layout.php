<!DOCTYPE html>
<?php
if (isset($_SESSION['usuarioDAW208'])) {
    $vista = $vistas['inicio'];
} else {
    $vista = $vistas['login'];
}
if (isset($_SESSION['pagina'])) {
    $vista = $vistas[$_SESSION['pagina']];
}
?>
<html>
    <head>
        <title>Aplicacion20182019</title>       
        <link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Germania+One" rel="stylesheet">
        <link rel="stylesheet" href="webroot/estilos/layout.css">
        <link rel="stylesheet" href="webroot/estilos/bootstrap.css">

    </head>
    <body style="background-color: #096386;">
        <header style="background-color: #0c084c; color: white;">
            <div class="container-fluid text-center">
                <h1>Aplicacion20182019 Modelo-Vista-Controlador</h1>
            </div>
        </header>
        <?php require_once $vista; ?>
        <footer class="footer text-center" style="background-color: #0c084c; color: white;">            
            <div class="footer-block">
                <span id="headerSpan">Victor Martinez Mielgo</span>
                <span id="headerSpan"><a rel="license" href="http://creativecommons.org/licenses/by-nc/4.0/"><img alt="Licencia de Creative Commons" style="border-width:0" src="https://i.creativecommons.org/l/by-nc/4.0/88x31.png" /></a><br />Esta obra está bajo una <a rel="license" href="http://creativecommons.org/licenses/by-nc/4.0/">licencia de Creative Commons Reconocimiento-NoComercial 4.0 Internacional</a></span>
                <span><a href="http://daw-usgit.sauces.local/victormm/Aplicacion20182019" target="_blank"><img src="webroot/images/logo-git.png"></a></span>
            </div>  
        </footer>
    </body>
</html>

