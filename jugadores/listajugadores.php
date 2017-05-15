<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>LISTA</title>
  </head>
  <body>
    <?php
      include 'jugador.php';
      $jugadores = new jugador();
      $resultado=$jugadores->listaJuadores();
      ?>
      <table border=1>
      <tr>
        <th> NOMBRE </th>
        <th> PROCEDENCIA </th>
        <th> ALTURA </th>
        <th> PESO </th>
        <th> POSICION </th>
		<th> EQUIPO </th>
		<th> BORRAR </th>
      </tr>

      <?php
      foreach($resultado as $fila){
        echo "<tr>";
        echo"<td> ".$fila['Nombre']." </td>";
        echo"<td> ".$fila['Procedencia']." </td>";
        echo"<td> ".$fila['Altura']." </td>";
        echo"<td> ".$fila['Peso']." </td>";
		echo"<td> ".$fila['Posicion']." </td>";
		echo"<td> ".$fila['Nombre_equipo']." </td>";

        echo "<td><a href='borrarDB.php?nombre=".$fila['Nombre']."'>BORRAR</a></td>";
        echo "</tr>";
      }
     ?>
  </body>
</html>
