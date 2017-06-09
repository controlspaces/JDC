<html>
    <head>
        <meta charset="utf-8"/>
        <meta name="description" content="asignacion de espacios, prestamos, juan de castellanos"/>
        <title>ControlSpaces JDC</title>
        <script type="text/javascript" src="js/jquery-3.2.0.min.js"></script>
        <script type="text/javascript" src="js/index.js"></script>
        <link rel="stylesheet" type="text/css" href="css/index.css">
        <link rel="stylesheet" type="text/css" href="css/modulos.css">
    </head>
    
    <body>
        <div id="mainContent">
            
            <?php
                require_once("header.php");
            ?>
            
            <div id="content">
                <div id="content_list">
                    <div id="titulo-modulos">Asignación de espacios físicos</div>
                    <img src="" class="foto" id="foto-misional">
                    <a href="prestamo.php">
                        <img src="" class="foto" id="foto-prestamo">    
                    </a>
                    
                    <div class="modulo" id="misional">Filosofía misional</div>
                    <div class="modulo" id="prestamo">Préstamo de espacios para eventos</div>
                </div>
            </div>
            
           <?php
                require_once("footer.php");
            ?>
            
        </div>
    </body>
</html>
