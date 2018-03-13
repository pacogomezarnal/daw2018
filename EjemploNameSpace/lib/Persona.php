<?php
namespace Lib\Mundo;

/**
 *
 */
class Persona
{
  private $nombre;

  function __construct()
  {

  }

  public function setNombre($nombre){
    $this->nombre=$nombre;
  }

  public function getNombre(){
    return $this->nombre;
  }
}


 ?>
