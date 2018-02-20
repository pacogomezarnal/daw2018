<?php
/**
 *
 */
class Profesor
{
  //propiedades
  private $nombre="Paco";
  private $edad=42;
  public $minusvalia=true;

  //constructor
  public function __construct($nombre,$edad){
    $this->nombre=$nombre;
    $this->edad=$edad;
  }

  //funciones
  public function imprimeEdad(){
    echo $this->edad;
  }

  public function setEdad($valor){
    if($valor<0){
      $this->edad=0;
    }else{
      $this->edad=$valor;
    }
  }

  public function getEdad(){
    return $this->edad;
  }
}

?>
