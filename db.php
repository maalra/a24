<?php

class db
{

  private $host="localhost";
  private $user="root";
  private $pass="root";
  private $db_name="nba";

  private $conexion;

  private $error=false;
  function __construct()
  {
      $this->conexion = new mysqli($this->host, $this->user, $this->pass, $this->db_name);
      if ($this->conexion->connect_errno) {
        $this->error=true;
      }
  }
  
  function hayError(){
    return $this->error;
  }

  function conexion(){
	return $this->conexion;
  }
}
