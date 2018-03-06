<?php
require_once "../model/Db.php";
/**
 *
 */
class Table
{
  //Generar el conector a la base de datos
  private $db;
  private $conector;

  function __construct()
  {
    $this->db=new Db();
    $this->db->conectar();
    $this->conector=$this->db->getConector();
  }

  public function findAll($tabla){
    $consulta="SELECT * FROM $tabla";
    $resultado=$this->conector->query($consulta);
    return $resultado;
  }

  public function find($query){
    $resultado=$this->conector->query($consulta);
    return $resultado;
  }

}


 ?>
