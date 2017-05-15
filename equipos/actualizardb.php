<?php
include 'equipo.php';
$actualizar = new equipo();
$actualizar->actualizarequipo($_POST['nombre'],$_POST['ciudad'],$_POST['conferencia'],$_POST['division']);
echo .$_POST['nombre']." ha sido actualizado";
 ?>
