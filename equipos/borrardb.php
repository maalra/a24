<?php
include 'equipo.php';
$borrar = new equipo();
$borrar->borrarEquipo($_GET['nombre']);
echo "El equipo ".$_GET['nombre']." se ha borrado de la DB";
?>
