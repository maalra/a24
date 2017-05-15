<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>LISTA</title>
  </head>
  <body>
    <?php
      include 'equipo.php';
      $equipos = new equipo();
      $resultado=$equipos->listaEquipos();
      ?>
      <table border=2>
      <tr>
        <th>EQUIPO</th>
        <th>CIUDAD</th>
        <th>CONFERENCIA</th>
        <th>DIVISION</th>
        <th>BORRAR</th>
      </tr>

      <?php
      foreach($resultado as $fila){
        echo "<tr>";
        echo"<td> ".$fila['Nombre']." </td>";
        echo"<td> ".$fila['Ciudad']." </td>";
        echo"<td> ".$fila['Conferencia']." </td>";
        echo"<td> ".$fila['Division']." </td>";
        echo "<td><a href='borrarDB.php?nombre=".$fila['Nombre']."'>BORRAR</a></td>";
        echo "</tr>";
      }
     ?>
  </body>
</html>
