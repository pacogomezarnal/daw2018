<?php
require_once "lib/Personaje.php";
/**
 *
 */
class Gabo  extends Personaje
{

  function __construct($nombre)
  {
    parent::setNombre($nombre);
    parent::setVida(1000);
  }

}
