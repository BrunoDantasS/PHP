<?php

class Permissao
{
  private $nivel;

  protected function setNivel($nivel)
  {
    $this->nivel = $nivel;
  }

  public function getNivel()
  {
    echo $this->nivel;
    return $this->nivel;
  }

}
