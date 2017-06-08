<html>
	<head>
		<meta charset="utf-8"/>
		<meta name="description" content="asignacion de espacios, prestamos, juan de castellanos"/>
		<title>ControlSpaces JDC</title>
		<script type="text/javascript" src="js/jquery-3.2.0.min.js"></script>
		<script type="text/javascript" src="js/index.js"></script>
		<link rel="stylesheet" type="text/css" href="css/index.css">
	</head>
    
    <body>
        <div id="mainContent">
            
            <?php
                require_once("header.php");
            ?>
            
		<div id="content">
			<div id="content_list">
				<div class="input" id="usuario">Usuario: <input class="texto" type="text" name="usuario" id="usuario-input"></div>
				<div class="input" id="password">Contraseña: <input class="texto" type="password" name="password" id="password-input"></div>
				<div class="botones" id="ingresar">Ingresar</div>
			</div>
		</div>
            
           <?php
                require_once("footer.php");
            ?>
            
        </div>
    </body>
</html>
