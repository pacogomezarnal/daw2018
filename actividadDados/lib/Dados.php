<?php
require_once("lib/DadoAmpliado.php");
/**
 * Clase que implementa un array de dados
 */
class Dados
{
  private $dados=[]; //Array de dados inicialmente vacio

  function __construct()
  {

  }

  //Anyadir un nuevo dado al array de dados
  public function anyadirDado($dado){
    if(($dado instanceof DadoAmpliado)or($dado instanceof Dado)){
      $this->dados[]=$dado;
    }
  }

  public function tirada(){
    //La tirada será un array
    $tirada=[];
    foreach ($this->dados as $dado) {
      $tirada[]=$dado->tirada();
    }
    return $tirada;
  }
}

 ?>
