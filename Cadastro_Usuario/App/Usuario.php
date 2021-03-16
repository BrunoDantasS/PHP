<?php

require_once 'vendor/autoload.php'; 

class Usuario extends Permissao
{
  private $nome, $telefone,$data_cadastro;

  public function cadastrar()
  {
    if (empty($this->nome)) {
      throw new Exception("Nome não está preenchido");
    } 
    elseif (empty($this->telefone)){
      throw new Exception("Telefone não está preenchido");  
    }
    elseif (empty($this->getNivel())){
      throw new Exception("Nível não está preenchido");  
    }
    
    $this->data_cadastro = date("d/m/Y");

  }

  public function getTelefone()
  {
    echo $this->telefone;
  }

  public function preencherDados($nome, $telefone, $nivel)
  {    
    $this->nome = $nome;
    $this->telefone = $telefone;
    $this->setNivel($nivel);
  }

  public function getDataCadastro()
  {
    echo date("d/m/Y");
  }

  public function getNome()
  {
    echo $this->nome;
  }

}
