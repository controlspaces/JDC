<html>
    <head>
        <meta charset="utf-8"/>
        <meta name="description" content="asignacion de espacios, prestamos, juan de castellanos"/>
        <title>ControlSpaces JDC</title>
        <script type="text/javascript" src="js/jquery-3.2.0.min.js"></script>
        <script type="text/javascript" src="js/index.js"></script>
        <link rel="stylesheet" type="text/css" href="css/index.css">
        <link rel="stylesheet" type="text/css" href="css/prestamo.css">
        <link rel="stylesheet" type="text/css" href="css/fonts/style.css">
        <link rel="stylesheet" type="text/css" href="css/menu.css">
    </head>
    
    <body>
        <div id="mainContent">
            
            <?php
                require_once("header.php");
            ?>
            <div id="ruta_navegacion">
                <div class="navegacion" id="inicio">Inicio</div>
                
            </div>
            
            <?php
                require_once("menu_prestamo.php");
            ?>

            <div id="content_autorizacion">
                <a href="modulos.php">
                    <input type="button" id="regresar" value="Regresar">    
                </a>
            </div>
            
           <?php
                require_once("footer.php");
            ?>
            
        </div>
    </body>
</html>
