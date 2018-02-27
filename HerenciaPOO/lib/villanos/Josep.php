<?php
require_once "lib/Personaje.php";
/**
 *
 */
class Josep  extends Personaje
{

  function __construct()
  {
    parent::setNombre("SOY JOSEP");
    parent::setVida(1);
  }

}
