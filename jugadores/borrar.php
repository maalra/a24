<?php
include 'jugador.php';
$borrar = new jugador();
$borrar->borrarJugador($_GET['nombre']);
echo "El equipo ".$_GET['nombre']." se ha borrado de la DB";
?>
