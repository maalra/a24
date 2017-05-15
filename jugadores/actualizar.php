<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ACTUALIZAR </title>
  </head>
  <body>

    <form class="" action="actualizarDB.php" method="post">
      
		Codigo: <input readonly type="text" name="codigo" value="<?=$_GET['codigo']?>"><br><br>
		Nombre: <input type="text" name="nombre" value="<?=$_GET['nombre']?>"><br><br>
		Procedencia: <input type="text" name="procedencia" value="<?=$_GET['procedencia']?>"><br><br>
		Altura: <input type="text" name="altura" value="<?=$_GET['altura']?>"><br><br>
		Peso: <input type="text" name="peso" value="<?=$_GET['peso']?>"><br><br>
		Posicion: <input type="text" name="posicion" value="<?=$_GET['posicion']?>"><br><br>
		Equipo: <input type="text" name="equipo" value="<?=$_GET['equipo']?>"><br><br>

      <input type="submit" name="" value="Enviar">
    </form>
  </body>
</html>
