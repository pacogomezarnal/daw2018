<?php
require_once "../model/Table.php";
/**
 *
 */
class Country extends Table
{

  function __construct()
  {
    parent::__construct();
  }

  public function findCountryByName($name){
    return parent::find("SELECT * FROM Country WHERE Name=$name");
  }
}



 ?>
