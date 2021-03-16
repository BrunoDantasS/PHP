<?php

require_once 'vendor/autoload.php';

class Usuario
{
  private $nome, $telefone, $data_cadastro;
  public $permissao = new Permissao();
  

  public function cadastrar()
  {
    # code...
  }

  public function getTelefone()
  {
    return $this->telefone;
  }

  public function preencherDados($nome, $telefone, $nivel)
  {
    $this->nome = $nome;
    $this->telefone = $telefone;
    $this->permissao->setNivel($nivel);
  }

  public function getDataCadastro()
  {
    return date("d/m/Y");
  }

  public function getNome()
  {
    return $this->nome;
  }

}
