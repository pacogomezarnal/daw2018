<?php
/**
 * Clase que implementa un dado con caras numericas
 */
class Dado
{
  //propiedades
  private $lados=6;

  //Constructor
  function __construct()
  {

  }

  /**
   * Devuelve una tirada aleatoria
   *
   */
   public function tirada(){
     return rand(1,$this->lados);
   }

   /**
    * Devuelve un array de tiradas aleatorias
    * @param int tiradas
    *
    */
    public function arrayTiradas($numTiradas){
      if($numTiradas<0) return false;
      else{
        $tiradas=[];
        for($i=1;$i<=$numTiradas;$i++) $tiradas[]=rand(1,$this->lados);
        /*
        * Otra opción podría ser
        * for($i=1;$i<=$numTiradas;$i++) $tiradas[]=$this->tirada();
        */
        return $tiradas;
      }
    }

  /**
   * Get the value of Clase que implementa un dado con caras numericas
   *
   * @return mixed
   */
  public function getLados()
  {
      return $this->lados;
  }

  /**
   * Set the value of Clase que implementa un dado con caras numericas
   *
   * @param mixed lados
   *
   */
  public function setLados($lados)
  {
    if($lados<0) $this->lados = $lados;
    else $this->lados = $lados;
  }

}


 ?>
