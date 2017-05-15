<?php
include '../db.php';
/**
 *
 */
class equipo extends db
{
  function __construct()
  {

  parent::__construct();

  }


  public function listaequipos(){
    if ($this->hayError()==true){
      return null;
    }else{

		$resultado = $this->conexion()->query("SELECT * FROM equipos ");
		return $resultado;
    }
  }

  public function insertarEquipo($nombre,$ciudad,$conferencia,$division){
    if ($this->hayError()==true){
        return null;
    }else{
      $sqlInserction="INSERT INTO equipos(Nombre,Ciudad,Conferencia,Division) VALUES ('".$nombre."','".$ciudad."','".$conferencia."','".$division."')";
      $this->conexion()->query($sqlInserction);
    }
  }

  public function mostrarultimo($nombre){
    if ($this->hayError()==true){
		return null;
	}else{

		$resultado = $this->conexion()->query("SELECT * FROM equipos WHERE nombre='".$nombre."'");
		return $resultado;
	}
	}

	public function actualizarEquipo($nombre,$ciudad,$conferencia,$division){
		if ($this->hayError()==true){
          return null;
		}
		else{
			$sqlInserction="UPDATE equipos SET Nombre='".$nombre."',Ciudad='".$ciudad."',Conferencia='".$conferencia."',Division='".$division."' WHERE Nombre='".$nombre."'";
			$this->conexion()->query($sqlInserction);
		}
    }

    public function borrarEquipo($nombre){
		if ($this->hayError()==true){
			return null;
		}
		else{
			$sqlInserction="DELETE FROM equipos WHERE Nombre='".$nombre."'";
			$this->conexion()->query($sqlInserction);
		}
    }
}
 ?>
