<html>
	<head>
		<meta charset="utf-8"/>
		<meta name="description" content="asignacion de espacios, prestamos, juan de castellanos"/>
		<title>Document</title>
		<script type="text/javascript" src="js/index.js"></script>
        <link rel="stylesheet" type="text/css" href="css/index.css">
        <link rel="stylesheet" type="text/css" href="css/modulos.css">
	</head>
    
    <body>
        <div id="mainContent">
            
            <?php
                require_once("header.php");
            ?>
            
            <div class="content_modulos">
                <div class="mod_misional" id="div_misional">
                    <a href="menu.php">
                        <img src="" id="misional"/>
                    </a>
                    <a href="menu.php">
                        <div id="misional_text">Filosofía Misional</div>
                    </a>
                </div>
                <div class="mod_prestamo" id="div_prestamo">
                    <a href="menu_prestamo.php">
                        <img src="" id="prestamo"/>
                    </a>
                    <a href="menu_prestamo.php">
                        <div id="prestamo_text">Préstamo de espacio para evento</div>
                    </a>
                    
                </div>
                
            </div>
            
           <?php
                require_once("footer.php");
            ?>
            
        </div>
    </body>
</html>
