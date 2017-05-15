<?php
include 'equipo.php';

	if ((isset($_POST['nombre'])) && (!empty($_POST['nombre'])) && (isset($_POST['ciudad'])) && (!empty($_POST['ciudad'])) && (isset($_POST['conferencia'])) && (!empty($_POST['conferencia'])) && (isset($_POST['division'])) && (!empty($_POST['division']))) {
	  $equipo = new equipo();
	  $equipo->insertarEquipo($_POST['nombre'],$_POST['ciudad'],$_POST['conferencia'],$_POST['division']);
	 echo "DATOS OK <br>";
	}else {
	  echo "Error<br>";
	}

	$resultado = $equipo->mostrarultimo($_POST['nombre']);
	foreach ($resultado as $fila){
		echo "Nombre: ".$fila['Nombre']."<br>";
		echo "Ciudad: ".$fila['Ciudad']."<br>";
		echo "Conferencia: ".$fila['Conferencia']."<br>";
		echo "Division: ".$fila['Division']."<br>";
	}
// actualizar o borrar
	echo "<a href='actualizar.php?nombre=".$fila['Nombre']."&ciudad=".$fila['Ciudad']."&conferencia=".$fila['Conferencia']."&division=".$fila['Division']."'>ACTUALIZAR</a><br><br>";
	echo "<a href='borrarDB.php?nombre=".$fila['Nombre']."&ciudad=".$fila['Ciudad']."&conferencia=".$fila['Conferencia']."&division=".$fila['Division']."'>BORRAR</a>";
?>
