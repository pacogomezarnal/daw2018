<?php
require_once("lib/Dado.php");
/**
 * Clase que implementa un dado con caras numericas y no numericas
 */
class DadoAmpliado extends Dado
{
  //tipos de dados
  const TEXTO = 1;
  const KAMASUTRA = 2;
  const NUMERICO = 3;
  //dadoPorDefectoKamaSutra
  private $dadoKamaSutra = ["MISIONERO","69","DOGGYSTYLE","DRAGONFURIOSO","DRAGONFUEGO","COLUMPIO"];
  //propiedades
  private $tipoDado;
  //solo para el tipo TEXTO
  private $ladosDado=[];

  function __construct($tipoDado)
  {
    if($tipoDado==self::TEXTO) $this->tipoDado=self::NUMERICO;
    elseif ($tipoDado==self::KAMASUTRA){
      $this->tipoDado=self::KAMASUTRA;
      $this->ladosDado=$this->dadoKamaSutra;
    }
    else $this->tipoDado=self::NUMERICO;
  }

  //Solo para el tipo TEXTO añadir lado
  public function nuevoLadoTexto($lado){
    if($thiss->tipoDado==self::TEXTO or $this->tipoDado==self::KAMASUTRA){
      $this->ladosDado[]=$lado;
    }
  }
  public function tirada(){
    if($this->tipoDado==self::NUMERICO){
      return parent::tirada();
    }else{
      $numeroLados=sizeof($this->ladosDado);
      return $this->ladosDado[rand(0,$numeroLados-1)];
    }
  }

  public function arrayTiradas($numTiradas){
    if($this->tipoDado==self::NUMERICO){
      return parent::arrayTiradas($numTiradas);
    }else{
      if($numTiradas<0) return false;
      else{
        $tiradas=[];
        for($i=1;$i<=$numTiradas;$i++) $tiradas[]=self::tirada();
        return $tiradas;
      }
    }
  }


  /**
   * Get the value of Clase que implementa un dado con caras numericas y no numericas
   *
   * @return mixed
   */
  public function getTipoDado()
  {
      return $this->tipoDado;
  }

  /**
   * Set the value of Clase que implementa un dado con caras numericas y no numericas
   *
   * @param mixed tipoDado
   *
   * @return self
   */
  public function setTipoDado($tipoDado)
  {
    if($tipoDado==NUMERICO) $this->tipoDado=self::NUMERICO;
    else $this->tipoDado=self::TEXTO;
  }

}



 ?>
