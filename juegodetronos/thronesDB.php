<?php
/**
 *
 */
class gt
{
  private $mysqli;
  private $error=false;
  function __construct() {
    $this->mysqli= new mysqli("localhost", "root", "", "gameofthrones");
    if ($this->mysqli->connect_errno) {
      $this->error=true;
    }
  }
  public function geterror(){
    return $this->error;
  }
  public function resumen(){
    return $resumen=$this->mysqli->query("SELECT plot FROM titles");
  }
  public function personajes(){
    return $personaje=$this->mysqli->query("SELECT * FROM cast");
  }

  public function tempersonajes(){
    return $personajetem=$this->mysqli->query("SELECT * FROM season_ep ");
  }
}









 ?>
