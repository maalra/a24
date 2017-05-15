<?php
include 'jugador.php';
	// Inserta un jugador
	if ((isset($_POST['codigo'])) && (!empty($_POST['nombre'])) &&(isset($_POST['codigo'])) && (!empty($_POST['nombre'])) && (isset($_POST['procedencia'])) && (!empty($_POST['procedencia'])) && (isset($_POST['altura'])) && (!empty($_POST['altura'])) && (isset($_POST['peso'])) && (!empty($_POST['peso'])) && (isset($_POST['posicion'])) && (!empty($_POST['posicion']))&& (isset($_POST['equipo'])) && (!empty($_POST['equipo']))) {
	  $jugador = new jugador();
	  $jugador->insertarJugador($_POST['codigo'],$_POST['nombre'],$_POST['procedencia'],$_POST['altura'],$_POST['peso'],$_POST['posicion'],$_POST['equipo']);
	  echo " enviado <br>";
	}else {
	  echo "Faltan datos<br>";
	}

// Muestra el ultimo jugador insertado
	$resultado = $jugador->mostrarUltimoJugador($_POST['codigo']);
	foreach ($resultado as $fila){
		echo "Codigo: ".$fila['codigo']."<br>";
		echo "Nombre: ".$fila['Nombre']."<br>";
		echo "Procedencia: ".$fila['Procedencia']."<br>";
		echo "Altura: ".$fila['Altura']."<br>";
		echo "Peso: ".$fila['Peso']."<br>";
		echo "Posicion: ".$fila['Posicion']."<br>";
		echo "Equipo: ".$fila['Nombre_equipo']."<br>";
	}
// Links para actualizar o borrar
	echo "<a href='actualizar.php?codigo=".$fila['codigo']."&nombre=".$fila['Nombre']."&procedencia=".$fila['Procedencia']."&altura=".$fila['Altura']."&peso=".$fila['Peso']."&posicion=".$fila['Posicion']."&equipo=".$fila['Nombre_equipo']."'>ACTUALIZAR</a><br><br>";
	echo "<a href='borrarDB.php?codigo=".$fila['codigo']."&nombre=".$fila['Nombre']."&procedencia=".$fila['Procedencia']."&altura=".$fila['Altura']."&peso=".$fila['Peso']."&posicion=".$fila['Posicion']."&equipo=".$fila['Nombre_equipo']."'>BORRAR</a>";
?>
