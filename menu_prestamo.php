<html>
    <head>
    <link rel="stylesheet" type="text/css" href="css/menu.css">
    <link rel="stylesheet" type="text/css" href="css/fonts/style.css">

            
</head>
    <body>
        <div id="mainContent">
            <?php
                require_once("header.php");
            ?>
            
            <div id="ruta_navegacion">
                <div id="inicio">Inicio<span class="icon-chevron-right" id="next"></span></div>
            </div>
            
            <div id="menu"> 
                <div id="titulo_menu">Navegación</div>
                <ul class="nav">

                    <li><a href="">Asignación Recurso Físico</a>
                        <ul class="sub">
                            <li><a href="">Agregar Recurso</a></li>
                            <li><a href="">Consultar Recurso</a></li>
                            <li><a href="">Modificar Recurso</a></li>
                            <li><a href="">Inact/Act Recurso</a></li>
                        </ul>
                    </li>
                    <li><a href="">Solicitud Préstamo</a>
                        <ul class="sub">
                            <li><a href="">Agregar Solicitud</a></li>
                            <li><a href="">Consultar Solicitud</a></li>
                            <li><a href="">Modificar Solicitud</a></li>
                            <li><a href="">Inact/Act Solicitud</a></li>
                        </ul>
                    </li>
                    <li><a href="">Autorización Préstamo</a>
                        <ul class="sub">
                            <li><a href="">Agregar Autorización</a></li>
                            <li><a href="">Consultar Autorización</a></li>
                            <li><a href="">Modificar Autorización</a></li>
                            <li><a href="">Inact/Act Autorización</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div ></div>
            <?php
                require_once("footer.php");
            ?>
            
        </div>
    </body>
</html

